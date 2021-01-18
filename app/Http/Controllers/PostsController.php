<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show ($post) {
        $posts = [
            'first-post' => 'this is first post',
            'second-post' => 'this is second post'
        ];
    
        if (! array_key_exists($post, $posts)) {
            abort(404, 'Post not found');
        }
    
        return view('post', ['post' => $posts[$post]]);
    }
}
