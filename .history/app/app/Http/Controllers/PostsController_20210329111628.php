<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('bbs.index', ['posts' => $posts]);
    }

    public function show(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        return view('bbs.show', [
            'post' => $post,
        ]);
    }
}
