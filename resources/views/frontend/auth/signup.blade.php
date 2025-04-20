<!doctype html>
<html lang="en">


<!-- Mirrored from demo-egenslab.b-cdn.net/html/serve/preview/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Mar 2025 02:37:02 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>signup</title>
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
    <!-- /resources/views/post/create.blade.php -->

<h1>Create Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Create Post Form -->

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
    <header class="header-2 sticky_top">
        <!-- <div class="header-logo">
            <a href="index-2.html"><img src="{{ asset('frontend/assets/images/home2/logo.svg')}}" alt=""></a>
        </div> -->
        <div class="main-menu">
            <nav class="main-nav">
                <div class="mobile-menu-logo">
                    <a href="index-2.html"><img src="{{ asset('frontend/assets/images/home2/logo.svg')}}" alt=""></a>
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
                        <!-- <i class="bi bi-chevron-down"></i>
                        <ul class="sub-menu">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="sign-up.html">Sign Up</a></li>
                            <li><a href="error.html">Error 404</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="account.html">My Account</a></li>
                        </ul> -->
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
                <!-- <div class="my-account">
                    <a href="account.html">My Account</a>
                </div> -->
            </nav>
        </div>
        <!-- <div class="header-right">
            <div class="phone">
                <div class="icon">
                    <img src="{{ asset('frontend/assets/images/icons/phone.svg')}}" alt="">
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

    <!-- Start breadcrumbs section -->
    <!-- <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <h2>Sign Up</h2>
                        <span><a href="index-2.html">Home</a><i class="bi bi-chevron-right"></i>Sign Up</span>
                        <div class="arrow-down">
                            <a href="#down"><i class="bi bi-chevron-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End breadcrumbs section -->

    <!-- Start login-area section -->
    <section id="down" class="login-area sec-p">
        <div class="container">
            <div class="login-form">
                <h3>Sign Up</h3>
                <span>Do you already have an account? <a href="login" class="text-danger">Log in here</a></span>
                <form action="{{ route('login.submit')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="fname">First Name*
                                <input type="text" name="fname" id="fname" placeholder="First Name" required>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label for="lname">Last Name*
                                <input type="text" name="lname" id="lname" placeholder="last Name" required>
                            </label>
                        </div>
                        <div class="col-12">
                            <label for="email">Email*
                                <input type="email" name="email" id="email" placeholder="Your Email Here" required>
                            </label>
                            <label for="password">Password*
                                <i class="bi bi-eye-slash" id="togglePassword"></i>
                                <input type="password" name="password" id="password" placeholder="Type Your Password" required>
                            </label>
                        </div>
                    </div>
                    <!-- <div class="terms-forgot">
                        <p><input type="checkbox" name="agree">I agree to the <a href="#">Terms & Policy</a></p>
                    </div> -->
                    <input type="submit" value="Create Account">
                </form>
                <!-- <div class="other-signup">
                    <h4>or Sign up WITH</h4>
                    <div class="others-account">
                        <a href="#" class="google"><i class="fab fa-google"></i>Signup with google</a>
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Sign up with facebook</a>
                    </div>
                </div> -->
                <!-- <p>By clicking the "Sign up" button, you create a Cobiro account, and you agree to Cobiro's <a href="#">Terms & Conditions</a> & <a href="#">Privacy Policy.</a></p> -->
            </div>
        </div>
    </section>
    <!-- End login-area section -->

    <!-- Start footer section -->
    <!-- <footer class="footer-2">
        <img src="{{ asset('frontend/assets/images/footer-left-shape.png')}}" alt="" class="line-shape">
        <div class="container">
            <div class="footer-top">
                <div class="row gy-5">
                    <div class="col-md-6 col-lg-5">
                        <div class="footer-widget with-logo">
                            <div class="footer-logo">
                                <a href="index-2.html"><img src="{{ asset('frontend/assets/images/footer-logo.svg')}}" alt=""></a>
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
                                        <a href="https://demo-egenslab.b-cdn.net/cdn-cgi/l/email-protection#f891969e97b89d80999588949dd69b9795"><span class="__cf_email__" data-cfemail="7c15121a133c19041d110c1019521f1311">[email&#160;protected]</span></a>
                                        <a href="https://demo-egenslab.b-cdn.net/cdn-cgi/l/email-protection#0e676068614e7d7b7e7e617c7a206d6163"><span class="__cf_email__" data-cfemail="9af3f4fcf5dae9efeaeaf5e8eeb4f9f5f7">[email&#160;protected]</span></a>
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
    </footer> -->
    <!-- End footer section -->

    <!--  Main jQuery  -->
    <script data-cfasync="false" src="{{ asset('frontend/../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>
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


<!-- Mirrored from demo-egenslab.b-cdn.net/html/serve/preview/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Mar 2025 02:37:02 GMT -->
</html>