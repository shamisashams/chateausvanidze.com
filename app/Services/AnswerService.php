<?php

namespace App\Services;

use App\Models\Answer;
use App\Models\Feature;
use App\Models\FeatureLanguage;
use App\Models\Localization;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use function PHPUnit\Framework\throwException;

class AnswerService
{
    protected $model;

    protected $perPageArray = [10, 20, 30, 50, 100];

    public function __construct(Answer $model)
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
    public function getAll(string $lang, $request)
    {
        $data = $this->model->query();

        $localization = $this->getLocalization($lang);
        
        if ($request->key !== null) {
            $data = $data->where('key', 'LIKE', '%'.$request->all()['key'].'%');
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
        $feature = FeatureLanguage::findOrFail(intval($request['feature']))->feature;

        $model = $this->model->create([
            'slug' => $request['slug'],
            'position' => $request['position'],
            'status' => intval($request['status']),
        ]);
    
        $localization = $this->getLocalization($lang);
        foreach (Localization::all() as $item) {
            $model->language()->create([
                'language_id' => $item->id,
                'title' => $request['title']
            ]);
        }

        $model->feature()->create([
            'feature_id' => $feature->id
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
    public function update(int $id, string $lang,  array $request)
    {
        $feature = FeatureLanguage::findOrFail(intval($request['feature']))->feature;
        $model = Answer::findOrFail(intval($id));
        $localization = $this->getLocalization($lang);
        $model->update([
            'slug' => $request['slug'],
            'position' => $request['position'],
            'status' => intval($request['status']),
        ]);
    
            $language = $model->language()->where('language_id', $localization->id)->first();
            $language->title = $request['title'];
            $language->save();
       

        $model->feature()->update([
            'feature_id' => $feature->id
        ]);
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
