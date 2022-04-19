<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get("categories/{category:id}", [\App\Http\Controllers\Admin\CategoryController::class, "update"])->name("categories.update");
Route::resource("/admin/categories", "\App\Http\Controllers\Admin\CategoryController");
Route::get("/admin", [\App\Http\Controllers\Admin\DashboardController::class, "index"]);
Route::get('/', function () {
//    echo "Test work!";
    return view('welcome');
});
