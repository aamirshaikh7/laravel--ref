<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index () {
        $articles = Article::latest()->get();
        
        return view('articles.index', ['articles' => $articles]);
    }

    public function show (Article $article) {
        return view('articles.show', ['article' => $article]);
    }

    public function create () {
        return view('articles.create');
    }

    public function store () {
        // dd(request()->all());

        request()->validate([
            'title' => 'required | min:3 | max:255',
            'body' => 'required',
            'author' => 'required'
        ]);

        $article = new Article();
        
        $article->title = request('title');
        $article->body = request('body');
        $article->author = request('author');

        $article->save();

        return redirect('/articles');
    }

    public function edit (Article $article) {
        return view('articles.edit', ['article' => $article]);
    }

    public function update (Article $article) {
        request()->validate([
            'title' => 'required | min:3 | max:255',
            'body' => 'required',
            'author' => 'required'
        ]);
      
        $article->title = request('title');
        $article->body = request('body');
        $article->author = request('author');

        $article->save();

        return redirect('/articles/' . $article->id);
    }
}
