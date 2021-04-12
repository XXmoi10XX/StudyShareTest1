@extends('app')

@section('title', '本詳細')

@section('content')

<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet"> -->


<style>
    img {
        height: 500px;
        width: 500px;
    }

    ;
</style>
<br>


<div class="py-4">
    <section id="menu">
        <div class="container">

            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="/image/{{$book['imgpath']}}" class="card-img" width="100%" height="340">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">{{$book['title']}}</h5>
                        <p class="card-text"><small class="text-muted">{{$book['auth']}}</small></p>
                        <p class="card-text">{{$book['body']}}</p>

                    </div>
                </div>
            </div>

            <div class="py-4">
                <section id="menu">
                    <div class="container">




                        <h3 class="mb-3">投稿する</h3>
                        <p></p>



                        <!-- タブ型ナビゲーション -->
                        <div class="nav nav-tabs" id="tab-menus" role="tablist">
                            <!-- タブ01 -->
                            <a class="nav-item nav-link active" id="tab-menu01" data-toggle="tab" href="#panel-menu01" role="tab" aria-controls="panel-menu01" aria-selected="true">chapter1</a>
                            <!-- タブ02 -->
                            <a class="nav-item nav-link" id="tab-menu02" data-toggle="tab" href="#panel-menu02" role="tab" aria-controls="panel-menu02" aria-selected="false">chapter2</a>
                            <!-- タブ03 -->
                            <a class="nav-item nav-link" id="tab-menu03" data-toggle="tab" href="#panel-menu03" role="tab" aria-controls="panel-menu03" aria-selected="false">chapter3</a>
                            <!-- タブ04 -->
                            <a class="nav-item nav-link" id="tab-menu04" data-toggle="tab" href="#panel-menu04" role="tab" aria-controls="panel-menu04" aria-selected="false">chapter4</a>
                            <a class="nav-item nav-link" id="tab-menu04" data-toggle="tab" href="#panel-menu05" role="tab" aria-controls="panel-menu04" aria-selected="false">chapter5</a>
                            <a class="nav-item nav-link" id="tab-menu04" data-toggle="tab" href="#panel-menu06" role="tab" aria-controls="panel-menu04" aria-selected="false">chapter6</a>
                            <a class="nav-item nav-link" id="tab-menu04" data-toggle="tab" href="#panel-menu07" role="tab" aria-controls="panel-menu04" aria-selected="false">chapter7</a>
                            <a class="nav-item nav-link" id="tab-menu04" data-toggle="tab" href="#panel-menu08" role="tab" aria-controls="panel-menu04" aria-selected="false">chapter8</a>
                        </div>
                        <!-- /タブ型ナビゲーション -->

                        <!-- タブパネル -->
                        <div class="tab-content" id="panel-menus">
                            <!-- パネル01 -->
                            <div class="tab-pane fade show active border border-top-0" id="panel-menu01" role="tabpanel" aria-labelledby="tab-menu01">
                                <div class="row p-3">

                                    @foreach($articles as $article)
                                    @if($article->ch == 1 && $article->book_id == $book['id'] )
                                    <div class="container">
                                        @include('articles.card')
                                    </div>

                                    @endif

                                    @endforeach

                                </div>
                            </div>
                            <!-- パネル02~08 -->
                            @for ($i = 2; $i < 9; $i++) <div class="tab-pane fade border border-top-0" id="panel-menu0{{ $i }}" role="tabpanel" aria-labelledby="tab-menu0{{ $i }}">
                                <div class="row p-3">
                                    @foreach($articles as $article)
                                    @if($article->ch == $i && $article->book_id == $book['id'] )

                                    <div class="container">
                                        @include('articles.card')
                                    </div>

                                    @endif

                                    @endforeach
                                </div>
                        </div>

                        @endfor

                    </div>
                    <!-- /タブパネル -->
            </div>
    </section>
</div>



<div class="container">
    <div class="row">
        <div class="col-12">
            @auth
            <div class="card mt-3">

                <div class="card-body pt-0">
                    @include('error_card_list')

                    <div class="card-text">
                        <form method="POST" action="{{ route('articles.store' )}}">
                            <input hidden type="nubmer" name="book_id" required value="{{$book['id']}}">
                            @include('articles.form')
                            <button type="submit" class="btn btn-primary btn-block mb-4">投稿する</button>
                        </form>
                    </div>

                </div>

            </div>
            @endauth

            @guest
            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-light">Share Study</h1>
                        <p class="lead text-muted">書籍や動画の分からない点を共有するサイトです<br>分からない点があれば質問してみましょう！</p>
                        <p>
                            <a href="#" class="btn btn-primary my-2">アカウント登録</a>
                            <a href="#" class="btn btn-secondary my-2">ログイン</a>
                        </p>
                    </div>
                </div>
            </section>

            @endguest
        </div>

    </div>
</div>