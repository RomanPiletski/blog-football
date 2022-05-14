<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Providers\WeatherServiceProvider;
use App\Services\Weather\Interfaces\WeatherServiceContract;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(WeatherServiceContract $weather)
    {
        $posts = Post::paginate(2);

        return view("pages.index", ["posts" => $posts, "weather" => $weather]);
    }
}
