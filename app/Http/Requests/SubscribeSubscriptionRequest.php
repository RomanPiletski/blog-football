<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscribeSubscriptionRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "email" => "required|email|unique:subscriptions",
            "token" => "required|string",
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "token" => $this->exists("_token") ? $this->_token : "",
        ]);
    }
}
