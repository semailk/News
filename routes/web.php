<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\Admin\AdminController;
use \App\Http\Controllers\UserSuggestionController;
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
    Route::get('category/edit/{id}', [CategoryController::class,'editCategory'])->name('admin.category.edit');
});

Route::prefix('admin/news/')->middleware('auth')->group(function (){
    Route::get('/', [AdminController::class,'index'])->name('admin.news.index');
    Route::post('post/store', [AdminController::class,'postStore'])->name('admin.news.post.store');
    Route::get('slide/edit', [AdminController::class,'slideEdit'])->name('post.slide.edit');
    Route::post('slide/update', [AdminController::class,'slideUpdate'])->name('post.slide.update');
    Route::get('slide/delete/{id}', [AdminController::class,'slideDelete'])->name('admin.slide.delete');
    Route::get('user/suggestions', [UserSuggestionController::class,'getAddPosts'])->name('admin.getAddPosts');
    Route::get('user/suggestions/delete/{id}', [UserSuggestionController::class,'addPostDelete'])->name('admin.addPostDelete');
    Route::get('user/suggestions/addPost/{id}', [UserSuggestionController::class,'addUserPost'])->name('admin.addUserPost');
    Route::get('user/suggestions/sendMessages', [UserSuggestionController::class,'sendMessages'])->name('admin.sendMessages');
});

Route::prefix('user_suggestions')->middleware('auth')->group(function (){
Route::get('/',[UserSuggestionController::class,'index'])->name('user.suggestions');
Route::get('/message',[UserSuggestionController::class,'message'])->name('user.suggestions.message');
Route::post('/post/store',[UserSuggestionController::class,'storePost'])->name('user.suggestions.post.store');
Route::get('/news/from/user', [UserSuggestionController::class, 'newsFromUsers'])->name('user.suggestions.news.users');
Route::get('/news/weather', [UserSuggestionController::class, 'weather'])->name('user.suggestions.news.weather');
Route::post('/news/weatherResponse', [UserSuggestionController::class, 'weatherResponse'])->name('user.suggestions.news.weatherResponse');
});

