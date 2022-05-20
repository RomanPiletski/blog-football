<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            "password" => "required|string",
        ];
    }
}
