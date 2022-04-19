<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DestroyCategoryRequest;
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
        return redirect()->route("admin.categories.index");
    }

    public function edit(Category $category)
    {
        return view("admin.categories.edit", ["category" => $category]);
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category = Category::find($category);
        $category->update($request->validated());
        return redirect()->route("admin.categories.index");
    }

    public function destroy(DestroyCategoryRequest $request, Category $category)
    {
        $category->delete();
        return redirect()->route("admin.categories.index");
    }
}
