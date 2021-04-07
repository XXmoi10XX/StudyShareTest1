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
                            <a class="nav-item nav-link" id="tab-menu04" data-toggle="tab" href="#panel-menu04" role="tab" aria-controls="panel-menu04" aria-selected="false">chapter5</a>
                            <a class="nav-item nav-link" id="tab-menu04" data-toggle="tab" href="#panel-menu04" role="tab" aria-controls="panel-menu04" aria-selected="false">chapter6</a>
                            <a class="nav-item nav-link" id="tab-menu04" data-toggle="tab" href="#panel-menu04" role="tab" aria-controls="panel-menu04" aria-selected="false">chapter7</a>
                            <a class="nav-item nav-link" id="tab-menu04" data-toggle="tab" href="#panel-menu04" role="tab" aria-controls="panel-menu04" aria-selected="false">chapter8</a>
                        </div>
                        <!-- /タブ型ナビゲーション -->

                        <!-- タブパネル -->
                        <div class="tab-content" id="panel-menus">
                            <!-- パネル01 -->
                            <div class="tab-pane fade show active border border-top-0" id="panel-menu01" role="tabpanel" aria-labelledby="tab-menu01">

                                <div class="container">
                                    <div class="row">



                                        <form method="POST" action="">
                                            @csrf
                                            <div class="md-form">
                                                <label>タイトル</label>
                                                <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
                                            </div>
                                            <div class="form-group">
                                                <label></label>
                                                <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ old('body') }}</textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block mb-4">投稿する</button>
                                        </form>


                                    </div>
                                </div>
                            </div>
                            <!-- パネル02 -->
                            <div class="tab-pane fade border border-top-0" id="panel-menu02" role="tabpanel" aria-labelledby="tab-menu02">
                                <div class="row p-3">
                                    <div class="col-md-7 order-md-2">
                                        <h4>MORNNING</h4>
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <th>トーストセット</th>
                                                    <td>450円（税別）</td>
                                                </tr>
                                                <tr>
                                                    <th>トーストゆで卵セット</th>
                                                    <td>500円（税別）</td>
                                                </tr>
                                                <tr>
                                                    <th>フレンチトーストセット</th>
                                                    <td>600円（税別）</td>
                                                </tr>
                                                <tr>
                                                    <th>野菜たっぷりスープセット</th>
                                                    <td>650円（税別）</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-5">
                                        <img src="img/morning.jpg" alt="モーニング" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- パネル03 -->
                            <div class="tab-pane fade border border-top-0" id="panel-menu03" role="tabpanel" aria-labelledby="tab-menu03">
                                <div class="row p-3">
                                    <div class="col-md-7 order-md-2">
                                        <h4>LUNCH</h4>
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <th>ワンプレートランチ</th>
                                                    <td>1,000円（税別）</td>
                                                </tr>
                                                <tr>
                                                    <th>Mixサンド</th>
                                                    <td>650円（税別）</td>
                                                </tr>
                                                <tr>
                                                    <th>ハンバーグサンド</th>
                                                    <td>750円（税別）</td>
                                                </tr>
                                                <tr>
                                                    <th>野菜たっぷりスープ</th>
                                                    <td>650円（税別）</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-5">
                                        <img src="img/lunch.jpg" alt="ランチ" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- パネル04 -->
                            <div class="tab-pane fade border border-top-0" id="panel-menu04" role="tabpanel" aria-labelledby="tab-menu04">
                                <div class="row p-3">
                                    <div class="col-md-7 order-md-2">
                                        <h4>CAKE</h4>
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <th>シフォンケーキ</th>
                                                    <td>400円（税別）</td>
                                                </tr>
                                                <tr>
                                                    <th>チーズケーキ</th>
                                                    <td>350円（税別）</td>
                                                </tr>
                                                <tr>
                                                    <th>本日のケーキ</th>
                                                    <td>400円（税別）～</td>
                                                </tr>
                                                <tr>
                                                    <th>季節のパウンドケーキ</th>
                                                    <td>400円（税別）～</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-5">
                                        <img src="img/cake.jpg" alt="ケーキ" class="img-fluid">
                                    </div>
                                </div>
                            </div>
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
                                    <form method="POST" action="">
                                        @csrf
                                        <div class="md-form">
                                            <label>タイトル</label>
                                            <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
                                        </div>
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