<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;
use App\Models\User;

class ArticlesController extends Controller
{
    public function index () {
        if (request('tag')) {  
            $tag = Tag::where('name', request('tag'))->firstOrFail();

            $articles = $tag->articles;

        } elseif (request('author')) {
            $author = User::where('name', request('author'))->firstOrFail();

            $articles = $author->articles;

        } else {
            $articles = Article::latest()->get();
        }
        
        return view('articles.index', ['articles' => $articles]);
    }

    public function show (Article $article) {
        return view('articles.show', ['article' => $article]);
    }

    public function create () {
        return view('articles.create', ['tags' => Tag::all()]);
    }

    public function store () {
        $this->validateArticle();

        $article = new Article(request(['title', 'body']));

        $article->user_id = 3;
        $article->save();
        
        if (request('tags')) {
            $article->tags()->attach(request('tags'));
        }
        
        return redirect(route('articles.index'));
    }

    public function edit (Article $article) {
        return view('articles.edit', ['article' => $article, 'tags' => Tag::all()]);
    }

    public function update (Article $article) {
        $this->validateArticle();

        $article->update(request(['title', 'body']));
        $article->save();

        if (request('tags')) {
            $article->tags()->attach(request('tags'));
        }

        return redirect($article->path());
    }

    protected function validateArticle () {
        return request()->validate([
            'title' => 'required | min:3 | max:255',
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
