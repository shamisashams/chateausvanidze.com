<?php

namespace App\Services;

use App\Http\Request\Admin\FeatureRequest;
use App\Models\Feature;
use App\Models\Localization;
use http\Client\Request;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use function PHPUnit\Framework\throwException;

class FeatureService
{
    protected $model;

    protected $perPageArray = [10, 20, 30, 50, 100];

    public function __construct(Feature $model)
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
        return $this->model->where('id',$id)->firstOrFail();
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

        $localization = $this->getLocalization($lang);

        $data = $data->with('language')->whereHas('language', function ($query) use ($localization, $request) {
            $query->where('language_id',$localization->id);
        });

        if ($request->id) {
            $data = $data->where('id',$request->id);
        }

        if ($request->title) {
            $data = $data->with('language')->whereHas('language', function ($query) use ($request) {
                $query->where('title','like',"%{$request->title}%");
            });
        }

        if ($request->type) {
            $data = $data->where('type',  $request->type);
        }

        if ($request->position) {
            $data = $data->where('position', 'like', "%{$request->position}%");
        }

        if ($request->slug) {
            $data = $data->where('slug', 'like', "%{$request->slug}%");
        }
        if ($request->status != null) {
            $data = $data->where('status',$request->status);
        }


        // Check if perPage exist and validation by perPageArray [].
        $perPage = ($request->per_page != null && in_array($request->per_page,$this->perPageArray)) ? $request->per_page : 10;

        return $data->paginate($perPage);
    }


    /**
     * Create Feature item into db.
     *
     * @param string $lang
     * @param array $request
     * @return bool
     */
    public function store(string $lang, array $request)
    {
        $request['status'] = isset($request['status']) ? 1 : 0;

        $localization = $this->getLocalization($lang);
        $this->model = new Feature([
            'position' => $request['position'],
            'status' => $request['status'],
            'slug' => $request['slug'],
            'type' => $request['type']
        ]);

        $this->model->save();

        $this->model->language()->create([
            'feature_id' => $this->model->id,
            'language_id' => $localization->id,
            'title' => $request['title'],
        ]);

        return true;
    }

    /**
     * Update Feature item.
     *
     * @param int $id
     * @param array $request
     * @return bool
     */
    public function update(int $id, array $request)
    {
        $request['status'] = isset($request['status']) ? 1 : 0;

        $data = $this->model->find($id);
        $data->update([
            'position' => $request['position'],
            'status' => $request['status'],
            'slug' => $request['slug'],
            'type' => $request['type']
        ]);
        $data->language()->update([
           'title' => $request['title']
        ]);

        return true;
    }

    /**
     * Create localization item into db.
     *
     * @param int $id
     * @return bool
     * @throws \Exception
     */
    public function delete($id)
    {
        $data = $this->model->find($id);
        if(!$data->language()->delete()){
            throwException('Feature languages can not delete.');
        }
        if (!$data->delete()) {
            throwException('Feature  can not delete.');
        }
        return true;
    }

    /**
     * Create localization item into db.
     *
     * @param string $lang
     * @return bool
     * @throws \Exception
     */
    protected function getLocalization(string $lang) {
        $localization = Localization::where('abbreviation',$lang)->first();
        if (!$localization) {
            throwException('Localization not exist.');
        }

        return $localization;
    }
}
