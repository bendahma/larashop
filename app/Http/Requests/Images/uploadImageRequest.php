<?php

namespace App\Http\Requests\Images;

use Illuminate\Foundation\Http\FormRequest;

class uploadImageRequest extends FormRequest
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
            'url' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
}
