<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\IndexCategoryRequest;
use App\Http\Requests\Admin\StoreCategoryRequest;
use App\Http\Requests\Admin\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(IndexCategoryRequest $request)
    {
        $categories = Category::all();
        return view("admin.categories.index", ["categories" => $categories]);
    }

    public function create()
    {
        return view("admin.categories.create");
    }

    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->validated());
        return redirect()->route("categories.index");
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view("admin.categories.edit", ["category" => $category]);
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
//        dd("1");
        $category = Category::find($id);
        $category->update($request->validated());
        return redirect()->route("categories.index");
    }
}
