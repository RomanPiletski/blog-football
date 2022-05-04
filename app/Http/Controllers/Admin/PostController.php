<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view("admin.posts.index", ["posts" => $posts]);
    }

    public function create()
    {
        return view("admin.posts.create");
    }

    public function store(StorePostRequest $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit(Post $posts)
    {
        return view("admin.posts.edit", ["posts" => $posts]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
