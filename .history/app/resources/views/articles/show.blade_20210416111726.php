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
    @include('replies.card')
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