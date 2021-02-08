<?php
/**
 *  app/Http/Request/Admin/SliderRequest.php
 *
 * User:
 * Date-Time: 08.02.21
 * Time: 15:01
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Http\Request\Admin;

use Illuminate\Foundation\Http\FormRequest;

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
            'description' => 'nullable|string|max:255',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ];
    }
}
