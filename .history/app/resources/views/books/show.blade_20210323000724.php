@extends('app')

@section('title', '本詳細')

@section('content')
@include('nav')


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
                <div class="col-md-5 ">
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
                            <a class=" nav-item nav-link active" id="tab-menu01" data-toggle="tab" href="#panel-menu01" role="tab" aria-controls="panel-menu01" aria-selected="true">chapter1</a>
                            <!-- タブ02~08 -->
                            @for ($i = 1+1; $i < 8+1; $i++) <a class="nav-item nav-link" id="tab-menu0{{ $i }}" data-toggle="tab" href="" role="tab" aria-controls="panel-menu0{{ $i }}" aria-selected="false">chapter {{ $i }}</a>
                                @endfor

                        </div>
                        <!-- /タブ型ナビゲーション -->

                        <!-- タブパネル -->
                        <div class="tab-content" id="panel-menus">
                            @for ($i = 0+1; $i < 8+1; $i++) <!-- パネル01 -->
                                <div class="tab-pane fade show active border border-top-0" id="panel-menu0{{ $i }}" role="tabpanel" aria-labelledby="tab-menu0{{ $i }}">





                                    @guest
                                    <div class="row py-lg-5">
                                        <div class="col-lg-6 col-md-8 mx-auto">

                                            <p>
                                                <a href="/login"> <button type="submit" class="btn btn-primary btn-block mb-4">ログインして投稿する</button></a>

                                            </p>
                                        </div>
                                    </div>
                                    @endguest

                                    <div class="container">
                                        <div class="row">
                                            <a href="/book/{{$book['id']}}/create{{$i}}">投稿する</a>


                                        </div>
                                    </div>

                                    @auth
                                    <div class="container">
                                        <div class="row">
                                            <form method="POST" action="">
                                                @include('articles.form')
                                                <button type="submit" class="btn btn-primary btn-block mb-4">投稿する</button>
                                            </form>


                                        </div>
                                    </div>
                                    @endauth

                                    <div class="container">
                                        <div class="card mt-3">
                                            <div class="card-body d-flex flex-row">
                                                <i class="fas fa-user-circle fa-3x mr-1"></i>
                                                <div>
                                                    <div class="font-weight-bold">
                                                        ユーザー名
                                                    </div>
                                                    <div class="font-weight-lighter">
                                                        2020/2/1 12:00
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0 pb-2">
                                                <h3 class="h4 card-title">
                                                    記事タイトル
                                                </h3>
                                                <div class="card-text">
                                                    記事本文
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>{{$i}}回数の処理です</p>

                                </div>

                        </div>







                        <!-- /タブパネル -->

                    </div>
                    @endfor
                </section>
            </div>