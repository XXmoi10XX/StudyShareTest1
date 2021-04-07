@extends('app')

@section('title', '記事詳細')

@section('content')
@include('nav')
<div class="container">
    @include('articles.card')
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


                            </div>
                            <div class="form-group">
                                <label class="form-label">Chapter</label>
                                <select class="custom-select  form-control " name="ch" required value="ch">
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
@endsection