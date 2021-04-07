 @extends('app')

 @section('title', '本一覧')

 @section('content')
 @include('nav')









 <!--Main layout-->
 <main class="my-5">
     <div class="container">
         <!--Section: Content-->
         <section class="text-center">
             <h4 class="mb-5"><strong>Latest posts</strong></h4>

             <div class="row">
                 <div class="col-lg-4 col-md-12 mb-4">
                     <div class="card">
                         <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                             <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                             <a href="#!">
                                 <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                             </a>
                         </div>
                         <div class="card-body">
                             <h5 class="card-title">Post title</h5>
                             <p class="card-text">
                                 Some quick example text to build on the card title and make up the bulk of the
                                 card's content.
                             </p>
                             <a href="#!" class="btn btn-primary">Read</a>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 mb-4">
                     <div class="card">
                         <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                             <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
                             <a href="#!">
                                 <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                             </a>
                         </div>
                         <div class="card-body">
                             <h5 class="card-title">Post title</h5>
                             <p class="card-text">
                                 Some quick example text to build on the card title and make up the bulk of the
                                 card's content.
                             </p>
                             <a href="#!" class="btn btn-primary">Read</a>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 mb-4">
                     <div class="card">
                         <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                             <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
                             <a href="#!">
                                 <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                             </a>
                         </div>
                         <div class="card-body">
                             <h5 class="card-title">Post title</h5>
                             <p class="card-text">
                                 Some quick example text to build on the card title and make up the bulk of the
                                 card's content.
                             </p>
                             <a href="#!" class="btn btn-primary">Read</a>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="row">
                 <div class="col-lg-4 col-md-12 mb-4">
                     <div class="card">
                         <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                             <img src="https://mdbootstrap.com/img/new/standard/nature/002.jpg" class="img-fluid" />
                             <a href="#!">
                                 <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                             </a>
                         </div>
                         <div class="card-body">
                             <h5 class="card-title">Post title</h5>
                             <p class="card-text">
                                 Some quick example text to build on the card title and make up the bulk of the
                                 card's content.
                             </p>
                             <a href="#!" class="btn btn-primary">Read</a>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 mb-4">
                     <div class="card">
                         <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                             <img src="https://mdbootstrap.com/img/new/standard/nature/022.jpg" class="img-fluid" />
                             <a href="#!">
                                 <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                             </a>
                         </div>
                         <div class="card-body">
                             <h5 class="card-title">Post title</h5>
                             <p class="card-text">
                                 Some quick example text to build on the card title and make up the bulk of the
                                 card's content.
                             </p>
                             <a href="#!" class="btn btn-primary">Read</a>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 mb-4">
                     <div class="card">
                         <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                             <img src="https://mdbootstrap.com/img/new/standard/nature/035.jpg" class="img-fluid" />
                             <a href="#!">
                                 <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                             </a>
                         </div>
                         <div class="card-body">
                             <h5 class="card-title">Post title</h5>
                             <p class="card-text">
                                 Some quick example text to build on the card title and make up the bulk of the
                                 card's content.
                             </p>
                             <a href="#!" class="btn btn-primary">Read</a>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!--Section: Content-->

         <!-- Pagination -->
         <nav class="my-4" aria-label="...">
             <ul class="pagination pagination-circle justify-content-center">
                 <li class="page-item">
                     <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                 </li>
                 <li class="page-item"><a class="page-link" href="#">1</a></li>
                 <li class="page-item active" aria-current="page">
                     <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                 </li>
                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                 <li class="page-item">
                     <a class="page-link" href="#">Next</a>
                 </li>
             </ul>
         </nav>
     </div>
 </main>
 <!--Main layout-->

 <!--Footer-->
 <footer class="bg-light text-lg-start">
     <div class="py-4 text-center">
         <a role="button" class="btn btn-primary btn-lg m-2" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow" target="_blank">
             Learn Bootstrap 5
         </a>
         <a role="button" class="btn btn-primary btn-lg m-2" href="https://mdbootstrap.com/docs/standard/" target="_blank">
             Download MDB UI KIT
         </a>
     </div>

     <hr class="m-0" />

     <div class="text-center py-4 align-items-center">
         <p>Follow MDB on social media</p>
         <a href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
             <i class="fab fa-youtube"></i>
         </a>
         <a href="https://www.facebook.com/mdbootstrap" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
             <i class="fab fa-facebook-f"></i>
         </a>
         <a href="https://twitter.com/MDBootstrap" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
             <i class="fab fa-twitter"></i>
         </a>
         <a href="https://github.com/mdbootstrap/mdb-ui-kit" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
             <i class="fab fa-github"></i>
         </a>
     </div>

     <!-- Copyright -->
     <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
         © 2020 Copyright:
         <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
     </div>
     <!-- Copyright -->
 </footer>
 <!--Footer-->