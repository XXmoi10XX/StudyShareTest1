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

    public function create($id)
    {
        $data = Book::find($id);

        return view('articles.create', ['book' => $data]);
    }

    public function store(ArticleRequest $request, Article $article, $id)
    {
        $article->title = $request->title;
        $article->body = $request->body;
        $article->ch = $request->ch;
        $article->book_id = $id;
        $article->user_id = $request->user()->id;
        $article->save();
        return redirect()->route('books.index');
    }
}
