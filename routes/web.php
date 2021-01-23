<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;

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
    return view('welcome');
});

Route::get('/test', function () {
    $name = request('name');

    return view('test', ['name' => $name]);
});

Route::get('/about', function () {
    $articles = Article::take(3)->latest()->get();

    return view('about', ['articles' => $articles]);
});

Route::get('/posts/{slug}', 'App\Http\Controllers\PostsController@show');