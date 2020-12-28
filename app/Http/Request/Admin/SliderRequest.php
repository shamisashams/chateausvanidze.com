<?php
namespace App\Http\Request\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SliderRequest extends FormRequest
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
            'position' => 'required|string|max:255',
            'slug' => ['required','alpha_dash', Rule::unique('sliders', 'slug')->ignore($this->slider)],
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096'
        ];
    }
}
