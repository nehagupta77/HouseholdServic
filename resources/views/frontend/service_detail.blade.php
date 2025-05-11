<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>service_detail</title>
    <link rel="icon" href="{{ asset('frontend/assets/images/faviconS.png')}}" type="image/gif" sizes="20x20">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Bootstrap icons CSS -->
    <link href="{{ asset('frontend/assets/css/bootstrap-icons.css')}}" rel="stylesheet">
    <!-- Fontawesome all CSS -->
    <link href="{{ asset('frontend/assets/css/all.min.css')}}" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link href="{{ asset('frontend/assets/css/fontawesome.min.css')}}" rel="stylesheet">
    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css')}}">
    <!-- slick-slide -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css')}}">
    <!-- Nice select CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css')}}">
    <!-- Magnific-popup CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css')}}">
    <!--  Style CSS  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}">
    <!-- Title -->
</head>

<body>

    <!-- Start header section -->
    @include('frontend.includes.header')
    <!-- End header section -->

    <!-- Start breadcrumbs section -->
    <!-- <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <h2>Service Details</h2>
                        <span><a href="index-2.html">Home</a><i class="bi bi-chevron-right"></i>Service Details</span>
                        <div class="arrow-down">
                            <a href="#down"><i class="bi bi-chevron-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End breadcrumbs section -->

    <!-- Start services-details-area section -->
    <section id="down" class="services-details-area sec-m-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-details">
                        <div class="service-details-thumbnail">
                            <img src='{{ asset("uploads/$product->image")}}' alt="">
                        </div>
                        <H2>{{}}</H2>
                        <div class="service-tabs wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Overview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Details</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Client Review</button>
                                </li>

                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="service-overview  wow animate fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                                        <h4>Plumbing Training</h4>
                                        <p>Obtain pain of because is pain, but because you nally circumstances more than some work um soluta nobis est eligendi optio cumque nihil impedit quo minus id quodOne advanced diverted domestic repeated bringing you old. Possible procured her trifling</p>
                                        <div class="package">
                                            <h4>Our Package</h4>
                                            <ul class="package-list">
                                                <li><i class="bi bi-check-all"></i>Page Load (time, size, number of requests).</li>
                                                <li><i class="bi bi-check-all"></i>Adance Data analysis operation.</li>
                                            </ul>
                                        </div>
                                        <div class="include-exclude">
                                            <h4>What’s Included</h4>
                                            <ul>
                                                <li><i class="bi bi-circle-fill"></i>There are many variations of passages of Lorem Ipsum.</li>
                                                <li><i class="bi bi-circle-fill"></i>Water Heater Repair Services</li>
                                                <li><i class="bi bi-circle-fill"></i>Toilet Repair</li>
                                            </ul>
                                        </div>
                                        <div class="include-exclude">
                                            <h4>What’s Excluded</h4>
                                            <ul>
                                                <li><i class="bi bi-circle-fill"></i>Price of additional materials or parts (if needed)</li>
                                                <li><i class="bi bi-circle-fill"></i>Transportation cost for carrying new materials/parts (if applicable)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="package">
                                        <h4>Our Package</h4>
                                        <ul class="package-list">
                                            <li><i class="bi bi-check-all"></i>Page Load (time, size, number of requests).</li>
                                            <li><i class="bi bi-check-all"></i>Adance Data analysis operation.</li>
                                            <li><i class="bi bi-check-all"></i>Possible procured her trifling Obtain pain.</li>
                                        </ul>
                                    </div><br>
                                    <p>Obtain pain of because is pain, but because you nally circumstances more than some work um soluta nobis est eligendi optio cumque nihil impedit quo minus id quodOne advanced diverted domestic repeated bringing you old. Possible procured her trifling</p><br>
                                    <p>Circumstances more than some work um soluta nobis est eligendi optio cumque nihil impedit quo minus id quodOne advanced diverted domestic repeated bringing you old. Possible procured her trifling Obtain pain of because is pain, but because you nally circumstances more than some work um soluta nobis est eligendi optio cumque nihil impedit quo minus id quodOne advanced diverted domestic repeated bringing you old. Possible procured her trifling</p>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="client-review">
                                        <h4>Review of Painting Services in Mirpur</h4>
                                        <div class="tab-review">
                                            <h5>Johan Martin</h5>
                                            <div class="review-rating">
                                                <ul>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star"></i></li>
                                                </ul>
                                            </div>
                                            <p>Obtain pain of because is pain, but because you nally circumstances more than some work um soluta nobis est eligendi optio cumque nihil impedit quo minus id quodOne advanced diverted domestic repeated bringing you old. Possible procured her trifling</p>
                                        </div>
                                        <div class="tab-review">
                                            <h5>Johan Martin</h5>
                                            <div class="review-rating">
                                                <ul>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star"></i></li>
                                                </ul>
                                            </div>
                                            <p>Obtain pain of because is pain, but because you nally circumstances more than some work um soluta nobis est eligendi optio cumque nihil impedit quo minus id quodOne.</p>
                                        </div>
                                        <div class="tab-review">
                                            <h5>Johan Martin</h5>
                                            <div class="review-rating">
                                                <ul>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star"></i></li>
                                                </ul>
                                            </div>
                                            <p>Eligendi optio cumque nihil impedit quo minus id quodOne advanced diverted domestic repeated bringing you old. Possible procured her trifling</p>
                                        </div>
                                        <a class="view-all-review-btn" href="#">View All Reviews</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-faq" role="tabpanel" aria-labelledby="pills-faq-tab">
                                    <div class="faqs-content">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <span class="accordion-header" id="headingone">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseone" aria-expanded="false" aria-controls="collapseone">
                                                        01. How can OnDemand Services help me?
                                                    </button>
                                                </span>
                                                <div id="collapseone" class="accordion-collapse collapse" aria-labelledby="headingone" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Auction sites present consumers with a thrilling, competitive way to buy the goods and services they need most. But getting your own auction site up and running has always required learning complex coding languages, or hiring an expensive design.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <span class="accordion-header" id="headingtwo">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                                        02. What is the Printing Quality?
                                                    </button>
                                                </span>
                                                <div id="collapsetwo" class="accordion-collapse collapse show" aria-labelledby="headingtwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Auction sites present consumers with a thrilling, competitive way to buy the goods and services they need most. But getting your own auction site up and running has always required learning complex coding languages, or hiring an expensive design.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <span class="accordion-header" id="headingthree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                                                        03.Can I request a service with an on-site consultant?
                                                    </button>
                                                </span>
                                                <div id="collapsethree" class="accordion-collapse collapse" aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Auction sites present consumers with a thrilling, competitive way to buy the goods and services they need most. But getting your own auction site up and running has always required learning complex coding languages, or hiring an expensive design.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <span class="accordion-header" id="headingfour">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                        04. Who is the service provider for On-Demand Delivery?
                                                    </button>
                                                </span>
                                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Auction sites present consumers with a thrilling, competitive way to buy the goods and services they need most. But getting your own auction site up and running has always required learning complex coding languages, or hiring an expensive design.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <span class="accordion-header" id="headingfive">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                                        05. Do I pay processing fees on delivery charges?
                                                    </button>
                                                </span>
                                                <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Auction sites present consumers with a thrilling, competitive way to buy the goods and services they need most. But getting your own auction site up and running has always required learning complex coding languages, or hiring an expensive design.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <span class="accordion-header" id="headingsix">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                                        06.How should I prepare my business for an On-Demand ?
                                                    </button>
                                                </span>
                                                <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Auction sites present consumers with a thrilling, competitive way to buy the goods and services they need most. But getting your own auction site up and running has always required learning complex coding languages, or hiring an expensive design.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <span class="accordion-header" id="headingseven">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                                        07. What kind of support do you get from?
                                                    </button>
                                                </span>
                                                <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Auction sites present consumers with a thrilling, competitive way to buy the goods and services they need most. But getting your own auction site up and running has always required learning complex coding languages, or hiring an expensive design.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-sidebar">
                        <div class="service-widget wow animate fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="service-pack">
                                <h4>Service Price <span><small>$</small>250</span></h4>
                                <div class="package">
                                    <h4>Our Package</h4>
                                    <ul class="package-list">
                                        <li><i class="bi bi-check-all"></i>Garbage Disposal Services</li>
                                        <li><i class="bi bi-check-all"></i>Water Heater Repair Services</li>
                                        <li><i class="bi bi-check-all"></i>Toilet Repair</li>
                                        <li><i class="bi bi-check-all"></i>Kitchen Cleaner</li>
                                    </ul>
                                </div>
                                <div class="book-btn">
                                    <a href="contact.html">Order Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="service-widget wow animate fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="about-seller">
                                <div class="thumb">
                                    <img src="{{ asset('frontend/assets/images/seller.png')}}" alt="">
                                </div>
                                <h3>About Seller</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum molestie adipiscing fermentum lectus.</p>
                                <div class="seller-information">
                                    <div class="single-info">
                                        <h5>Order Complete<span>2000</span></h5>
                                    </div>
                                    <div class="single-info">
                                        <h5>Seller Rating
                                            <strong>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <b>(5/5)</b>
                                            </strong>
                                        </h5>
                                    </div>
                                </div>
                                <ul class="seller-social">
                                    <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End services-details-area section -->

    <!-- Start other-services section -->
    <section class="other-services-two sec-m-top">
        <div class="container">
            <div class="other-services">
                <h3>Other Services</h3>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="single-service layout-2">
                            <div class="thumb">
                                <a href="service-details.html"><img src="assets/images/services/service-1.jpg" alt=""></a>
                                <div class="tag">
                                    <a href="service.html">Saloon</a>
                                </div>
                                <div class="wish">
                                    <a href="account.html"><i class="bi bi-suit-heart"></i></a>
                                </div>
                            </div>
                            <div class="single-inner">
                                <div class="author-info">
                                    <div class="author-thumb">
                                        <img src="assets/images/services/service-author-1.png" alt="">
                                    </div>
                                    <div class="author-content">
                                        <span>Egens Lab</span>
                                        <div class="ratting">
                                            <ul class="stars">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <strong>(5/5)</strong>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="service-details.html">Sed elit massa, maximus quisen fermentum auctor.</a></h4>
                                <div class="started">
                                    <a href="service-details.html">View Details<span><i class="bi bi-arrow-right"></i></span></a>
                                    <span><small>$</small>250</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow animate fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="single-service layout-2">
                            <div class="thumb">
                                <a href="service-details.html"><img src="assets/images/services/service-2.jpg" alt=""></a>
                                <div class="tag">
                                    <a href="service.html">Cleaning</a>
                                </div>
                                <div class="wish">
                                    <a href="account.html"><i class="bi bi-suit-heart"></i></a>
                                </div>
                            </div>
                            <div class="single-inner">
                                <div class="author-info">
                                    <div class="author-thumb">
                                        <img src="assets/images/services/service-author-2.png" alt="">
                                    </div>
                                    <div class="author-content">
                                        <span>Finibus</span>
                                        <div class="ratting">
                                            <ul class="stars">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <strong>(5/5)</strong>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="service-details.html">Cleaning & Renovation Services By Our Expert Cleaner.</a></h4>
                                <div class="started">
                                    <a href="service-details.html">View Details<span><i class="bi bi-arrow-right"></i></span></a>
                                    <span><small>$</small>250</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow animate fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="single-service layout-2">
                            <div class="thumb">
                                <a href="service-details.html"><img src="assets/images/services/service-3.jpg" alt=""></a>
                                <div class="tag">
                                    <a href="service.html">Ac Repair</a>
                                </div>
                                <div class="wish">
                                    <a href="account.html"><i class="bi bi-suit-heart"></i></a>
                                </div>
                            </div>
                            <div class="single-inner">
                                <div class="author-info">
                                    <div class="author-thumb">
                                        <img src="assets/images/services/service-author-3.png" alt="">
                                    </div>
                                    <div class="author-content">
                                        <span>Creasoft</span>
                                        <div class="ratting">
                                            <ul class="stars">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <strong>(5/5)</strong>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="service-details.html">Nullam dui nulla, lacinia ac masi varius sed tempor ac.</a></h4>
                                <div class="started">
                                    <a href="service-details.html">View Details<span><i class="bi bi-arrow-right"></i></span></a>
                                    <span><small>$</small>250</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End other-services section -->

    <!-- Start our-brands section -->
    <div class="our-brands sec-m">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brands">
                        <div class="single-brand wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <i><img src="assets/images/brand/brand-1.png" alt=""></i>
                        </div>
                        <div class="single-brand wow animate fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <i><img src="assets/images/brand/brand-2.png" alt=""></i>
                        </div>
                        <div class="single-brand wow animate fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <i><img src="assets/images/brand/brand-3.png" alt=""></i>
                        </div>
                        <div class="single-brand wow animate fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <i><img src="assets/images/brand/brand-4.png" alt=""></i>
                        </div>
                        <div class="single-brand wow animate fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <i><img src="assets/images/brand/brand-5.png" alt=""></i>
                        </div>
                        <div class="single-brand wow animate fadeInLeft" data-wow-delay="700ms" data-wow-duration="1500ms">
                            <i><img src="assets/images/brand/brand-6.png" alt=""></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End our-brands section -->

    <!-- Start footer section -->
        @include('frontend.includes.footer')
    <!-- End footer section -->

    <!--  Main jQuery  -->
    <script data-cfasync="false" src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>
    <!-- Popper and Bootstrap JS -->
    <script src="{{ asset('frontend/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <!-- Swiper slider JS -->
    <script src="{{ asset('frontend/assets/js/swiper-bundle.min.js')}}"></script>
    <!-- Slick slider JS -->
    <script src="{{ asset('frontend/assets/js/slick.js')}}"></script>
    <!-- Nice select JS -->
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('frontend/assets/js/waypoints.min.js')}}"></script>
    <!-- Counterup JS -->
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
    <!-- Magnific-popup  JS -->
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Wow JS -->
        <script src="{{ asset('frontend/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/anime.min.js')}}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('frontend/assets/js/custom.js')}}"></script>

</body>


<!-- Mirrored from demo-egenslab.b-cdn.net/html/serve/preview/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Mar 2025 02:36:57 GMT -->
</html>
