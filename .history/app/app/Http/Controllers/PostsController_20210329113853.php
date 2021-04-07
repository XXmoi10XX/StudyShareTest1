<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
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


    /**
     * 投稿フォーム
     */
    public function create()
    {
        //return view('posts.create');　← 間違い
        return view('bbs.create');
    }


    /**
     * バリデーション、登録データの整形など
     */
    public function store(PostRequest $request)
    {
        $savedata = [
            'name' => $request->name,
            'subject' => $request->subject,
            'message' => $request->message,
            'category_id' => $request->category_id,
        ];

        $post = new Post;
        $post->fill($savedata)->save();

        return redirect('/bbs')->with('poststatus', '新規投稿しました');
    }
}
