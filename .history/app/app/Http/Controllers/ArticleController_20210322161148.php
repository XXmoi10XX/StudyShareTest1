<?php

namespace App\Http\Controllers;

use App\Article;
use App\Book;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
    }

    public function store(ArticleRequest $request, Article $article )
    {
        $article->title = $request->title;
        $article->body = $request->body;
        $article->user_id = $request->user()->id;
        $article->save()
        return redirect()->route('articles.index');

    }
}
