<?php
/**
 *  app/Services/SliderService.php
 *
 * User:
 * Date-Time: 08.02.21
 * Time: 14:42
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Services;

use App\Http\Request\Admin\PageRequest;
use App\Http\Request\Admin\SliderRequest;
use App\Models\Feature;
use App\Models\Localization;
use App\Models\Page;
use App\Models\PageLanguage;
use App\Models\Slider;
use App\Models\SliderLanguage;
use Exception;
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
     * Get Slide by id.
     *
     * @param int $id
     * @return Feature
     */
    public function find(int $id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Get Slides.
     *
     * @param string $lang
     * @return LengthAwarePaginator
     * @throws Exception
     */
    public function getAll(string $lang,$request): LengthAwarePaginator
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
                $query->where('title','like',"%{$request->title}%")->where('language_id',$localizationID);
            });
        }

        if ($request->status != null) {
            $data = $data->where('status',$request->status);
        }


        // Check if perPage exist and validation by perPageArray [].
        $perPage = ($request->per_page != null && in_array($request->per_page,$this->perPageArray)) ? $request->per_page : 10;

        return $data->orderBy('id', 'DESC')->paginate($perPage);
    }


    /**
     * Create Feature item into db.
     *
     * @param string $lang
     * @param SliderRequest $request
     *
     * @return bool
     * @throws Exception
     */
    public function store(string $lang, SliderRequest $request)
    {
        $request['status'] = isset($request['status']) ? 1 : 0;

        $localizationID = Localization::getIdByName($lang);


        $this->model = new Slider([
            'status' => $request['status']
        ]);

        $this->model->save();

        $this->model->language()->create([
            'slider_id' => $this->model->id,
            'language_id' => $localizationID,
            'title' => $request['title'],
            'description' => $request['description'],
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $file) {
                $imagename = date('Ymhs') . $file->getClientOriginalName();
                $destination = base_path() . '/storage/app/public/slider/' . $this->model->id;
                $request->file('images')[$key]->move($destination, $imagename);
                $this->model->files()->create([
                    'name' => $imagename,
                    'path' => '/storage/app/public/slider/' . $this->model->id,
                    'format' => $file->getClientOriginalExtension(),
                ]);
            }
        }

        return true;
    }

    /**
     * Update Page item.
     *
     * @param string $lang
     * @param int $id
     * @param SliderRequest $request
     *
     * @return bool
     * @throws Exception
     */
    public function update(string $lang,int $id, SliderRequest $request): bool
    {
        $request['status'] = isset($request['status']) ? 1 : 0;
        $data = $this->find($id);
        $data->update([
            'status' => $request['status']
        ]);

        $localizationID = Localization::getIdByName($lang);

        $sliderLanguage = SliderLanguage::where(['slider_id' => $data->id, 'language_id' => $localizationID])->first();

        if ($sliderLanguage == null) {
            $data->language()->create([
                'slider_id' => $this->model->id,
                'language_id' => $localizationID,
                'title' => $request['title'],
                'description' => $request['description']
            ]);
        } else {
            $sliderLanguage->title = $request['title'];
            $sliderLanguage->description = $request['description'];
            $sliderLanguage->save();
        }

        // Delete page file if deleted in request.
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


    /**
     * Create Product item into db.
     *
     * @param int $id
     *
     * @return bool
     * @throws Exception
     */
    public function delete(int $id): bool
    {
        $data = $this->find($id);
        if (count($data->language) > 0) {
            if(!$data->language()->delete()){
                throwException('Slide languages can not delete.');
            }
        }

        if (count($data->files) > 0) {
            if (Storage::exists('public/slider/' . $data->id)) {
                Storage::deleteDirectory('public/slider/' . $data->id);
            }
            $data->files()->delete();
        }
        if (!$data->delete()) {
            throwException('Slider  can not delete.');
        }
        return true;
    }
}
