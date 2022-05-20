<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RegisterUserRequest;
use App\Models\User;
use App\Services\Weather\Interfaces\WeatherServiceContract;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerForm()
    {
        return view("pages.register");
    }

    public function register(RegisterUserRequest $request)
    {
        User::create($request->validated());
        return redirect()->route('loginForm');
    }

    public function loginForm()
    {
        return view("pages.login");
    }
}
