@extends('app')

@section('title', '本詳細')

@section('content')
@include('nav')

<img src="/image/{{$book['imgpath']}}" class="card-img" width="200" height="200"">