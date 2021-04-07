@extends('app')

@section('title', '本詳細')

@section('content')
@include('nav')


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/dist/css/master.css">
    <link rel="stylesheet" href="assets/dist/css/index-test1.css">

    <title>Hello, world!</title>
</head>

<header class="">
    <!-- header4始まり -->
    <div class="header4">
        <nav class="navbar navbar-expand navbar-light">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#"><button type="button" class="btn btn-outline-primary">ログイン</button></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><button type="button" class="btn btn-outline-info">新規登録</button></a></li>

                </ul>
            </div>
        </nav>
    </div>

    <!------ Include the above in your HEAD tag ---------->
    <nav class="navbar navbar-icon-top navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Idea Ecommerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- header1始まり -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        <i class="fa fa-home"></i>
                        Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-heart">
                        </i>
                        good
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-user-circle">
                            <span class="badge badge-success"></span>
                        </i>
                        user
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="badge badge-success"></span>
                        </i>
                        cart
                    </a>
                </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
        </div>
    </nav>
    <!-- header1終わり -->

    <!-- header２始まり -->
    <div class="header2">

        <nav class="navbar navbar-expand navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">新着</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ファッション</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">スマホケース</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">スマホケース</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown link
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>




    <!-- header終わり -->
</header>

<body>
    <main>
        <div class="row featurette">

            <!-- 商品画像 -->
            <div class="col-md-7 order-md-1 py-lg-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="600" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                </svg>
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

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <section class="our-publication pt-100 pb-70">
        <div class="container">
            <h3>作者Shop</h2>
                <p>自己紹介</p>

                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="single-publication">
                            <figure>
                                <a href="#">
                                    <img src="https://envytheme.com/tf-demo/edusplash/assets/img/publication/1.jpg" alt="Publication Image">
                                </a>

                                <ul>
                                    <li><a href="#" title="Add to Favorite"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#" title="Add to Compare"><i class="fa fa-refresh"></i></a></li>
                                    <li><a href="#" title="Quick View"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </figure>

                            <div class="publication-content">
                                <span class="category">Book</span>
                                <h3><a href="#">Think Python</a></h3>
                                <ul>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                </ul>
                                <h4 class="price">$119 <span>$299</span></h4>
                            </div>

                            <div class="add-to-cart">
                                <a href="#" class="default-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="single-publication">
                            <figure>
                                <a href="#">
                                    <img src="https://envytheme.com/tf-demo/edusplash/assets/img/publication/2.jpg" alt="Publication Image">
                                </a>

                                <ul>
                                    <li><a href="#" title="Add to Favorite"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#" title="Add to Compare"><i class="fa fa-refresh"></i></a></li>
                                    <li><a href="#" title="Quick View"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </figure>

                            <div class="publication-content">
                                <span class="category">Book</span>
                                <h3><a href="#">Think Python</a></h3>
                                <ul>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                </ul>
                                <h4 class="price">$119</h4>
                            </div>

                            <div class="add-to-cart">
                                <a href="#" class="default-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="single-publication">
                            <figure>
                                <a href="#"><img src="https://envytheme.com/tf-demo/edusplash/assets/img/publication/3.jpg" alt="Publication Image"></a>

                                <ul>
                                    <li><a href="#" title="Add to Favorite"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#" title="Add to Compare"><i class="fa fa-refresh"></i></a></li>
                                    <li><a href="#" title="Quick View"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </figure>

                            <div class="publication-content">
                                <span class="category">Book</span>
                                <h3><a href="#">Think Python</a></h3>
                                <ul>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                </ul>
                                <h4 class="price">$119</h4>
                            </div>

                            <div class="add-to-cart">
                                <a href="#" class="default-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="single-publication">
                            <figure>
                                <a href="#"><img src="https://envytheme.com/tf-demo/edusplash/assets/img/publication/4.jpg" alt="Publication Image"></a>

                                <ul>
                                    <li><a href="#" title="Add to Favorite"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#" title="Add to Compare"><i class="fa fa-refresh"></i></a></li>
                                    <li><a href="#" title="Quick View"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </figure>

                            <div class="publication-content">
                                <span class="category">Book</span>
                                <h3><a href="#">Think Python</a></h3>
                                <ul>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                    <li><i class="icofont-star"></i></li>
                                </ul>
                                <h4 class="price">$119</h4>
                            </div>

                            <div class="add-to-cart">
                                <a href="#" class="default-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>