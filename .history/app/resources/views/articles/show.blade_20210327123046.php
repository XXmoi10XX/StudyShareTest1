@extends('app')

@section('title', '記事詳細')

@section('content')
@include('nav')
<div class="container">
    @include('articles.card')
</div>

<br>
<h5>質問に回答する</h5>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mt-3">
                <div class="card-body pt-0">
                    @include('error_card_list')
                    <div class="card-text">
                        <form method="POST" action="{{ route('articles.store') }}">
                            @csrf


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
@endsection