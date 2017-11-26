<?php
require_once 'template/head.php';
?>
<!-- Header -->
<header class="site-header container">
    <div class="row justify-content-between">
        <div class="col-8 offset-2 col-lg-4 offset-lg-0">
            <img src="assets/img/logo.svg" class="img-fluid mx-auto d-block">
        </div>
        <div class="col-12 col-lg-4">
            <nav class="socials text-center text-md-right pt-5">
                <ul>
                    <li><a href="#"><i class="fa fa-2x fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-2x fa-twitter-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-2x fa-pinterest-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-2x fa-youtube-square" aria-hidden="true"></i></a></li>
                </ul>
            </nav>

        </div>
    </div>
</header>

<!-- Navigation -->
<div class="pink-cyan-gradient  py-2 mt-4">
    <nav class="main-nav py-2">
        <div class="container">
            <ul class="nav nav-justified flex-column flex-sm-row">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- Carousel -->
<main class="container">
    <div id="main-slider" data-ride="carousel" class="carousel slide mt-4">
        <ul class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/img_two/bg1.jpg" class="d-block img-fluid img-thumbnail">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-primary text-uppercase">Mogok</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/img_two/bg2.jpg" class="d-block img-fluid img-thumbnail">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-primary text-uppercase">Mandalay</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/img_two/bg3.jpg" class="d-block img-fluid img-thumbnail">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-primary text-uppercase">MogokMandalay</h2>
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

<!-- New Website section-->
<section class="new-website py-5">
    <h2 class="text-center text-uppercase"><span class="text-lowercase my-4">Welcome to our new</span> Website</h2>
    <p class="text-center">My name is Kyaw Zin Htike.I live in <br>Mandalay</p>
</section>

<!-- Image Links -->
<div class="container pb-5 mt-4">
    <div class="row">
        <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
            <div class="image-links">
                <img class="img-fluid img-thumbnail" src="assets/img/service_01.jpg">
            </div>
            <div class="row no-gutters">
                <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-3">
                    <h3 class="text-center text-uppercase"><span class="text-lowercase">Learn More</span> About Us</h3>
                    <a href="#" class="btn btn-primary text-uppercase btn-block py-3 mt-4">read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
            <div class="image-links">
                <img class="img-fluid img-thumbnail" src="assets/img/service_02.jpg">
            </div>
            <div class="row no-gutters">
                <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-3">
                    <h3 class="text-center text-uppercase"><span class="text-lowercase">about our</span> Services</h3>
                    <a href="#" class="btn btn-primary text-uppercase btn-block py-3 mt-4">read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
            <div class="image-links">
                <img class="img-fluid img-thumbnail" src="assets/img/service_03.jpg">
            </div>
            <div class="row no-gutters">
                <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-3">
                    <h3 class="text-center text-uppercase"><span class="text-lowercase">visit our</span> Store</h3>
                    <a href="#" class="btn btn-primary text-uppercase btn-block py-3 mt-4">read more</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Business Hours-->
<div class="business-hours pink-cyan-gradient py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <h3 class="text-uppercase">Business Hours</h3>
                <p class="mt-5">The carousel is a slideshow for cycling through a series of content, built with CSS 3D
                    transforms and
                    a bit of JavaScript.</p>
                <table class="table table-hover text-center">
                    <thead class="table-danger">
                    <tr>
                        <th class="text-center">Day</th>
                        <th class="text-center">From</th>
                        <th class="text-center">To</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Monday</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Thursday</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Saturday</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Sunday</td>
                        <td>Closed</td>
                        <td>Closed</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 bg-hours">

            </div>
        </div>
    </div>
</div>

<!-- Product Section -->
<div class="container products py-5">
    <h3 class="text-center text-uppercase"><span class="text-lowercase">check out</span> Our Products</h3>
    <div class="row mt-5">
        <div class="col-6 col-md-3 mb-5 mb-md-0">
            <div class="card">
                <a href="#">
                    <img src="assets/img/product_thumb_01.jpg" class="card-img-top img-fluid">
                    <div class="card-block">
                        <h3 class="card-title text-uppercase text-center mb-0">Product1</h3>
                        <div class="card-text">
                            <p>
                                The carousel is a slideshow for cycling through a series of content
                            </p>
                            <p class="price text-center mb-0">$ 25</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 col-md-3 mb-5 mb-md-0">
            <div class="card">
                <a href="#">
                    <img src="assets/img/product_thumb_02.jpg" class="card-img-top img-fluid">
                    <div class="card-block">
                        <h3 class="card-title text-uppercase text-center mb-0">Product1</h3>
                        <div class="card-text">
                            <p>
                                The carousel is a slideshow for cycling through a series of content
                            </p>
                            <p class="price text-center mb-0">$ 25</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 col-md-3 mb-5 mb-md-0">
            <div class="card">
                <a href="#">
                    <img src="assets/img/product_thumb_03.jpg" class="card-img-top img-fluid">
                    <div class="card-block">
                        <h3 class="card-title text-uppercase text-center mb-0">Product1</h3>
                        <div class="card-text">
                            <p>
                                The carousel is a slideshow for cycling through a series of content
                            </p>
                            <p class="price text-center mb-0">$ 25</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-6 col-md-3 mb-5 mb-md-0">
            <div class="card">
                <a href="#">
                    <img src="assets/img/product_thumb_04.jpg" class="card-img-top img-fluid">
                    <div class="card-block">
                        <h3 class="card-title text-uppercase text-center mb-0">Product1</h3>
                        <div class="card-text">
                            <p>
                                The carousel is a slideshow for cycling through a series of content
                            </p>
                            <p class="price text-center mb-0">$ 25</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Appointment -->
<div class="appointment container-fluid py-5">
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center">
            <h3 class="text-uppercase text-center">Make an appointment</h3>
            <p>The carousel is a slideshow for cycling through a series of content, built with CSS 3D transforms and a
                bit of JavaScript.</p>
            <a href="#" class="btn btn-primary btn-lg text-uppercase">Read More</a>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="site-footer pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="text-center text-uppercase pb-4">About us</h3>
                <p class="text-justify">The carousel is a slideshow for cycling through a series of content, built with
                    CSS 3D transforms and a bit of JavaScript.</p>
            </div>
            <div class="col-md-4 pb-4 pb-md-0">
                <h3 class="text-center text-uppercase pb-4">Open Hours</h3>
                <p class="text-center mb-0">Mon - Fri : 9 AM - 7 PM</p>
                <p class="text-center mb-0">Saturday : 10 AM - 2 PM</p>
                <p class="text-center mb-0">Sunday : Closed</p>
            </div>
            <div class="col-md-4">
                <h3 class=" text-uppercase text-center pb-4">Contacts</h3>
                <p class="mb-0">66 East Sunnyslope Avenue</p>
                <p>Lansdowne,PA 19050</p>
                <div class="social-nav">
                    <nav class="socials text-center">
                        <ul>
                            <li><a href="#"><i class="fa fa-2x fa-facebook-official" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-2x fa-pinterest-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-2x fa-youtube-square" aria-hidden="true"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="w-100"></div>
            <hr class="w-100">
            <p class="copyright text-center w-100">
                Carolina Spa & Salon Copyright
            </p>
        </div>
    </div>
</footer>
<?php
require_once 'template/foot.php';
?>
