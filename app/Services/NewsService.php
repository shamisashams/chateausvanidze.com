<?php

namespace App\Services;

use App\Http\Request\Admin\NewsRequest;
use App\Models\Feature;
use App\Models\Localization;
use App\Models\News;
use App\Models\NewsLanguage;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;


use function PHPUnit\Framework\throwException;

class NewsService
{
    protected $model;

    protected $perPageArray = [8,10, 20, 30, 50, 100];

    public function __construct(News $model)
    {
        $this->model = $model;
    }

    /**
     * Get Feature by id.
     *
     * @param int $id
     * @return Feature
     */
    public function find(int $id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Get Feature by id.
     *
     * @param string $slug
     * @return News
     */
    public function findBySlug(string $slug)
    {
        return $this->model->where('slug',$slug)->firstOrFail();
    }

    /**
     * Get Features.
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
     * @param array $request
     * @return bool
     */
        public function store(string $lang,NewsRequest $request)
    {
        $request['status'] = isset($request['status']) ? 1 : 0;
        $localizationID = Localization::getIdByName($lang);

        $this->model = $this->model->create([
            'position' => $request['position'],
            'status' => $request['status'],
            'slug' => $request['slug'],
        ]);

        $this->model->language()->create([
            'news_id' => $this->model->id,
            'language_id' => $localizationID,
            'title' => $request['title'],
            'description' => $request['description'],
            'content' => $request['content'],
        ]);

        $model = $this->model;

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $file) {
                $imagename = date('Ymhs') . $file->getClientOriginalName();
                $destination = base_path() . '/storage/app/public/news/' . $this->model->id;
                $request->file('images')[$key]->move($destination, $imagename);
                $model->files()->create([
                    'name' => $imagename,
                    'path' => '/storage/app/public/news/' . $model->id,
                    'format' => $file->getClientOriginalExtension(),
                ]);
            }
        }

        return true;
    }


    /**
     * Update Feature item.
     *
     * @param int $id
     * @param array $request
     * @return bool
     */
    public function update(string $lang,int $id, NewsRequest $request)
    {
        $request['status'] = isset($request['status']) ? 1 : 0;
        $localization = $this->getlocale($lang);

        $data = $this->find($id);

        $data->update([
            'position' => $request['position'],
            'status' => $request['status'],
            'slug' => $request['slug'],
        ]);


        $newsLanguage = NewsLanguage::where(['news_id' => $data->id, 'language_id' => $localization])->first();

        if ($newsLanguage == null) {
            $data->language()->create([
                'language_id' => $localization,
                'title' => $request['title'],
                'description' => $request['description'],
                'content' => $request['content'],
            ]);
        } else {
            $newsLanguage->title = $request['title'];
            $newsLanguage->description = $request['description'];
            $newsLanguage->content = $request['content'];
            $newsLanguage->save();
        }

        // Delete  file if deleted in request.
        if (count($data->files) > 0) {
            foreach ($data->files as $file) {
                if ($request['old_images'] == null) {
                    $file->delete();
                    continue;
                }

                if (!in_array($file->id,$request['old_images'])) {
                    if (Storage::exists('public/news/' . $data->id.'/'.$file->name)) {
                        Storage::delete('public/news/' . $data->id.'/'.$file->name);
                    }
                    $file->delete();
                }
            }
        }


        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $file) {
                $imagename = date('Ymhs') . $file->getClientOriginalName();
                $destination = base_path() . '/storage/app/public/news/' . $data->id;
                $request->file('images')[$key]->move($destination, $imagename);
                $data->files()->create([
                    'name' => $imagename,
                    'path' => '/storage/app/public/news/' . $data->id,
                    'format' => $file->getClientOriginalExtension(),
                ]);
            }
        }

        return true;
    }


    /**
     * Create localization item into db.
     *
     * @param int $id
     * @return boolean
     * @throws \Exception
     */
    public function delete($id)
    {
        $data = $this->find($id);

        if (count($data->language) > 0) {
            if(!$data->language()->delete()){
                throwException('Items languages can not delete.');
            }
        }
        if (count($data->files) > 0) {
            if (Storage::exists('public/news/' . $data->id)) {
                Storage::deleteDirectory('public/news/' . $data->id);
            }
            $data->files()->delete();
        }

        if (!$data->delete()) {
            throwException('Item  can not delete.');
        }
        return true;
    }

    /**
     * Create localization item into db.
     *
     * @param string $lang
     * @return Localization
     * @throws \Exception
     */
    protected function getLocalization(string $lang) {
        $localization = Localization::where('abbreviation',$lang)->first();
        if (!$localization) {
            throwException('Localization not exist.');
        }

        return $localization;
    }

     public function getlocale($lang)
    {
        return Localization::where('abbreviation',$lang)->first()->id ?? 1;
    }
}
