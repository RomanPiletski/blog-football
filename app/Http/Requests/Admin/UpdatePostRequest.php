<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'string|max:255',
            "description" => "string",
            'content' => 'string',
            'category_id' => 'exists:categories,id',
            'image' => 'image',
            'tags' => 'array',
            'tags.*' => 'exists:tags,id',
            'is_publish' => 'required|nullable',
            'is_recommended' => 'required|nullable',
            'user_id' => 'required|nullable',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'user_id' => 1,
            'is_publish' => $this->exists('is_publish') ? true : false,
            'is_recommended' => $this->exists('is_recommended') ? true : false,
        ]);
    }

}

