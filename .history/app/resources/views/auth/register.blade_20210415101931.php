@extends('app')

@section('title', 'ユーザー登録')

@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
            <h1 class="text-center"><a class="text-dark" href="/">Share Study</a></h1>
            <div class="card mt-3">
                <div class="card-body text-center">
                    <h2 class="h3 card-title text-center mt-2">ユーザー登録</h2>

                    @include('error_card_list')

                    <div class="card-text">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="md-form">
                                <label for="name">ユーザー名</label>
                                <input class="form-control" type="text" id="name" name="name" required value="{{ old('name') }}">
                                <small>英数字3〜16文字(登録後の変更はできません)</small>
                            </div>
                            <div class="md-form">
                                <label for="email">メールアドレス</label>
                                <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}">
                            </div>
                            <div class="md-form">
                                <label for="password">パスワード</label>
                                <input class="form-control" type="password" id="password" name="password" required>
                            </div>
                            <div class="md-form">
                                <label for="password_confirmation">パスワード(確認)</label>
                                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mb-4">ユーザー登録</button>


                        </form>

                        <button form="login-button" type="submit" class="btn  btn-info line-success btn-block mb-4">ゲストログイン</button>

                        <form id="login-button" method="POST" action="{{ route('login') }}">
                            @csrf
                            <input class="form-control" type="hidden" id="email" name="email" required value="test@example.com">

                            <input class="form-control" type="hidden" id="password" name="password" required value="test@example.com">
                        </form>



                        <div class="mt-0">
                            <a href="{{ route('login') }}" class="card-text">ログインはこちら</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection