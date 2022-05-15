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
        $popularPosts = Post::orderBy("views", "desc")->take(3)->get();
        $featuredPosts = Post::where("is_recommended", 1)->take(3)->get();
        $recentPosts = Post::orderBy("created_at", "desc")->take(4)->get();
        $categories = Category::all();
        return view("pages.index", [
            "posts"         => $posts,
            "weather"       => $weather,
            "popularPosts"  => $popularPosts,
            "featuredPosts" => $featuredPosts,
            "recentPosts"   => $recentPosts,
            "categories"    => $categories
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
