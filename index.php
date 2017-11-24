<?php
require_once 'template/head.php';
?>
<header class="site-header container">
    <div class="row justify-content-between">
        <div class="col-8 offset-2 col-lg-4 offset-lg-0">
            <img src="assets/img/logo.svg" class="img-fluid mx-auto d-block">
        </div>
        <div class="col-12 col-lg-4">
            <nav class="socials">
                <a href="#">Facebook</a>
                <a href="#">Twittesr</a>
                <a href="#">Instagram</a>
                <a href="#">Pinterest</a>
                <a href="#">Youtube</a>

            </nav>

        </div>
    </div>

</header>
   <div class="navigation py-2 mt-4">
     <nav class="main-nav py-2">
       <div class="container">

           <ul class="nav nav-justified flex-column flex-sm-row">
             <li class="nav-item">
               <a href="#" class="nav-link">Home</a>
             </li>
             <li class="nav-item">
               <a href="#" class="nav-link">Product</a>
             </li>
             <li class="nav-item">
               <a href="#" class="nav-link">Service</a>
             </li>
             <li class="nav-item">
               <a href="#" class="nav-link">About</a>
             </li>
             <li class="nav-item">
               <a href="#" class="nav-link">Contact Us</a>
             </li>
            </ul>



       </div>

     </nav>

   </div>



   <main class="container">
    <div id="main-slider" data-ride="carousel" class="carousel slide mt-4">
        <ul class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
            <li data-target="#main-slider" data-slide-to="3"></li>
            <li data-target="#main-slider" data-slide-to="4"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/slide_01.jpg" class="d-block img-fluid img-thumbnail">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-primary text-uppercase">Mogok</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/slide_02.jpg" class="d-block img-fluid img-thumbnail">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-primary text-uppercase">Mandalay</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/slide_03.jpg" class="d-block img-fluid img-thumbnail">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-primary text-uppercase">MogokMandalay</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/slide_04.jpg" class="d-block img-fluid img-thumbnail">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-primary text-uppercase">Yangon</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/slide_05.jpg" class="d-block img-fluid img-thumbnail">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-primary text-uppercase">NaypyiTaw</h1>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#main-slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</main>

<section class="new-website py-5">
  <h2 class="text-center text-uppercase">
     <span class="text-lowercase">This is my new</span>website
  </h2>
  <p class="text-center mt-4">Takcum power made in india.</p>
</section>

<?php
require_once 'template/foot.php';
?>
