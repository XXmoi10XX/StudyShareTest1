<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Article;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $data = Book::all();


        return view('books.index', ['books' => $data]);
    }

    public function show($id)
    {
        $data = Book::find($id);

        $articles = Article::all();
        return view('books.show', ['book' => $data], ['articles' => $articles]);
    }

    public search(Request $req)
    {
        $data = Book::where('name', 'like' , '%' . $req->input('query') . '%')->get();

        return view('serach', ['books' => $data ]);
    }
}
