<!doctype html>
<html lang="en">



<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category_details</title>
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

    <!-- Start header section -->
   @include('frontend.includes.header')
    <!-- End header section -->
    <div class="container mt-3" id="notification-area"></div>
   
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
                            <a href="{{route('product.detail', $product->id)}}"><img src='{{ asset("uploads/$product->image")}}' alt=""></a>
                            <div class="tag">
                                <a href="{{route('product.detail', $product->id)}}">{{ $product->price->discount ? $product->price->discount.'% ' : ''}}OFF</a>
                            </div>
                        </div>
                        <div class="single-inner">
                            <div class="author-info">
                                <div class="wish">
                                    <a href="javascript:void(0);" class="wishlist-btn" data-id="{{ $product->id }}" onclick="toggleWishlist(this)"><i class="bi {{ $product->in_wishlist ? 'bi-suit-heart-fill text-danger' : 'bi-suit-heart' }}"></i></a>
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
                            <h4><a href="{{ route('product.detail',$product->id)}}">{!! $product->description ?? '' !!}</a></h4>
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

    <script>
        function toggleWishlist(element){
                    const productId = element.getAttribute('data-id');
                    $.ajax({
                    url: `/wishlist/add/${productId}`,
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                         showNotification('success', response.message);
                         const icon = element.querySelector('i');
            
                        if (response.in_wishlist) {
                            icon.classList.remove('bi-suit-heart');
                            icon.classList.add('bi-suit-heart-fill', 'text-danger');
                        } else {
                            icon.classList.remove('bi-suit-heart-fill', 'text-danger');
                            icon.classList.add('bi-suit-heart');
                        }
                    },
                    error: function(xhr, status, error) {
                        if (xhr.status === 401) {
                        showNotification('danger', 'Please login first to add items to your wishlist.');
                        } else {
                            showNotification('danger', 'Something went wrong. Please try again.');
                            console.error('Error:', xhr);
                        }
                    }
                });
        }

        function showNotification(type, message) {
        const notificationHTML = `
            <div class="alert alert-${type} alert-dismissible fade show" role="alert">
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
        const area = document.getElementById('notification-area');
        area.innerHTML = notificationHTML;

        // Auto-dismiss after 4 seconds
        setTimeout(() => {
            const alert = area.querySelector('.alert');
            if (alert) {
                alert.classList.remove('show');
                alert.classList.add('hide');
            }
        }, 4000);
    }
    </script>

</body>



</html>
