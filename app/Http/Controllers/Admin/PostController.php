<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePostRequest;
use App\Http\Requests\Admin\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::paginate(3);
        return view("admin.posts.index", ["posts" => $posts]);
    }

    public function create()
    {
        return view("admin.posts.create", ["categories" => Category::all(), "tags" => Tag::all()]);
    }

    public function store(StorePostRequest $request, Post $post)
    {
        $post = Post::create($request->validated());
        $post->tags()->sync($request->tags);
        return redirect()->route("admin.posts.index");
    }

    public function show($id)
    {
        //
    }

    public function edit(Post $post)
    {
        return view("admin.posts.edit", ["post" => $post, "categories" => Category::all(), "tags" => Tag::all()]);
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->validated());
        $post->tags()->sync($request->tags);
        return redirect()->route("admin.posts.index");
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index');
    }
}
