<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "name" => "string|max:255",
            "email" => "string|email|unique:users",
            "password" => "required",
            "avatar" => "image|max:2048",
        ];
    }
}
