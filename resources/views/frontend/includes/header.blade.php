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
                        <a href="{{ route('home')}}">Home</a>
                       
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
                    @if(auth()->check())
                    <li><a href="{{ route('login.submit')}}" onclick="confirmLogout()">Logout</a></li>
                    <li>Hello, {{ auth()->user()->first_name}}</li>
                    @endif
                </ul>
                
            </nav>
        </div>
       
    </header>