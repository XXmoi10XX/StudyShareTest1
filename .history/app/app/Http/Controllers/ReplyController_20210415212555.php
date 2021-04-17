<?php

namespace App\Http\Controllers;

use App\Article;
use App\Reply;
use App\Http\Requests\ReplyRequest;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function edit(reply $reply)
    {
        return view('replies.edit', ['reply' => $reply]);
    }

    public function update(ReplyRequest $request, Reply $reply)
    {
        $reply->fill($request->all())->save();
        return redirect()->route('books.index');
    }

    public function store(ReplyRequest $request, Reply $reply)
    {

        $reply->body = $request->body;
        $reply->article_id = $request->article_id;
        $reply->user_id = $request->user()->id;
        $reply->save();
        return redirect()->route('books.index');
    }
}
