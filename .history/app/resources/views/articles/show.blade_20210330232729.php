@extends('app')

@section('title', '記事詳細')

@section('content')
@include('nav')
<div class="container">
    @include('articles.card')
</div>

<br>
<!-- 質問回答 -->
<div class="container">
    <h5>回答</h5>
    <div class="card mt-3">

        <div class="card-body d-flex flex-row">
            <i class="fas fa-user-circle fa-3x mr-1"></i>
            <div>
                <p>{{$reply}}</p>

            </div>


        </div>

        <div class="card-body pt-0 pb-2">

            <div class="card-text">
                {!! nl2br(e( $article->body )) !!}
            </div>
        </div>

    </div>
</div>

<br>

<div class="container">
    <h１>質問に回答する</h１>
    <div class="row">
        <div class="col-12">
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
</div>


@endsection