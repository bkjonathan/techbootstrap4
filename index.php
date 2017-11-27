<?php
require_once 'template/head.php';
require_once 'template/nav.php';
require_once 'template/carousel.php';
?>
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
                <?php require_once 'template/business_hours.php';?>
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

<?php
require_once 'template/foot.php';
?>
