<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Household</title>
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
    <!--Start preloader area -->
    <div class="egns-preloader">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="circle-border">
                        <div class="moving-circle"></div>
                        <div class="moving-circle"></div>
                        <div class="moving-circle"></div>
                        <svg width="180px" height="150px" viewBox="0 0 187.3 93.7" preserveAspectRatio="xMidYMid meet">
                            <path stroke="#5BB543" id="outline" fill="none" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z" />
                            <path id="outline-bg" opacity="0.05" fill="none" stroke="#959595" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End preloader area  -->


    <!-- Start header section -->
    <header class="header-1 sticky_top">
        <!-- <div class="header-logo">
            <a href="index-2.html"><img src="{{ asset('frontend/assets/images/logo.svg')}}" alt=""></a>
        </div> -->
        <div class="main-menu">
            <nav class="main-nav">
                <div class="mobile-menu-logo">
                    <a href="index-2.html"><img src="{{ asset('frontend/assets/images/logo.svg')}}" alt=""></a>
                    <div class="remove">
                        <i class="bi bi-plus-lg"></i>
                   </div>
                </div>
                <ul>
                    <li class="has-child active">
                        <a href="index-2.html">Home</a>
                        <!-- <i class="bi bi-chevron-down"></i>
                        <ul class="sub-menu">
                            <li><a href="index-2.html">Home 01</a></li>
                            <li><a href="index2.html">Home 02</a></li>
                            <li><a href="index3.html">Home 03</a></li>
                        </ul> -->
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li class="has-child">
                        <a href="service.html">Services</a>
                        <i class="bi bi-chevron-down"></i>
                        <ul class="sub-menu">
                            <li><a href="service.html">Services</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <!-- <li class="has-child">
                        <a href="blog.html">Blogs</a>
                        <i class="bi bi-chevron-down"></i>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                            <li><a href="blog-standard.html">Blog Standard</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li> -->
                    <li class="has-child">
                        <a href="#">Pages</a>
                        <i class="bi bi-chevron-down"></i>
                        <ul class="sub-menu">
                            <li><a href="{{ route('frontend.login') }}">Login</a></li>
                            <li><a href="{{ route('frontend.signup') }}">Sign Up</a></li>
                            <!-- <li><a href="error.html">Error 404</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="account.html">My Account</a></li> -->
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="{{ route('login.submit')}}" class="bg-danger" onclick="confirmLogout()">Logout</a></li>

                    @if(auth()->check())
                    <li>Hello, {{ auth()->user()->first_name}}</li>
                    @endif
                </ul>
                <!-- <div class="my-account">
                    <a href="account.html">My Account</a>
                </div> -->
            </nav>
        </div>
        <!-- <div class="header-right">
            <div class="phone">
                <div class="icon">
                    <img src="assets/images/icons/phone.svg" alt="">
                </div>
                <div class="phn-info">
                    <span>Call Us Now</span>
                    <a href="tel:01701111000">+880 170 1111 000</a>
                </div>
            </div>
            <div class="wishlist">
                <a href="account.html"><i class="bi bi-suit-heart"></i></a>
            </div>
            <div class="account-btn">
                <a href="account.html">My Account</a>
            </div>
            <div class="mobile-menu">
                <a href="javascript:void(0)" class="cross-btn">
                    <span class="cross-top"></span>
                    <span class="cross-middle"></span>
                    <span class="cross-bottom"></span>
                </a>
            </div>
        </div> -->
    </header>
    <!-- End header section -->

    <!-- Start hero-area section -->
    <section class="hero-area">
        <div class="container-fluid">
            <div class="hero-wrapper">
                <div class="hero-content wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <span>Wellcome Our Service Sale</span>
                    <h1>Nonstop Services Life Better.</h1>
                    <p>Household services make daily life easier by providing professional help with cleaning, cooking, laundry, and home maintenance. Whether it’s keeping your space spotless, preparing delicious meals, or handling repairs, these services ensure comfort and convenience. With skilled professionals taking care of household tasks, you can save time, reduce stress, and enjoy a well-managed home effortlessly.</p>
                    <div class="find-service">
                        <div class="location-search">
                            <!-- <div class="location-btn">
                                <i><img src="assets/images/icons/location.svg" alt=""></i>
                                <select class="loc-select">
                                    <option selected="">Dhaka</option>
                                    <option value="barisal">Barisal</option>
                                    <option value="khulna">Khulna</option>
                                    <option value="Dhaka">Rangpur</option>
                                    <option value="barisal">Sylhet</option>
                                    <option value="khulna">Rajshahi</option>
                                </select>
                            </div> -->
                            <div class="location-form">
                                <form action="#" method="post">
                                    <input type="text" name="location" placeholder="Find Your Services Here">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="suggest">
                            <span>Suggest For You:</span>
                            <ul class="suggest-list">
                                <li><a href="service.html">Beauty & Salon</a></li>
                                <li><a href="service.html">Plumber</a></li>
                                <li><a href="service.html">Electrician</a></li>
                                <li><a href="service.html">AC Repair</a></li>
                                <li><a href="service.html">WallPainting</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hero-banner wow animate fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <img src="{{ asset('frontend/assets/images/home-1/hero-section-right-img.png')}}" alt="" class="banner">
                </div>
            </div>
        </div>
        <!-- <div class="scroll-down">
            <a href="#category">Scroll Down<span><i class="bi bi-arrow-right"></i></span></a>
        </div> -->
    </section>
    <!-- End hero-area section -->

    <!-- Start creative-services section -->
    <section id="category" class="creative-services sec-p-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-title layout-1 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="title-left">
                            <span>Category</span>
                            <h2>See Our All Creative Services</h2>
                        </div>
                        <!-- <div class="title-right">
                            <strong>Category</strong>
                            <div class="slider-navigations">
                                <div class="swiper-button-prev-c"><i class="bi bi-arrow-left"></i></div>
                                <div class="swiper-button-next-c"><i class="bi bi-arrow-right"></i></div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper creative-service-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="creative-service wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="thumb">
                                <img src="{{ asset('frontend/assets/images/cre-service/cre-service-1.jpg')}}" alt="">
                                <!-- <div class="cre-service-inner">
                                    <strong>100</strong>
                                    <span>Items</span>
                                </div> -->
                            </div>
                            <h6><a href="service-details.html">House Sift</a></h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="creative-service wow animate fadeInDown" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="thumb">
                                <img src="{{asset('frontend/assets/images/cre-service/cre-service-2.jpg')}}" alt="">
                                <!-- <div class="cre-service-inner">
                                    <strong>80</strong>
                                    <span>Items</span>
                                </div> -->
                            </div>
                            <h6><a href="service-details.html">Driver</a></h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="creative-service wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="thumb">
                                <img src="{{ asset('frontend/assets/images/cre-service/cre-service-3.jpg')}}" alt="">
                                <!-- <div class="cre-service-inner">
                                    <strong>200+</strong>
                                    <span>Items</span>
                                </div> -->
                            </div>
                            <h6><a href="service-details.html">Security</a></h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="creative-service wow animate fadeInDown" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="thumb">
                                <img src="{{ asset('frontend/assets/images/cre-service/cre-service-4.jpg')}}" alt="">
                                <!-- <div class="cre-service-inner">
                                    <strong>50</strong>
                                    <span>Items</span>
                                </div> -->
                            </div>
                            <h6><a href="service-details.html">Gadgect Repaire</a></h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="creative-service wow animate fadeInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="thumb">
                                <img src="{{ asset('frontend/assets/images/cre-service/cre-service-5.jpg')}}" alt="">
                                <!-- <div class="cre-service-inner">
                                    <strong>75</strong>
                                    <span>Items</span>
                                </div> -->
                            </div>
                            <h6><a href="service-details.html">Car & Care</a></h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="creative-service wow animate fadeInDown" data-wow-delay="700ms" data-wow-duration="1500ms">
                            <div class="thumb">
                                <img src="{{ asset('frontend/assets/images/cre-service/cre-service-6.jpg')}}" alt="">
                                <!-- <div class="cre-service-inner">
                                    <strong>85</strong>
                                    <span>Items</span>
                                </div> -->
                            </div>
                            <h6><a href="service-details.html">Home Clean</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End creative-services section -->

    <!-- Start popular-services section -->
    <!-- <section class="popular-services sec-m-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-title layout-1 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="title-left">
                            <span>Services</span>
                            <h2>Our Popular Services</h2>
                        </div>
                        <div class="title-right">
                            <strong>Popular Services</strong>
                            <a href="service.html">View All Services<span><i class="bi bi-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="single-service">
                        <div class="thumb">
                            <a href="service-details.html"><img src="assets/images/services/service-1.jpg" alt=""></a>
                            <div class="tag">
                                <a href="service.html">Saloon</a>
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
                                <span>Started At : <strong><small>$</small>250</strong></span>
                                <a href="service-details.html">View Details<span><i class="bi bi-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="single-service">
                        <div class="thumb">
                            <a href="service-details.html"><img src="assets/images/services/service-2.jpg" alt=""></a>
                            <div class="tag">
                                <a href="service.html">Cleaning</a>
                            </div>
                        </div>
                        <div class="single-inner">
                            <div class="author-info">
                                <div class="author-thumb">
                                    <img src="assets/images/services/service-author-2.png" alt="">
                                </div>
                                <div class="author-content">
                                    <span>finibus</span>
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
                                <span>Started At : <strong><small>$</small>250</strong></span>
                                <a href="service-details.html">View Details<span><i class="bi bi-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="single-service">
                        <div class="thumb">
                            <a href="service-details.html"><img src="assets/images/services/service-3.jpg" alt=""></a>
                            <div class="tag">
                                <a href="service.html">Ac Repair</a>
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
                                <span>Started At : <strong><small>$</small>250</strong></span>
                                <a href="service-details.html">View Details<span><i class="bi bi-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End popular-services section -->

    <!-- Start home-services section -->
    <!-- <section class="home-services sec-m">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-title layout-1 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="title-left">
                            <span>Services</span>
                            <h2>For Your Home</h2>
                        </div>
                        <div class="title-right">
                            <strong>For Your Home</strong>
                            <a href="service.html">View All Services<span><i class="bi bi-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="single-service">
                        <div class="thumb">
                            <a href="service-details.html"><img src="assets/images/services/service-4.jpg" alt=""></a>
                            <div class="tag">
                                <a href="service.html">Spa & Beuty</a>
                            </div>
                        </div>
                        <div class="single-inner">
                            <div class="author-info">
                                <div class="author-thumb">
                                    <img src="assets/images/services/service-author-4.png" alt="">
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
                            <h4><a href="service-details.html">Aliquam commodo suscipit vola neque. Aliquam erat utpat.</a></h4>
                            <div class="started">
                                <span>Started At : <strong><small>$</small>250</strong></span>
                                <a href="service-details.html">View Details<span><i class="bi bi-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="single-service">
                        <div class="thumb">
                            <a href="service-details.html"><img src="assets/images/services/service-5.jpg" alt=""></a>
                            <div class="tag">
                                <a href="service.html">House Sift</a>
                            </div>
                        </div>
                        <div class="single-inner">
                            <div class="author-info">
                                <div class="author-thumb">
                                    <img src="assets/images/services/service-author-5.png" alt="">
                                </div>
                                <div class="author-content">
                                    <span>finibus</span>
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
                            <h4><a href="service-details.html">Proin eget elit elit. Sed congueb neque vel nulla efficitur.</a></h4>
                            <div class="started">
                                <span>Started At : <strong><small>$</small>250</strong></span>
                                <a href="service-details.html">View Details<span><i class="bi bi-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="single-service">
                        <div class="thumb">
                            <a href="service-details.html"><img src="assets/images/services/service-6.jpg" alt=""></a>
                            <div class="tag">
                                <a href="service.html">Electrician</a>
                            </div>
                        </div>
                        <div class="single-inner">
                            <div class="author-info">
                                <div class="author-thumb">
                                    <img src="assets/images/services/service-author-6.png" alt="">
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
                            <h4><a href="service-details.html">Mauris elit lectus, hendrerit eui quam at lobortisi.</a></h4>
                            <div class="started">
                                <span>Started At : <strong><small>$</small>250</strong></span>
                                <a href="service-details.html">View Details<span><i class="bi bi-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End home-services section -->

    <!-- Start features-shop section -->
    <!-- <section class="features-shop">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-title layout-1 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="title-left">
                            <span>Shop</span>
                            <h2>Our Feature Shop</h2>
                        </div>
                        <div class="title-right">
                            <strong>Feature Shop</strong>
                            <a href="service-details.html">View All Shop<span><i class="bi bi-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper shop-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="single-shop wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="shop-thumb">
                                <img src="assets/images/shop/shop-1.png" alt="">
                            </div>
                            <div class="shop-inner">
                                <span>Cleaning</span>
                                <h4>Cleaning Store</h4>
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
                                <a href="service.html">View Store<span><i class="bi bi-arrow-right"></i></span></a>
                            </div>
                            <div class="shop-service-count">
                                <span>10 Services</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-shop wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="shop-thumb">
                                <img src="assets/images/shop/shop-2.png" alt="">
                            </div>
                            <div class="shop-inner">
                                <span>Plumbing</span>
                                <h4>Plumbing Store</h4>
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
                                <a href="service.html">View Store<span><i class="bi bi-arrow-right"></i></span></a>
                            </div>
                            <div class="shop-service-count">
                                <span>08 Services</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-shop wow animate fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="shop-thumb">
                                <img src="assets/images/shop/shop-3.png" alt="">
                            </div>
                            <div class="shop-inner">
                                <span>Security</span>
                                <h4>Security Agency</h4>
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
                                <a href="service.html">View Store<span><i class="bi bi-arrow-right"></i></span></a>
                            </div>
                            <div class="shop-service-count">
                                <span>12 Services</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-shop wow animate fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="shop-thumb">
                                <img src="assets/images/shop/shop-4.png" alt="">
                            </div>
                            <div class="shop-inner">
                                <span>Gadgect</span>
                                <h4>Gadgect Repair</h4>
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
                                <a href="service.html">View Store<span><i class="bi bi-arrow-right"></i></span></a>
                            </div>
                            <div class="shop-service-count">
                                <span>05 Services</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section> -->
    <!-- End features-shop section -->

    <!-- Start offer-services section -->
    <!-- <section class="offer-services sec-m-top">
        <div class="container">
            <div class="row">
                <div class="col-12 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="sec-title layout-1">
                        <div class="title-left">
                            <span>Offered</span>
                            <h2>Best Offered Services</h2>
                        </div>
                        <div class="title-right">
                            <strong>For Your Home</strong>
                            <a href="service.html">View All Services<span><i class="bi bi-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="single-service">
                        <div class="thumb">
                            <a href="service-details.html"><img src="assets/images/services/service-7.jpg" alt=""></a>
                            <div class="tag">
                                <a href="service.html">45% OFF</a>
                            </div>
                        </div>
                        <div class="single-inner">
                            <div class="author-info">
                                <div class="wish">
                                    <a href="account.html"><i class="bi bi-suit-heart"></i></a>
                                </div>
                                <div class="author-thumb">
                                    <img src="assets/images/services/service-author-7.png" alt="">
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
                            <h4><a href="service-details.html">Aliquam commodo suscipit vola neque. Aliquam erat utpat.</a></h4>
                            <div class="started">
                                <span>Started At : <strong><small>$</small>250</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow animate fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="single-service">
                        <div class="thumb">
                            <a href="service-details.html"><img src="assets/images/services/service-8.jpg" alt=""></a>
                            <div class="tag">
                                <a href="service.html">60% OFF</a>
                            </div>
                        </div>
                        <div class="single-inner">
                            <div class="author-info">
                                <div class="wish">
                                    <a href="account.html"><i class="bi bi-suit-heart"></i></a>
                                </div>
                                <div class="author-thumb">
                                    <img src="assets/images/services/service-author-8.png" alt="">
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
                            <h4><a href="service-details.html">Proin eget elit elit. Sed congueb neque vel nulla efficitur.</a></h4>
                            <div class="started">
                                <span>Started At : <strong><small>$</small>250</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow animate fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="single-service">
                        <div class="thumb">
                            <a href="service-details.html"><img src="assets/images/services/service-9.jpg" alt=""></a>
                            <div class="tag">
                                <a href="service.html">50% OFF</a>
                            </div>
                        </div>
                        <div class="single-inner">
                            <div class="author-info">
                                <div class="wish">
                                    <a href="account.html"><i class="bi bi-suit-heart"></i></a>
                                </div>
                                <div class="author-thumb">
                                    <img src="assets/images/services/service-author-9.png" alt="">
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
                            <h4><a href="service-details.html">Mauris elit lectus, hendrerit eui quam at lobortisi.</a></h4>
                            <div class="started">
                                <span>Started At : <strong><small>$</small>250</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End offer-services section -->

    <!-- Start why-choose section -->
    <section class="why-choose sec-m">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="why-choose-left">
                        <div class="sec-title layout-1">
                            <div class="title-left">
                                <span>Trust Agency</span>
                                <h2>Best Offered Services</h2>
                                <p>We offer top-quality services for a comfortable home and workplace. From repairs to cleaning, our skilled team ensures efficiency, reliability, and excellence. Trust us for hassle-free solutions!</p>
                            </div>
                        </div>
                        <!-- mark -->
                        <!-- <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Ensuring Masks
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Aenean fermentum sapien ac aliquet gravida. Fusce a ipsum metus. tolad Aenean fermentum sapien ac aliquet gravida. Fusce a ipsum metus. tolad answerala tomadunali Aliquam viverra sagittis felis.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        24/7 Supports
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Aenean fermentum sapien ac aliquet gravida. Fusce a ipsum metus. tolad Aenean fermentum sapien ac aliquet gravida. Fusce a ipsum metus. tolad answerala tomadunali Aliquam viverra sagittis felis.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Sanitising Hands
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Aenean fermentum sapien ac aliquet gravida. Fusce a ipsum metus. tolad Aenean fermentum sapien ac aliquet gravida. Fusce a ipsum metus. tolad answerala tomadunali Aliquam viverra sagittis felis.
                                    </div>
                                </div>
                            </div>
                        </div> -->                
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                    <div class="why-choose-right">
                        <h2 class=" wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">Why Choose Us</h2>
                        <div class="our-archive">
                            <div class="single-archive wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <span class="counter">5,000</span><span>+</span>
                                <h5>Service Providers</h5>
                            </div>
                            <div class="single-archive wow animate fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                                <span class="counter">15,000</span><span>+</span>
                                <h5>Order Served</h5>
                            </div>
                            <div class="single-archive wow animate fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <span class="counter">2,000</span><span>+</span>
                                <h5>5 Star Received</h5>
                            </div>
                            <div class="single-archive wow animate fadeInUp" data-wow-delay="700ms" data-wow-duration="1500ms">
                                <span class="counter">1,800</span><span>+</span>
                                <h5>Friendly Shop</h5>
                            </div>
                        </div>
                        <img src="assets/images/why-choose-dot-shape.png" alt="" class="shape-dot">
                        <img src="assets/images/why-choose-shape.png" alt="" class="shape-triangle">
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- End why-choose section -->

    <!-- Start testimonial section -->
    <!-- <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-12 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="sec-title layout-1">
                        <div class="title-left">
                            <span>Testimonial</span>
                            <h2>our Client Say About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="testimonial-slide">
                            <div class="quote">
                                <i class="fas fa-quote-right"></i>
                            </div>
                            <div class="reviewer">
                                <div class="thumb">
                                    <img src="assets/images/testimonial/testimonial-1.jpg" alt="">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="reviewer-info">
                                    <h4>Johan Martin</h4>
                                    <span>CEO Founder</span>
                                </div>
                            </div>
                            <p>Suspendisse potenti. Suspendisse potenti. Phasellus sedan arcu. Donec commodo lobortis purus quis dictum. Sedijabui aliquamtinl ante tortor, vel dapibus mi tempor sit amet. andi pretium. Nunc tempor condimentum velit. </p>
                        </div>
                    </div>
                    <div class="swiper-slide wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="testimonial-slide">
                            <div class="quote">
                                <i class="fas fa-quote-right"></i>
                            </div>
                            <div class="reviewer">
                                <div class="thumb">
                                    <img src="assets/images/testimonial/testimonial-2.jpg" alt="">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="reviewer-info">
                                    <h4>Angel Kolenia</h4>
                                    <span>CO Founder</span>
                                </div>
                            </div>
                            <p>Suspendisse potenti. Suspendisse potenti. Phasellus sedan arcu. Donec commodo lobortis purus quis dictum. Sedijabui aliquamtinl ante tortor, vel dapibus mi tempor sit amet. andi pretium. Nunc tempor condimentum velit. </p>
                        </div>
                    </div>
                </div>
                <div class="slider-navigations wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="swiper-button-prev-c"><i class="bi bi-arrow-left"></i></div>
                    <div class="swiper-button-next-c"><i class="bi bi-arrow-right"></i></div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End testimonial section -->

    <!-- Start how-it-works section -->
    <!-- <section class="how-it-works sec-m-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-title layout-1">
                        <div class="title-left">
                            <span>Get A Services</span>
                            <h2>How It Works</h2>
                        </div>
                        <div class="title-right">
                            <strong>How It Works</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="how-work-left">
                        <h4>3 Step To Take Our Services</h4>
                        <div class="step">
                            <h4><span>01</span>Select the Service</h4>
                            <p>Aenean fermentum sapien ac aliquet gravida. Fusce a ipsum metusil Vonean hrmentum sapien ac aliquet gravida.</p>
                        </div>
                        <div class="step">
                            <h4><span>02</span>Pick your schedule</h4>
                            <p>Aenean fermentum sapien ac aliquet gravida. Fusce a ipsum metusil Vonean hrmentum sapien ac aliquet gravida.</p>
                        </div>
                        <div class="step">
                            <h4><span>03</span>Place Your Order & Relax</h4>
                            <p>Aenean fermentum sapien ac aliquet gravida. Fusce a ipsum metusil Vonean hrmentum sapien ac aliquet gravida.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="how-work-right">
                        <div class="video-demo">
                            <div class="video-thumb">
                                <img src="assets/images/work-video-thumb.jpg" alt="">
                                <div class="play">
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=0O2aH4XLbto"><i class="bi bi-play-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End how-it-works section -->

    <!-- Start lastest-blog section -->
    <!-- <section class="lastest-blog sec-m">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-title layout-1">
                        <div class="title-left">
                            <span>Blog Post</span>
                            <h2>Our Latest Post</h2>
                        </div>
                        <div class="title-right">
                            <strong>best offered services</strong>
                            <a href="service.html">View All Services<span><i class="bi bi-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="single-blog">
                        <div class="blog-thumb">
                            <a href="blog-details.html"><img src="assets/images/blog/blog-1.jpg" alt=""></a>
                        </div>
                        <div class="blog-inner">
                            <span><i class="bi bi-calendar-week"></i> 6 April, 2022</span>
                            <h4><a href="blog-details.html">Praesent at sem mollis nisijabi elementum lectus.</a></h4>
                            <a href="blog-details.html">Read more<span><i class="bi bi-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="single-blog">
                        <div class="blog-thumb">
                            <a href="blog-details.html"><img src="assets/images/blog/blog-2.jpg" alt=""></a>
                        </div>
                        <div class="blog-inner">
                            <span><i class="bi bi-calendar-week"></i> 6 April, 2022</span>
                            <h4><a href="blog-details.html">Cleaning & Renovation Service By Our Expert Cleaner.</a></h4>
                            <a href="blog-details.html">Read more<span><i class="bi bi-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow animate fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="single-blog">
                        <div class="blog-thumb">
                            <a href="blog-details.html"><img src="assets/images/blog/blog-3.jpg" alt=""></a>
                        </div>
                        <div class="blog-inner">
                            <span><i class="bi bi-calendar-week"></i> 6 April, 2022</span>
                            <h4><a href="blog-details.html">Donec at laoreet augue est ai Etiam nunc erat.</a></h4>
                            <a href="blog-details.html">Read more<span><i class="bi bi-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End lastest-blog section -->

    <!-- Start footer section -->
    <footer class="footer-1">
        <img src="assets/images/footer-left-shape.png" alt="" class="line-shape">
        <div class="container">
            <div class="footer-top">
                <div class="row gy-5">
                    <div class="col-md-6 col-lg-5">
                        <div class="footer-widget with-logo">
                            <div class="footer-logo">
                                <a href="index-2.html"><img src="assets/images/footer-logo.svg" alt=""></a>
                            </div>
                            <p>Aenean fermentum sapien acena gravida. Fusce a ipsum metuslai. Suspendisse oi potenti.</p>
                            <div class="request-btn">
                                <a href="contact.html">Request a Service</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget">
                            <h4>Explore On</h4>
                            <ul class="footer-menu">
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="blog.html">Blog Grid</a></li>
                                <li><a href="#">Help & Support</a></li>
                                <li><a href="service-details.html">Services Details</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of use</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget">
                            <h4>Categories</h4>
                            <ul class="footer-menu">
                                <li><a href="service.html">Electronics</a></li>
                                <li><a href="service.html">Driver Service</a></li>
                                <li><a href="service.html">Electric & Plumbing</a></li>
                                <li><a href="service.html">Gadgets Repair</a></li>
                                <li><a href="service.html">Security Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget">
                            <h4>Contacts</h4>
                            <div class="information">
                                <div class="info">
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="desc">
                                        <a href="tel:01761111456">+880 176 1111 456</a>
                                        <a href="tel:01761111555">+880 176 1111 555</a>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="desc">
                                        <a href="https://demo-egenslab.b-cdn.net/cdn-cgi/l/email-protection#88e1e6eee7c8edf0e9e5f8e4eda6ebe7e5"><span class="__cf_email__" data-cfemail="6b02050d042b0e130a061b070e45080406">[email&#160;protected]</span></a>
                                        <a href="https://demo-egenslab.b-cdn.net/cdn-cgi/l/email-protection#7a13141c153a090f0a0a15080e54191517"><span class="__cf_email__" data-cfemail="88e1e6eee7c8fbfdf8f8e7fafca6ebe7e5">[email&#160;protected]</span></a>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="desc">
                                        <p>168/170, Avenue 01, Mirpur DOHS, Bangladesh</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="copy-right">
                            <span>Copyright 2022 Serve | Design By <a href="https://www.egenslab.com/">Egens Lab</a></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-social-media">
                            <ul>
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
    </footer>
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
</html>
