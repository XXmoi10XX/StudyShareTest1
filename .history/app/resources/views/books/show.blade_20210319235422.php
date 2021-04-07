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


<div class="center-block">
    <div><img src="/image/{{$book['imgpath']}}" class="center-block" width="100%" height="340"></div>
</div>
<img src="/image/{{$book['imgpath']}}" class="center-block" width="100%" height="340">