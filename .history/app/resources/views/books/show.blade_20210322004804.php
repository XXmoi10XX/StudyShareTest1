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
                            <a class=" nav-item nav-link active" id="tab-menu01" data-toggle="tab" href="#panel-menu01" role="tab" aria-controls="panel-menu01" aria-selected="true">chapter1</a>
                            <!-- タブ02~08 -->
                            @for ($i = 1+1; $i < 8+1; $i++) <a class="nav-item nav-link" id="tab-menu0{{ $i }}" data-toggle="tab" href="#panel-menu0{{ $i }}" role="tab" aria-controls="panel-menu0{{ $i }}" aria-selected="false">chapter {{ $i }}</a>
                                @endfor

                        </div>
                        <!-- /タブ型ナビゲーション -->

                        <!-- タブパネル -->
                        <div class="tab-content" id="panel-menus">
                            <!-- パネル01 -->
                            <div class="tab-pane fade show active border border-top-0" id="panel-menu01" role="tabpanel" aria-labelledby="tab-menu01">

                                <div class="container">
                                    <div class="row">
                                        <form method="POST" action="">
                                            @include('articles.form')
                                            <button type="submit" class="btn btn-primary btn-block mb-4">投稿する</button>
                                        </form>


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