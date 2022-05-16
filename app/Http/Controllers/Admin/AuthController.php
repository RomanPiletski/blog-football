<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Weather\Interfaces\WeatherServiceContract;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerForm(WeatherServiceContract $weather)
    {
    return view("pages.register", ["weather" => $weather]);
    }
}
