<?php

namespace App\Services;

use App\Models\Feature;
use App\Models\File;
use App\Models\Localization;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use function PHPUnit\Framework\throwException;

class FileService
{
    protected $model;

    protected $perPageArray = [10, 20, 30, 50, 100];

    public function __construct(File $model)
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
     * Get Features.
     *
     * @param string $lang
     * @return LengthAwarePaginator
     * @throws \Exception
     */
    public function getAll(string $lang, $request)
    {
        $data = $this->model->query();

        // Check if perPage exist and validation by perPageArray [].
        $perPage = ($request->per_page != null && in_array($request->per_page,$this->perPageArray)) ? $request->per_page : 10;

        return $data->orderBy('id', 'DESC')->paginate($perPage);
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

        $localizationID = Localization::getIdByName($lang);



        $this->model = new Feature([
            'position' => $request['position'],
            'status' => $request['status'],
            'slug' => $request['slug'],
            'type' => $request['type']
        ]);

        $this->model->save();

        $this->model->language()->create([
            'feature_id' => $this->model->id,
            'language_id' => $localizationID,
            'title' => $request['title'],
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
        $data = $this->find($id);
        if (count($data->language) > 0) {
            if(!$data->language()->delete()){
                throwException('Feature languages can not delete.');
            }
        }
        if (!$data->delete()) {
            throwException('Feature  can not delete.');
        }
        return true;
    }
}
