<!doctype html>
<html lang="en">



<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SERVE - On Demand Services HTML Template</title>
    <link rel="icon" href="{{ asset('assets/images/faviconS.png')}}" type="image/gif" sizes="20x20">

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
        <div class="header-logo">
            <a href="index-2.html"><img src="{{ asset('assets/images/logo.svg')}}" alt=""></a>
        </div>
        <div class="main-menu">
            <nav class="main-nav">
                <div class="mobile-menu-logo">
                    <a href="index-2.html"><img src="{{ asset('assets/images/logo.svg')}}" alt=""></a>
                    <div class="remove">
                        <i class="bi bi-plus-lg"></i>
                    </div>
                </div>
                <ul>
                    <li class="has-child active">
                        <a href="index-2.html">Home</a>
                        <i class="bi bi-chevron-down"></i>
                        <ul class="sub-menu">
                            <li><a href="index-2.html">Home 01</a></li>
                            <li><a href="index2.html">Home 02</a></li>
                            <li><a href="index3.html">Home 03</a></li>
                        </ul>
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
                    <li class="has-child">
                        <a href="blog.html">Blogs</a>
                        <i class="bi bi-chevron-down"></i>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                            <li><a href="blog-standard.html">Blog Standard</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="has-child">
                        <a href="#">Pages</a>
                        <i class="bi bi-chevron-down"></i>
                        <ul class="sub-menu">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="sign-up.html">Sign Up</a></li>
                            <li><a href="error.html">Error 404</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="account.html">My Account</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
                <div class="my-account">
                    <a href="account.html">My Account</a>
                </div>
            </nav>
        </div>
        <div class="header-right">
            <div class="phone">
                <div class="icon">
                    <img src="{{ asset('assets/images/icons/phone.svg')}}" alt="">
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
        </div>
    </header>
    <!-- End header section -->

    <!-- Start hero-area section -->
    <!-- <section class="hero-area">
        <div class="container-fluid">
            <div class="hero-wrapper">
                <div class="hero-content wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <span>Wellcome Our Service Sale</span>
                    <h1>Nonstop Services Life Better.</h1>
                    <p>Aenean fermentum sapien ac aliquet gravida. Fusce a ipsum metus. answerala and
                        Suspendisse potenti. Nullam ac lorem ex. Ut feugiat maximus ante, vel gravida exel
                        volutpat at.</p>
                    <div class="find-service">
                        <div class="location-search">
                            <div class="location-btn">
                                <i><img src="{{ asset('assets/images/icons/location.svg')}}" alt=""></i>
                                <select class="loc-select">
                                    <option selected="">Dhaka</option>
                                    <option value="barisal">Barisal</option>
                                    <option value="khulna">Khulna</option>
                                    <option value="Dhaka">Rangpur</option>
                                    <option value="barisal">Sylhet</option>
                                    <option value="khulna">Rajshahi</option>
                                </select>
                            </div>
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
                                <li><a href="service.html">Shifting</a></li>
                                <li><a href="service.html">AC Repair</a></li>
                                <li><a href="service.html">WallPainting</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hero-banner wow animate fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <img src="{{ asset('assets/images/home-1/hero-section-right-img.png')}}" alt="" class="banner">
                </div>
            </div>
        </div>
        <div class="scroll-down">
            <a href="#category">Scroll Down<span><i class="bi bi-arrow-right"></i></span></a>
        </div>
    </section> -->
    <!-- End hero-area section -->

    <!-- Start creative-services section -->
    <!-- <section id="category" class="creative-services sec-p-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-title layout-1 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="title-left">
                            <span>Category</span>
                            <h2>See Our All Creative Services</h2>
                        </div>
                        <div class="title-right">
                            <strong>Category</strong>
                            <div class="slider-navigations">
                                <div class="swiper-button-prev-c"><i class="bi bi-arrow-left"></i></div>
                                <div class="swiper-button-next-c"><i class="bi bi-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper creative-service-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="creative-service wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/cre-service/cre-service-1.jpg')}}" alt="">
                                <div class="cre-service-inner">
                                    <strong>100</strong>
                                    <span>Items</span>
                                </div>
                            </div>
                            <h6><a href="service-details.html">House Sift</a></h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="creative-service wow animate fadeInDown" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/cre-service/cre-service-2.jpg')}}" alt="">
                                <div class="cre-service-inner">
                                    <strong>80</strong>
                                    <span>Items</span>
                                </div>
                            </div>
                            <h6><a href="service-details.html">Driver</a></h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="creative-service wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/cre-service/cre-service-3.jpg')}}" alt="">
                                <div class="cre-service-inner">
                                    <strong>200+</strong>
                                    <span>Items</span>
                                </div>
                            </div>
                            <h6><a href="service-details.html">Security</a></h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="creative-service wow animate fadeInDown" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/cre-service/cre-service-4.jpg')}}" alt="">
                                <div class="cre-service-inner">
                                    <strong>50</strong>
                                    <span>Items</span>
                                </div>
                            </div>
                            <h6><a href="service-details.html">Gadgect Repaire</a></h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="creative-service wow animate fadeInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/cre-service/cre-service-5.jpg')}}" alt="">
                                <div class="cre-service-inner">
                                    <strong>75</strong>
                                    <span>Items</span>
                                </div>
                            </div>
                            <h6><a href="service-details.html">Car & Care</a></h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="creative-service wow animate fadeInDown" data-wow-delay="700ms" data-wow-duration="1500ms">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/cre-service/cre-service-6.jpg')}}" alt="">
                                <div class="cre-service-inner">
                                    <strong>85</strong>
                                    <span>Items</span>
                                </div>
                            </div>
                            <h6><a href="service-details.html">Home Clean</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
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
                            <a href="service-details.html"><img src="{{ asset('assets/images/services/service-1.jpg')}}" alt=""></a>
                            <div class="tag">
                                <a href="service.html">Saloon</a>
                            </div>
                        </div>
                        <div class="single-inner">
                            <div class="author-info">
                                <div class="author-thumb">
                                    <img src="{{ asset('assets/images/services/service-author-1.png')}}" alt="">
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
                            <a href="service-details.html"><img src="{{ asset('assets/images/services/service-2.jpg')}}" alt=""></a>
                            <div class="tag">
                                <a href="service.html">Cleaning</a>
                            </div>
                        </div>
                        <div class="single-inner">
                            <div class="author-info">
                                <div class="author-thumb">
                                    <img src="{{ asset('assets/images/services/service-author-2.png')}}" alt="">
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
                            <a href="service-details.html"><img src="{{ asset('assets/images/services/service-3.jpg')}}" alt=""></a>
                            <div class="tag">
                                <a href="service.html">Ac Repair</a>
                            </div>
                        </div>
                        <div class="single-inner">
                            <div class="author-info">
                                <div class="author-thumb">
                                    <img src="{{ asset('assets/images/services/service-author-3.png')}}" alt="">
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
                            <a href="service-details.html"><img src="{{ asset('assets/images/services/service-4.jpg')}}" alt=""></a>
                            <div class="tag">
                                <a href="service.html">Spa & Beuty</a>
                            </div>
                        </div>
                        <div class="single-inner">
                            <div class="author-info">
                                <div class="author-thumb">
                                    <img src="{{ asset('assets/images/services/service-author-4.png')}}" alt="">
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
                            <a href="service-details.html"><img src="{{ asset('assets/images/services/service-5.jpg')}}" alt=""></a>
                            <div class="tag">
                                <a href="service.html">House Sift</a>
                            </div>
                        </div>
                        <div class="single-inner">
                            <div class="author-info">
                                <div class="author-thumb">
                                    <img src="{{ asset('assets/images/services/service-author-5.png')}}" alt="">
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
                            <a href="service-details.html"><img src="{{ asset('assets/images/services/service-6.jpg')}}" alt=""></a>
                            <div class="tag">
                                <a href="service.html">Electrician</a>
                            </div>
                        </div>
                        <div class="single-inner">
                            <div class="author-info">
                                <div class="author-thumb">
                                    <img src="{{ asset('assets/images/services/service-author-6.png')}}" alt="">
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
                                <img src="{{ asset('assets/images/shop/shop-1.png')}}" alt="">
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
                                <img src="{{ asset('assets/images/shop/shop-2.png')}}" alt="">
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
                                <img src="{{ asset('assets/images/shop/shop-3.png')}}" alt="">
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
                                <img src="{{ asset('assets/images/shop/shop-4.png')}}" alt="">
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
    <section class="offer-services sec-m-top">
        <div class="container">
            <div class="row">
                <div class="col-12 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="sec-title layout-1">
                        <div class="title-left">
                           
                            <h2>Best Offered Services in {{ isset($products) ?  $products[0]->category->name : "" }}</h2>
                        </div>
                        <div class="title-right">
                            <strong>For Your Home</strong>
                            <a href="{{ route('home')}}">View All Services<span><i class="bi bi-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @forelse($products as $product)
                <div class="col-md-6 col-lg-4 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="single-service">
                        <div class="thumb">
                            <a href="service-details.html"><img src='{{ asset("uploads/$product->image")}}' alt=""></a>
                            <div class="tag">
                                <a href="service.html">{{ $product->price->discount ? $product->price->discount.'% ' : ''}}OFF</a>
                            </div>
                        </div>
                        <div class="single-inner">
                            <div class="author-info">
                                <div class="wish">
                                    <a href="account.html"><i class="bi bi-suit-heart"></i></a>
                                </div>
                                
                                <div class="author-content">
                                    <span>{{ $product->name ?? ''}}</span>
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
                            <h4><a href="service-details.html">{{ $product->description ?? ''}}</a></h4>
                            <div class="started">
                                <span>Started At : <strong><small>$</small>{{ $product->price->price ?? ''}}</strong></span>
                            </div>
                        </div>
                    </div>
                </div>

                @empty
                @endforelse                
               
            </div>
        </div>
    </section>
    <br>
    <!-- End offer-services section -->

   
   
 
  
    <!-- Start footer section -->
    @include('frontend.includes.footer')
    <!-- End footer section -->

    <!--  Main jQuery  -->
    <script data-cfasync="false" src="{{ asset('frontend/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>
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
    <script src="{{ asset('frontend/assets/js/anime.min.js')}}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('frontend/assets/js/custom.js')}}"></script>

</body>


<!-- Mirrored from demo-egenslab.b-cdn.net/html/serve/preview/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Mar 2025 02:36:41 GMT -->
</html>
