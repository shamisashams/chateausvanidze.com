<?php

namespace App\Services;

use App\Http\Request\Admin\LocalizationRequest;
use App\Models\Localization;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class LocalizationService
{
    protected $model;

    protected $perPageArray = [10, 20, 30, 50, 100];

    public function __construct(Localization $model)
    {
        $this->model = $model;
    }

    /**
     * Get localizations.
     *
     * @param LocalizationRequest $request
     * @return LengthAwarePaginator
     */
    public function getAll($request)
    {
        $localizations = $this->model->query();

        if ($request->id) {
            $localizations = $localizations->where('id',$request->id);
        }

        if ($request->title) {
            $localizations = $localizations->where('title', 'like', "%{$request->title}%");
        }

        if ($request->abbreviation) {
            $localizations = $localizations->where('abbreviation', 'like', "%{$request->abbreviation}%");
        }

        if ($request->native) {
            $localizations = $localizations->where('native', 'like', "%{$request->native}%");
        }

        if ($request->native) {
            $localizations = $localizations->where('locale', 'like', "%{$request->locale}%");
        }
        if ($request->status != null) {
            $localizations = $localizations->where('status',$request->status);
        }


        // Check if perPage exist and validation by perPageArray [].
        $perPage = ($request->per_page != null && in_array($request->per_page,$this->perPageArray)) ? $request->per_page : 10;

        return $localizations->paginate($perPage);
    }


    /**
     * Create localization item into db.
     *
     * @param array $data
     * @return LengthAwarePaginator
     */
    public function store(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Update localization item.
     *
     * @param Localization $localization
     * @param array $data
     * @return bool
     */
    public function update(Localization $localization, array $data)
    {
        return $localization->update($data);
    }

    /**
     * Create localization item into db.
     *
     * @param Localization $localization
     * @return bool
     * @throws \Exception
     */
    public function delete(Localization $localization)
    {
        return $localization->delete();
    }

}
