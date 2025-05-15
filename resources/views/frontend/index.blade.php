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
   
    <!-- Start header section -->
    @include('frontend.includes.header')
    <!-- End header section -->

    <!-- Start hero-area section -->
    <section class="hero-area">
        <div class="container-fluid">
            <div class="hero-wrapper">
                <div class="hero-content wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <span>Wellcome To our {{ $globalSettings->get('name') }}</span>
                    <h1>{{ $globalSettings->get('hero_text')}}</h1>
                    <p>{{ $globalSettings->get('agency_description')}}</p>
                    <div class="find-service">
                        <div class="location-search">
                           
                            <div class="location-form">
                                <form action="{{ route('category.search')}}" method="get">
                                    <input type="text" name="search" placeholder="Find Your Services Here">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="suggest">
                            <span>Suggest For You: {{ (isset($products) && isset($products[0]->category->name)) ?  $products[0]->category->name : "" }}</span>
                            <ul class="suggest-list">
                                
                            @forelse( $relatedCategories as $related )
                            <li><a href="{{ route('category.detail', $related->id) }}"> {{ucwords( $related ->name ?? '')}} </a></li>
                            @empty

                            @endforelse
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
                    @forelse($categories as $category)
                    <div class="swiper-slide">
                        <div class="creative-service wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="thumb">
                            <div class="card" style="width: 12rem;">
                                
                                <img src="{{ asset('uploads/' . $category->image) }}" class="card-img-top" alt="Category Image" style="height: 100px; width: 100px; object-fit: cover; margin: auto; padding-top: 10px;">
                                <div class="card-body text-center">
                                    <h5 class="card-title" style="height:50px; overflow:hidden">{{ $category->name }}</h5>
                                    <p class="card-text" style="height:50px; overflow:hidden">{{strip_tags ($category->description) }}</p>
                                    <!-- Add buttons or links if needed -->
                                    <!-- <a href="{{ route('category.detail', $category->id)}}" class="btn btn-primary btn-sm">View</a> -->
                                </div>
                            </div>
                                <!-- <div class="cre-service-inner">
                                    <strong>100</strong>
                                    <span>Items</span>
                                </div> -->
                            </div>
                            <h6><a href="{{ route('category.detail', $category->id)}}">{{ $category->name ?? ''}}</a></h6>
                        </div>
                    </div>
                    @empty

                    @endforelse
                
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
                                <p>{{ $globalSettings->get('trust_agency')}}</p>
                            </div>
                        </div>
                                     
                    </div>
                </div>
                <!-- <div class="col-lBeaut">
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
</html>
