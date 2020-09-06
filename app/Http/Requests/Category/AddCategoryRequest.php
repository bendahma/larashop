<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class AddCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:6|max:12|unique:categories'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The category name is required',
            'name.string' => 'The category name must be a string',
            'name.min' => 'The category name must be a least 6 characters',
            'name.max' => 'The category name must be no more than 12 characters',
        ];
    }
}
