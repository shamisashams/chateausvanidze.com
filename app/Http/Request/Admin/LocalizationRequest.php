<?php

namespace App\Http\Request\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LocalizationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth()->user()->can('isAdmin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'abbreviation' => 'required|string|max:255',
            'native' => 'required|string|max:255',
            'locale' => 'required|string|max:255'
        ];
    }
}
