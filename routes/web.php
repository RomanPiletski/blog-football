<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SubscribeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscribeController as SubscribeControllerAlias;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(["verify" => true]);

Route::group(["prefix" => "admin", "middleware" => "admin"], function () {
    Route::get("/", [DashboardController::class, "index"])->name("admin.dashboard");

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
    Route::resource("tags", TagController::class)->parameters([
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
    Route::resource("users", UserController::class)->parameters([
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
    Route::resource("posts", PostController::class)
        ->parameters([
            'posts' => "post:slug"
        ])->names([
            'edit' => 'admin.posts.edit',
            'create' => 'admin.posts.create',
            'show' => 'admin.posts.show',
            'index' => 'admin.posts.index',
            'store' => 'admin.posts.store',
            'update' => 'admin.posts.update',
            'destroy' => 'admin.posts.destroy'
        ]);
    Route::resource("subscribers", SubscribeController::class)
        ->parameters([
            'subscribers' => "subscribers"
        ])->names([
            'edit' => 'admin.subs.edit',
            'create' => 'admin.subs.create',
            'show' => 'admin.subs.show',
            'index' => 'admin.subs.index',
            'store' => 'admin.subs.store',
            'update' => 'admin.subs.update',
            'destroy' => 'admin.subs.destroy'
        ]);
    Route::get("/comments", [\App\Http\Controllers\Admin\CommentController::class, "index"])->name("comments");
    Route::get("/comments/toggle/{id}", [\App\Http\Controllers\Admin\CommentController::class, "toggle"]);
    Route::delete("/comments/{id}/destroy", [\App\Http\Controllers\Admin\CommentController::class, "destroy"])
        ->name('admin.comments.delete');

});


//Route::get("/admin", [\App\Http\Controllers\Admin\DashboardController::class, "index"])->name("admin.dashboard");

Route::get("/", [HomeController::class, "index"])->name("blog");
Route::post("/subscribe", [SubscribeControllerAlias::class, "subscribe"])->name("subscribe");
Route::get("verify/{token}", [SubscribeControllerAlias::class, "verify"])->name("verify");


Route::get('/post/{slug}', [HomeController::class, "show"])->name("post.show");
Route::get('/tag/{slug}', [HomeController::class, "tag"])->name("tag.show");
Route::get('/category/{slug}', [HomeController::class, "category"])->name("category.show");

Route::group(["middleware" => "auth"], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get("/profile", [ProfileController::class, "index"])->name("profile");
    Route::post("/profile", [ProfileController::class, "store"]);
    Route::post("/comment", [CommentController::class, "store"]);
});

Route::group(["middleware" => "guest"], function () {
    Route::get("/register", [AuthController::class, "registerForm"])->name("registerForm");
    Route::post("/register", [AuthController::class, "register"])->name("register");
    Route::get('/login', [AuthController::class, 'loginForm'])->name('loginForm');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

//Route::get('/', function () {
//    echo "Test work!";
//    return view('welcome');
//});
