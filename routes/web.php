<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

// action method (needs namespace to be imported)
Route::get('index', [IndexController::class, 'index']);


Route::get('/', function () {
//    return view('welcome');
    return 'Hello Blog!';
});

