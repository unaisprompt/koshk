    <!-- Start Footer Area -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <a href="{{url('/')}}" class="logo">
                            <img src="{{asset('assets/img/fandfw.png')}}" alt="logo">
                        </a>
                        <ul class="footer-contact-info">
                        
                            <li><span>Contact Us:</span> <a style="color:#ffffff" href="tel:971 58 573 0820">+971 58 573 0820</a>
                            </li>
                            <li><span>Email:</span> <a style="color:#ffffff" href="mailto:info@feathersandfins.co">info@feathersandfins.co</a>
                            </li>
                            <li style="color:#ffffff"><span>Address:</span> Feathers and fins Dubai karama wasl hub building shop number 10</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget pl-4">
                        <h3>Information</h3>
                        <ul class="custom-links">
                            <li><a href="{{url('about')}}">About Us</a></li>
                            <li><a href="{{url('terms&conditions')}}">Terms & Conditions</a></li>
                            <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                            <li><a href="{{url('return-policy')}}">Refund Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Customer service</h3>
                        <ul class="custom-links">
                            <li><a href="{{url('my-account')}}">My Account</a></li>
                            {{-- <li><a href="faq.html">FAQ's</a></li> --}}
                            <li><a href="{{url('order-history')}}">Order History</a></li>
                            <li><a href="{{url('wishlist')}}">Wishlist</a></li>
                            <li><a href="{{url('order-history')}}">Delivery Information</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Subscribe to our newsletter!</h3>
                        <p>Sign up for our mailing list to get the latest updates news & offers.</p>
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="input-newsletter" id="email" placeholder="Your email address"
                                name="EMAIL" required autocomplete="off">
                            <button type="submit" onclick="newsLetter()"><i class='bx bx-paper-plane'></i></button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                        <!-- <div class="payment-types">
                            <div class="d-flex align-items-center">
                                <span>We accept:</span>
                                <ul>
                                    <li><img src="assets/img/payment/visa.png" alt="visa"></li>
                                    <li><img src="assets/img/payment/mc.png" alt="master-card"></li>
                                    <li><img src="assets/img/payment/paypal.png" alt="paypal"></li>
                                    <li><img src="assets/img/payment/ae.png" alt="american-express">
                                    </li>
                                    <li><img src="assets/img/payment/discover.png" alt="discover"></li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <p>Copyright {{date("Y")}} <span>Feathers and Fins</span></p>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->

    <div class="go-top"><i class='bx bx-upvote'></i></div>

   
  