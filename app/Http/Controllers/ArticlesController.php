<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;

class ArticlesController extends Controller
{
    public function index () {
        if (request('tag')) {  
            $tag = Tag::where('name', request('tag'))->firstOrFail();

            $articles = $tag->articles;
        } else {
            $articles = Article::latest()->get();
        }
        
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

        Article::create($this->validateArticle());

        return redirect(route('articles.index'));
    }

    public function edit (Article $article) {
        return view('articles.edit', ['article' => $article]);
    }

    public function update (Article $article) {
        $article->update($this->validateArticle());

        return redirect($article->path());
    }

    protected function validateArticle () {
        return request()->validate([
            'title' => 'required | min:3 | max:255',
            'body' => 'required',
            'author' => 'required'
        ]);
    }
}
