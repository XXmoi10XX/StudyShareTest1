<?php

namespace App\Http\Controllers;

use App\Article;
use App\Book;
use App\Reply;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ReplyRequest;
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

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    public function store(ArticleRequest $request, Article $article)
    {

        $article->title = $request->title;
        $article->body = $request->body;
        $article->ch = $request->ch;
        $article->book_id = $request->book_id;
        $article->user_id = $request->user()->id;
        $article->save();
        return redirect()->route('books.index',);
    }

    public function update(ArticleRequest $request, Article $article)
    {
        $article->fill($request->all())->save();
        return redirect()->route('books.index');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('artiles.show');
    }

    public function show(Article $article, Reply $replies)
    {
        $replies = Reply::all();


        return view('articles.show', ['article' => $article], ['replies' => $replies]);
    }
}
