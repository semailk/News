<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\Admin\AdminController;
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

//Route::get('/', function () {
//    return view('layouts.posts');
//});

Auth::routes();

Route::prefix('news')->group(function (){
    Route::get('/', [PostController::class,'index'])->name('post.index');
    Route::get('/show/{id}', [PostController::class,'show'])->name('post.show');
});

Route::prefix('categories/')->group(function (){
    Route::get('{category}/{id}', [CategoryController::class,'index'])->name('categories');
    Route::get('categories', [CategoryController::class,'getCategories'])->name('admin.categories');
    Route::post('category/store', [CategoryController::class,'categoryStore'])->name('admin.category.store');
    Route::get('category/destroy/{id}', [CategoryController::class,'destroyCategory'])->name('admin.category.destroy');
});

Route::prefix('favorite/')->group(function (){
    Route::get('/', [FavoriteController::class,'index'])->name('favorite.index');
});

Route::prefix('admin/news/')->middleware('auth')->group(function (){
    Route::get('/', [AdminController::class,'index'])->name('admin.news.index');
    Route::post('post/store', [AdminController::class,'postStore'])->name('admin.news.post.store');
    Route::get('slide/edit', [AdminController::class,'slideEdit'])->name('post.slide.edit');
    Route::post('slide/update', [AdminController::class,'slideUpdate'])->name('post.slide.update');
    Route::get('slide/delete/{id}', [AdminController::class,'slideDelete'])->name('admin.slide.delete');


});
