<?php

namespace App\Services;

use App\Models\Localization;
use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use function PHPUnit\Framework\throwException;

class ProductService
{
    protected $model;

    protected $perPageArray = [10, 20, 30, 50, 100];

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    /**
     * Get Product by id.
     *
     * @param int $id
     * @return Product
     */
    public function find(int $id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Get Products.
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

    }

    /**
     * Update Product item.
     *
     * @param string $lang
     * @param int $id
     * @param array $request
     * @return bool
     */
    public function update(string $lang,int $id, array $request)
    {

    }

    /**
     * Create Product item into db.
     *
     * @param int $id
     * @return bool
     * @throws \Exception
     */
    public function delete($id)
    {

    }

    /**
     * Create Product item into db.
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
}
