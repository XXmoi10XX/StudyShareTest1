<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReplyRequest;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function reply(ReplyRequest $request, Reply $reply)
    {
        $reply->title = $request->title;
        $reply->body = $request->body;
        $reply->article_id = $request->article()->id;
        $reply->user_id = $request->user()->id;
        $reply->save();
        return redirect()->route('books.show');
    }
}
