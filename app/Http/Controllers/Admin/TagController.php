<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DestroyTagRequest;
use App\Http\Requests\Admin\StoreTagRequest;
use App\Http\Requests\Admin\UpdateTagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::all();
        return view("admin.tags.index", ["tags" => $tags]);
    }

    public function create()
    {
        return view("admin.tags.create");
    }

    public function store(StoreTagRequest $request)
    {
        Tag::create($request->validated());
        return redirect()->route("admin.tags.index");
    }

    public function show($id)
    {
        //
    }

    public function edit(Tag $tag)
    {
        return view("admin.tags.edit", ["tag" => $tag]);
    }

    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag->update($request->validated());
        return redirect()->route("admin.tags.index");
    }

    public function destroy(DestroyTagRequest $request, Tag $tag)
    {
        $tag->delete();
        return redirect()->route("admin.tags.index");
    }
}
