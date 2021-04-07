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