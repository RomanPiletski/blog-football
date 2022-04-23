<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "admin"], function (){
    Route::resource("categories", CategoryController::class)->parameters([
        'categories' => "category:slug"
    ])->names([
        'edit' => 'admin.categories.edit',
        'create' => 'admin.categories.create',
        'show' => 'admin.categories.show',
        'index' => 'admin.categories.index',
        'store' => 'admin.categories.store',
        'update' => 'admin.categories.update',
        'destroy' => 'admin.categories.destroy'
    ]);
    Route::resource("tags", \App\Http\Controllers\Admin\TagController::class)->parameters([
        'tags' => "tag:slug"
    ])->names([
        'edit' => 'admin.tags.edit',
        'create' => 'admin.tags.create',
        'show' => 'admin.tags.show',
        'index' => 'admin.tags.index',
        'store' => 'admin.tags.store',
        'update' => 'admin.tags.update',
        'destroy' => 'admin.tags.destroy'
    ]);
    Route::resource("users", \App\Http\Controllers\Admin\UserController::class)->parameters([
        'users' => "user"
    ])->names([
        'edit' => 'admin.users.edit',
        'create' => 'admin.users.create',
        'show' => 'admin.users.show',
        'index' => 'admin.users.index',
        'store' => 'admin.users.store',
        'update' => 'admin.users.update',
        'destroy' => 'admin.users.destroy'
    ]);
});

Route::get("/admin", [\App\Http\Controllers\Admin\DashboardController::class, "index"])->name("admin.dashboard");
Route::get('/', function () {
//    echo "Test work!";
    return view('welcome');
});
