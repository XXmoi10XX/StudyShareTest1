@extends('app')

@section('title', '本一覧')

@section('content')
@include('nav')




<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>


</head>

<body>



    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Share Study</h1>
                    <p class="lead text-muted">参考書の分からない点を共有するサイトです<br>分からない点があれば質問してみましょう！</p>
                    <p>
                        <a href="#" class="btn btn-primary my-2">アカウント登録</a>
                        <a href="#" class="btn btn-secondary my-2">ログイン</a>
                    </p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach($books as $book)
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg src="/image/{{$book['imgpath']}}" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="{{$book['imgpath']}}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <!-- <title>Placeholder</title> -->
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>

                            </svg>

                            <div class="card-body">
                                <p class="card-text">{{$book['title']}}</p>
                                <p class="card-text">{{$book['auth']}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>

    </main>


</body>