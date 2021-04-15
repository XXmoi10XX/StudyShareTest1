@extends('app')

@section('title', 'ログイン')

@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
            <h1 class="text-center"><a class="text-dark" href="/">Share Study</a></h1>
            <div class="card mt-3">
                <div class="card-body text-center">
                    <h2 class="h3 card-title text-center mt-2">ログイン</h2>

                    @include('error_card_list')

                    <div class="card-text">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="md-form">
                                <label for="email">メールアドレス</label>
                                <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}">
                            </div>

                            <div class="md-form">
                                <label for="password">パスワード</label>
                                <input class="form-control" type="password" id="password" name="password" required>
                            </div>


                            <input type="hidden" name="remember" id="remember" value="on">


                            <button type="submit" class="btn btn-primary btn-block mb-4">ログイン</button>

                            <div class="md-form">
                                <input class="form-control" type="hidden" id="email" name="email" required value="test@example.com">
                            </div>

                            <div class="md-form">
                                <input class="form-control" type="hidden" id="password" name="password" required value="test@example.com">
                            </div>


                            <input type="hidden" name="remember" id="remember" value="on">


                            <button type="submit" class="btn btn-primary btn-block mb-4">ログイン</button>

                        </form>

                        <!-- <form method="POST" action="{{ route('login') }}">
                            @csrf

                          

                        </form> -->

                        <div class="mt-0">
                            <a href="{{ route('register') }}" class="card-text">ユーザー登録はこちら</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection