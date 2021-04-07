@extends('app')

@section('title', '本詳細')

@section('content')
@include('nav')


<div class="row no-gutters">
    <div class="col-md-4">
        <img src="/image/{{$book['imgpath']}}" class="card-img" width="100%" height="340">
    </div>

    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>

</div>