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
    public function index()
    {
        $posts = Post::orderBy("created_at", "desc")->paginate(4);
        return view("pages.index", [
            "posts" => $posts,
        ]);
    }

    public function show($slug)
    {
        $post = Post::where("slug", $slug)->firstOrFail();
        event("postHasViewed", $post);
        return view("pages.show", ["post" => $post]);
    }

    public function tag($slug)
    {
        $tag = Tag::where("slug", $slug)->firstOrFail();
        $posts = $tag->posts()->paginate(2);
        return view("pages.list", ["posts" => $posts]);
    }

    public function category($slug)
    {
        $category = Category::where("slug", $slug)->firstOrFail();
        $posts = $category->posts()->paginate(2);
        return view("pages.list", ["posts" => $posts]);
    }
}
