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
                                        <div class="card mt-3">
                                            <div class="card-body d-flex flex-row">
                                                <i class="fas fa-user-circle fa-3x mr-1"></i>
                                                <div>
                                                    <div class="font-weight-bold">
                                                        {{ $article->user->name }}
                                                    </div>
                                                    <div class="font-weight-lighter">
                                                        {{ $article->created_at->format('Y/m/d H:i')}}
                                                    </div>
                                                </div>

                                                <!-- dropdown -->
                                                <div class="ml-auto card-text">
                                                    <div class="dropdown">
                                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <button type="button" class="btn btn-link text-muted m-0 p-2">
                                                                <i class="fas fa-ellipsis-v"></i>
                                                            </button>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="{{ route("articles.edit", ['article' => $article]) }}">
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
                                                                    {{ $article->title }}を削除します。よろしいですか？
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

                                            </div>
                                            <div class="card-body pt-0 pb-2">
                                                <h3 class="h4 card-title">
                                                    {{ $article->title }}
                                                </h3>

                                                <p> {{ $article->body }}</p>



                                            </div>
                                        </div>
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
            <div class="card mt-3">
                <div class="card-body pt-0">
                    @include('error_card_list')
                    <div class="card-text">
                        <form method="POST" action="{{ route('articles.store') }}">
                            @csrf
                            <div class="md-form">
                                <label></label>
                                <input type="text" name="title" class="form-control" placeholder="タイトル" 　required value="{{ old('title') }}">
                                <input hidden type="nubmer" name="book_id" required value="{{$book['id']}}">

                            </div>
                            <div class="form-group">
                                <label class="form-label">Chapter</label>
                                <select class="custom-select bg-light form-control " name="ch" required value="ch">
                                    <option value="" selected>Chapterを選択してください</option>
                                    @for ($num = 0 + 1; $num < 8 + 1; $num++) { <option>{{$num}}</option>
                                        }
                                        @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label></label>
                                    <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ old('body') }}</textarea>

                                </div>
                                <button type="submit" class="btn btn-primary btn-block mb-4">投稿する</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>