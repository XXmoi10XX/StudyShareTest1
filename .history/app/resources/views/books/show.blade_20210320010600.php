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
<div class="row no-gutters">
    <div class="col-md-1"></div>
    <div class="col-md-4">
        <img src="/image/{{$book['imgpath']}}" class="card-img" width="100%" height="340">
    </div>
    <div class="col-md-6">
        <div class="card-body">
            <h5 class="card-title">{{$book['title']}}</h5>
            <p class="card-text">{{$book['body']}}</p>
            <p class="card-text"><small class="text-muted">{{$book['body']}}</small></p>
        </div>
    </div>
</div>