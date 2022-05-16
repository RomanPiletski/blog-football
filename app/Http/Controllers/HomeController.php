<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Providers\WeatherServiceProvider;
use App\Services\Weather\Interfaces\WeatherServiceContract;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(WeatherServiceContract $weather)
    {
        $posts = Post::paginate(2);

        return view("pages.index", [
            "posts" => $posts,
            "weather" => $weather,
        ]);
    }

    public function show(WeatherServiceContract $weather, $slug)
    {
        $post = Post::where("slug", $slug)->firstOrFail();
        return view("pages.show", ["post" => $post, "weather" => $weather]);
    }

    public function tag(WeatherServiceContract $weather, $slug)
    {
        $tag = Tag::where("slug", $slug)->firstOrFail();
        $posts = $tag->posts()->paginate(2);
        return view("pages.list", ["posts" => $posts, "weather" => $weather]);
    }

    public function category(WeatherServiceContract $weather, $slug)
    {
        $category = Category::where("slug", $slug)->firstOrFail();
        $posts = $category->posts()->paginate(2);
        return view("pages.list", ["posts" => $posts, "weather" => $weather]);
    }
}
