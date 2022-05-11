<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Weather\Interfaces\WeatherServiceContract;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(WeatherServiceContract $weather){
        //dd(round($weather->temperature()->getCurrentTemperature()));
        return view("admin.dashboard", ["weather" => $weather]);
    }
}
