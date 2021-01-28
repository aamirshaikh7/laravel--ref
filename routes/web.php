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

Route::get('/posts/{slug}', 'App\Http\Controllers\PostsController@show');

Route::get('/about', function () {
    $articles = Article::take(3)->latest()->get();

    return view('about', ['articles' => $articles]);
});

Route::get('/articles', 'App\Http\Controllers\ArticlesController@index')->name('articles.index');
Route::get('/articles/create', 'App\Http\Controllers\ArticlesController@create');
Route::post('/articles', 'App\Http\Controllers\ArticlesController@store');
Route::get('/articles/{article}', 'App\Http\Controllers\ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'App\Http\Controllers\ArticlesController@edit');
Route::put('/articles/{article}', 'App\Http\Controllers\ArticlesController@update');