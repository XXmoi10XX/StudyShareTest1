@extends('app')

@section('title', '記事詳細')

@section('content')
@include('nav')
<div class="container">
    @include('articles.card')
</div>

<br>

@if( $replies ==! null)




<!-- 質問回答 -->
<div class="container">
    <h5>回答</h5>
    @foreach($replies as $reply)
    @if($reply->article_id == $article->id)
    <div class="card mt-3">



        <div class="card-body d-flex flex-row">
            <i class="fas fa-user-circle fa-3x mr-1"></i>
            <div>

                <div class="font-weight-bold">{{ $reply->user->name }}</div>
                <div class="font-weight-lighter">{{ $reply->created_at->format('Y/m/d H:i') }}</div>
            </div>

            @if( Auth::id() === $reply->user_id )
            <!-- dropdown -->
            <div class="ml-auto card-text">
                <div class="dropdown">
                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route("articles.edit", ['reply' => $reply ]) }}">
                            <i class="fas fa-pen mr-1"></i>記事を更新する
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $article->id }}">
                            <i class="fas fa-trash-alt mr-1"></i>記事を削除する
                        </a>
                    </div>
                </div>
            </div>
            <!-- dropdown -->

            <!-- modal -->
            <div id="modal-delete-{{ $article->id }}" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="{{ route('articles.destroy', ['article' => $article]) }}">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                {{ $reply->body }}を削除します。よろしいですか？
                            </div>
                            <div class="modal-footer justify-content-between">
                                <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                                <button type="submit" class="btn btn-danger">削除する</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- modal -->
            @endif


        </div>

        <div class="card-body pt-0 pb-2">

            <div class="card-text">
                {!! nl2br(e( $reply->body )) !!}
            </div>
        </div>

    </div>
    @endif
    @endforeach

    @endif
</div>



<br>

<div class="container">
    <h１>質問に回答する</h１>
    <div class="row">
        <div class="col-12">


            @guest
            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-light">Share Study</h1>
                        <p class="lead text-muted">ログインして始めよう!</p>
                        <p>
                            <a href="{{ route('register')}}" class="btn btn-primary my-2">アカウント登録</a>
                            <a href="{{ route('login')}} " class="btn btn-secondary my-2">ログイン</a>
                        </p>
                    </div>
                </div>
            </section>

            @endguest
            @auth
            <div class="card mt-3">

                <div class="card-body pt-0">
                    @include('error_card_list')

                    <div class="card-text">
                        <form method="POST" action="{{ route('replies.store') }}">
                            @csrf


                            <div class="form-group">
                                <div class="form-group">
                                    <label></label>
                                    <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ old('body') }}</textarea>
                                    <input hidden type="nubmer" name="article_id" required value="{{$article['id']}}">

                                </div>
                                <button type="submit" class="btn btn-primary btn-block mb-4">投稿する</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endauth
</div>


@endsection