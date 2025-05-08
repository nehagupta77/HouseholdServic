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
                                 
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="desc">
                                        <a href="#">{{ $globalSettings->get('email')}}</span></a>

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
                            <span>{{ $globalSettings->get('copyright')}} | Design By <a href="https://www.egenslab.com/">{{ $globalSettings->get('copyright')}}</a></span>
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