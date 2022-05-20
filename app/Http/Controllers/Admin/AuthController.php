<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginUserRequest;
use App\Http\Requests\Admin\RegisterUserRequest;
use App\Models\User;
use App\Services\Weather\Interfaces\WeatherServiceContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function login(LoginUserRequest $request)
    {
        {
            if (Auth::attempt($request->validated())) {
                return redirect()->route("blog");
            }

            return redirect()->back()->with("status", "Неправильный логин или пароль");
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("blog");
    }
}
