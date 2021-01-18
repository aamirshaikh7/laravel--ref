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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $name = request('name');

    return view('test', ['name' => $name]);
});

// Route::get('/posts/{post}', function ($post) {
//     $posts = [
//         'first-post' => 'this is first post',
//         'second-post' => 'this is second post'
//     ];

//     if (! array_key_exists($post, $posts)) {
//         abort(404, 'Post not found');
//     }

//     return view('post', ['post' => $posts[$post]]);
// });

Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show');