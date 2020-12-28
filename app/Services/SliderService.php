<?php

namespace App\Services;

use App\Http\Request\Admin\SliderRequest;
use App\Models\Localization;
use App\Models\Slider;
use App\Models\SliderLanguage;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\throwException;

class SliderService
{
    protected $model;

    protected $perPageArray = [10, 20, 30, 50, 100];

    public function __construct(Slider $model)
    {
        $this->model = $model;
    }

    /**
     * Get Record by id.
     *
     * @param int $id
     * @return Slider
     */
    public function find(int $id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Get Records List.
     *
     * @param string $lang
     * @return LengthAwarePaginator
     * @throws \Exception
     */
    public function getAll(string $lang,$request)
    {
        $data = $this->model->query();

        $localizationID = Localization::getIdByName($lang);



        if ($request->id) {
            $data = $data->where('id',$request->id);
        }

        if ($request->title) {
            $data = $data->with('language')->whereHas('language', function ($query) use ($localizationID, $request) {
                $query->where('title','like',"%{$request->title}%")->where('language_id',$localizationID);
            });
        }

        if ($request->description) {
            $data = $data->with('language')->whereHas('language', function ($query) use ($localizationID, $request) {
                $query->where('description','like',"%{$request->description}%")->where('language_id',$localizationID);
            });
        }

        if ($request->slug) {
            $data = $data->where('slug', 'like', "%{$request->slug}%");
        }

        if ($request->status != null) {
            $data = $data->where('status',$request->status);
        }

        $perPage = ($request->per_page != null && in_array($request->per_page,$this->perPageArray)) ? $request->per_page : 20;

        return $data->orderBy('id', 'DESC')->paginate($perPage);
    }


    public function getByID($lang , $id){

        $data = $this->model->with('files','details')->where('id',$id);
        $data = $data->first();

        return $data;
    }




    /**
     * Create Feature item into db.
     *
     * @param string $lang
     * @param moduleRequest $request
     * @return bool
     */
    public function store(string $lang,SliderRequest $request)
    {
        $request['status'] = isset($request['status']) ? 1 : 0;
        $localizationID = Localization::getIdByName($lang);

        $this->model = $this->model->create([
            'position' => $request['position'],
            'status' => $request['status'],
            'slug' => $request['slug'],
        ]);

        $this->model->language()->create([
            'slider_id' => $this->model->id,
            'language_id' => $localizationID,
            'title' => $request['title'],
            'description' => $request['description'],
            'content' => $request['content'],
        ]);

        $model = $this->model;

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $file) {
                $imagename = date('Ymhs') . $file->getClientOriginalName();
                $destination = base_path() . '/storage/app/public/slider/' . $this->model->id;
                $request->file('images')[$key]->move($destination, $imagename);
                $model->files()->create([
                    'name' => $imagename,
                    'path' => '/storage/app/public/slider/' . $model->id,
                    'format' => $file->getClientOriginalExtension(),
                ]);
            }
        }

        return true;
    }

    /**
     * Update  item.
     *
     * @param string $lang
     * @param int $id
     * @param SliderRequest $request
     * @return bool
     */
    public function update(string $lang,int $id, SliderRequest $request)
    {
        $request['status'] = isset($request['status']) ? 1 : 0;
        $localization = $this->getlocale($lang);

        $data = $this->find($id);

        $data->update([
            'position' => $request['position'],
            'status' => $request['status'],
            'slug' => $request['slug'],
        ]);


        $sliderLanguage = SliderLanguage::where(['slider_id' => $data->id, 'language_id' => $localization])->first();

        if ($sliderLanguage == null) {
            $data->language()->create([
                'language_id' => $localization,
                'title' => $request['title'],
                'description' => $request['description'],
                'content' => $request['content'],
            ]);
        } else {
            $sliderLanguage->title = $request['title'];
            $sliderLanguage->description = $request['description'];
            $sliderLanguage->content = $request['content'];
            $sliderLanguage->save();
        }

        // Delete  file if deleted in request.
        if (count($data->files) > 0) {
            foreach ($data->files as $file) {
                if ($request['old_images'] == null) {
                    $file->delete();
                    continue;
                }

                if (!in_array($file->id,$request['old_images'])) {
                    if (Storage::exists('public/slider/' . $data->id.'/'.$file->name)) {
                        Storage::delete('public/slider/' . $data->id.'/'.$file->name);
                    }
                    $file->delete();
                }
            }
        }


        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $file) {
                $imagename = date('Ymhs') . $file->getClientOriginalName();
                $destination = base_path() . '/storage/app/public/slider/' . $data->id;
                $request->file('images')[$key]->move($destination, $imagename);
                $data->files()->create([
                    'name' => $imagename,
                    'path' => '/storage/app/public/slider/' . $data->id,
                    'format' => $file->getClientOriginalExtension(),
                ]);
            }
        }

        return true;
    }


    public function delete($id)
    {
        $data = $this->find($id);

        if (count($data->language) > 0) {
            if(!$data->language()->delete()){
                throwException('Items languages can not delete.');
            }
        }
        if (count($data->files) > 0) {
            if (Storage::exists('public/slider/' . $data->id)) {
                Storage::deleteDirectory('public/slider/' . $data->id);
            }
            $data->files()->delete();
        }

        if (!$data->delete()) {
            throwException('Item  can not delete.');
        }
        return true;
    }


    public function getlocale($lang)
    {
        return Localization::where('abbreviation',$lang)->first()->id ?? 1;
    }
}
