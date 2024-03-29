<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "name" => "required|string|max:255",
            "email" => "string|email",
            "avatar" => "image|max:2048",
            "password" => "nullable|string",
        ];
    }
}
