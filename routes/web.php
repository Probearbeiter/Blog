<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;

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

// string method (as in laravel v7 and earlier)
//Route::get('/index', 'App\Http\Controllers\IndexController@index');

// action method since laravel v8 (needs namespace to be imported)
Route::get('/', [IndexController::class, 'index']);

//Route::get('/', 'HomeController@index');
//Route::get('/', [HomeController::class, 'index']);

//Route::get('category/{slug}', 'CategoryController@index');
Route::get('/category/{slug}', [CategoryController::class, 'index']);

//Route::get('tag/{slug}', 'TagController@index');
Route::get('/tag/{slug}', [TagController::class, 'index']);

//Route::get('post/{slug}', 'PostController@index');
Route::get('/post/{slug}', [PostController::class, 'index']);



