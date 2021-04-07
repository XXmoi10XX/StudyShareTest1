@extends('app')

@section('title', '本詳細')

@section('content')
@include('nav')


<!doctype html>
<html lang="en">




<body>
    <main>
        <div class="row featurette">

            <!-- 商品画像 -->
            <div class="col-md-7 order-md-1 py-lg-5">
                <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="600" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                </svg> -->
                <img src="/image/{{$book['imgpath']}}" class="card-img" width="25%" height="50%">
            </div>
            <!-- 商品説明 -->
            <div class="col-md-3 order-md-2 py-lg-5 ">
                <h2 class="featurette-heading">blue season 10</h2>
                <p class="lead">スマホケース</p>
                <p class="lead">およそ16日で配送</p>
                <a href="#" class="btn btn-info">注文を確定する</a>
            </div>

        </div>
    </main>

    <img src="/image/{{$book['imgpath']}}" class="card-img">


    <!------ Include the above in your HEAD tag ---------->


</body>

</html>