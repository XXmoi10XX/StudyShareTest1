<?php

namespace App\Http\Controllers;

use App\Book;
use App\Article;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $data = Book::all();

        $articles = Article::all();
        return view('books.index', ['books' => $data]);
    }

    public function show($id)
    {
        $data = Book::find($id);
        return view('books.show', ['book' => $data]);
    }
}
