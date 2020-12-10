<?php

namespace App\Http\Request\Admin;

use Illuminate\Foundation\Http\FormRequest;

class FeatureRequest extends FormRequest
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
            'position' => 'nullable|string|max:255',
            'slug' => 'nullable|string|max:255',
            'type' => 'required|in:input,textarea,checkbox,radio,select'
        ];
    }
}
