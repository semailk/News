<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteController;
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

Route::get('/', function () {
    return view('layouts.posts');
});

Auth::routes();

Route::prefix('news')->group(function (){
    Route::get('/', [PostController::class,'index'])->name('post.index');
});

Route::prefix('categories/')->group(function (){
    Route::get('{category}/{id}', [CategoryController::class,'index'])->name('categories');
});

Route::prefix('favorite/')->group(function (){
    Route::get('/', [FavoriteController::class,'index'])->name('favorite.index');
});
