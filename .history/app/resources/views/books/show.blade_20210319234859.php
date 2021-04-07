@extends('app')

@section('title', '本詳細')

@section('content')
@include('nav')


<style>
    img {
        height: 200px;
        width: 200px;
    }

    ;
</style>

<!doctype html>
<html lang="en">



<img src="/image/{{$book['imgpath']}}">