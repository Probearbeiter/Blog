<?php

use Illuminate\Support\Facades\Route;
use App\Models\BlogPost;

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
    return view('blog/home');
});

Route::get('/blog/add', function () {
    return view("/blog/add");
});

Route::post('/blog/savePost', 'App\Http\Controllers\BlogController@savePost');

Route::get('/blog/list', function () {
    $posts = BlogPost::all();
    return view("/blog/list", ['posts' => $posts ]);
});
