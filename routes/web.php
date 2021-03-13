<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\Tag;

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
    $container = new \App\Container();

    $container->add('test', function () {
        return new \App\Test();
    });

    $get = $container->get('test');

    $get->call();

    ddd($get);
    
    // return view('welcome');
});

Route::get('/about', function () {
    $articles = Article::take(3)->latest()->get();

    return view('about', ['articles' => $articles, 'tags' => Tag::all()]);
});

Route::get('/articles', 'App\Http\Controllers\ArticlesController@index')->name('articles.index');
Route::get('/articles/create', 'App\Http\Controllers\ArticlesController@create')->name('articles.create');
Route::post('/articles', 'App\Http\Controllers\ArticlesController@store')->name('articles.store');
Route::get('/articles/{article}', 'App\Http\Controllers\ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'App\Http\Controllers\ArticlesController@edit')->name('articles.edit');
Route::put('/articles/{article}', 'App\Http\Controllers\ArticlesController@update')->name('articles.update');

Route::get('/tasks', 'App\Http\Controllers\TasksController@index')->name('tasks.index');
Route::get('/tasks/create', 'App\Http\Controllers\TasksController@create')->name('tasks.create');
Route::post('/tasks', 'App\Http\Controllers\TasksController@store')->name('tasks.store');
Route::get('/tasks/{task}/edit', 'App\Http\Controllers\TasksController@edit')->name('tasks.edit');
Route::put('/tasks/{task}', 'App\Http\Controllers\TasksController@update')->name('tasks.update');