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
                        <a href="#">Pages</a>
                        <i class="bi bi-chevron-down"></i>
                        <ul class="sub-menu">
                            <li><a href="{{ route('frontend.login') }}">Login</a></li>
                            <li><a href="{{ route('frontend.signup') }}">Sign Up</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="{{ route('login.submit')}}" class="bg-danger" onclick="confirmLogout()">Logout</a></li>

                    @if(auth()->check())
                    <li>Hello, {{ auth()->user()->first_name}}</li>
                    @endif
                </ul>
                
            </nav>
        </div>
       
    </header>
    <!-- End header section -->

    <!-- Start hero-area section -->
    <section class="hero-area">
        <div class="container-fluid">
            <div class="hero-wrapper">
                <div class="hero-content wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <span>Wellcome Our {{ $globalSettings->get('name') }}</span>
                    <h1>{{ $globalSettings->get('hero_text')}}</h1>
                    <p>{{ $globalSettings->get('agency_description')}}</p>
                    <div class="find-service">
                        <div class="location-search">
                           
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
                                <li><a href="service.html"></a></li>
                                <li><a href="service.html"></a></li>
                                <li><a href="service.html"></a></li>
                                <li><a href="service.html"></a></li>
                                <li><a href="service.html"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hero-banner wow animate fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <img src="{{ asset('frontend/assets/images/home-1/hero-section-right-img.png')}}" alt="" class="banner">
                </div>
            </div>
        </div>
        
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
                            <h2>{{ $globalSettings->get('category')}}</h2>
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
                                <img src="{{ asset('frontend/assets/images/cre-service/cre-service-1.jpg')}}" alt="">
                              
                            </div>
                            <h6><a href="service-details.html">House Sift</a></h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="creative-service wow animate fadeInDown" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="thumb">
                                <img src="{{asset('frontend/assets/images/cre-service/cre-service-2.jpg')}}" alt="">
                              
                            </div>
                            <h6><a href="service-details.html">Driver</a></h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="creative-service wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="thumb">
                                <img src="{{ asset('frontend/assets/images/cre-service/cre-service-3.jpg')}}" alt="">
                                
                            </div>
                            <h6><a href="service-details.html">Security</a></h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="creative-service wow animate fadeInDown" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="thumb">
                                <img src="{{ asset('frontend/assets/images/cre-service/cre-service-4.jpg')}}" alt="">
                                
                            </div>
                            <h6><a href="service-details.html">Gadgect Repaire</a></h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="creative-service wow animate fadeInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="thumb">
                                <img src="{{ asset('frontend/assets/images/cre-service/cre-service-5.jpg')}}" alt="">
                               
                            </div>
                            <h6><a href="service-details.html">Car & Care</a></h6>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="creative-service wow animate fadeInDown" data-wow-delay="700ms" data-wow-duration="1500ms">
                            <div class="thumb">
                                <img src="{{ asset('frontend/assets/images/cre-service/cre-service-6.jpg')}}" alt="">
                               
                            </div>
                            <h6><a href="service-details.html">Home Clean</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End creative-services section -->

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
                                     
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End why-choose section -->

    

    

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
                            <p>{{ $globalSettings->get('footer_text')}}</p>
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
                                        <a href="tel:01761111456">{{ $globalSettings->get('phone')}}</a>
                                        <a href="tel:01761111555">{{ $globalSettings->get('phone')}}</a>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="desc">
                                        <a href="https://demo-egenslab.b-cdn.net/cdn-cgi/l/email-protection#88e1e6eee7c8edf0e9e5f8e4eda6ebe7e5"><span class="__cf_email__" data-cfemail="6b02050d042b0e130a061b070e45080406">{{ $globalSettings->get('email')}}</span></a>
                                        <a href="https://demo-egenslab.b-cdn.net/cdn-cgi/l/email-protection#7a13141c153a090f0a0a15080e54191517"><span class="__cf_email__" data-cfemail="88e1e6eee7c8fbfdf8f8e7fafca6ebe7e5">{{ $globalSettings->get('email')}}</span></a>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="desc">
                                        <p>{{ $globalSettings->get('address')}}</p>
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
                            <span>{{ $globalSettings->get('copyright')}} | Design By <a href="https://www.egenslab.com/">Egens Lab</a></span>
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
