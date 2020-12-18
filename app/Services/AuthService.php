<?php

namespace App\Services;

use App\Models\Dictionary;
use App\Models\Feature;
use App\Models\Localization;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\throwException;

class AuthService
{
    protected $model;

    protected $perPageArray = [10, 20, 30, 50, 100];

    public function __construct(User $model)
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
     * Create Feature item into db.
     *
     * @param string $lang
     * @param array $request
     * @return bool
     */
    public function store(string $lang, array $request)
    {
        $model = $this->model->create([
            'name' => $request['first_name'] . ' ' . $request['last_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $localization = $this->getLocalization($lang);

        foreach (Localization::all() as $item) {
            $model->language()->create([
                'language_id' => $item->id,
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],
            ]);
        }
        Auth::login($model);
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
            throw new Exception('Localization not exist.');
        }

        return $localization;
    }


}
