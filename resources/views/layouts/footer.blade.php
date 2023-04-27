    <!-- Footer -->
    @php
    $categoryList = categoryList();
    $category = collect($categoryList)->first(function ($value, $key) {
        return $value->id == request()->category_id;
    });
@endphp
    <footer class="footer">
        <div class="news-letter-form">
            <div class="container">
                <div class="row">
                    <div class="newsletter-wrap">
                        <div class="col-xs-12">
                            <div class="newsletter">
                                <form>
                                    <div>
                                        <h4><span>Sign up to Newsletter</span></h4>
                                        <input type="text" placeholder="Enter your email address" class="input-text"
                                            title="Sign up for our newsletter" id="email_news" name="email">
                                        <button type="button" onclick="newsLetter()" class="subscribe"
                                            title="Subscribe" type="submit"><span>Subscribe</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--newsletter-->

        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-column pull-left">
                            <h4>Shopping Guide</h4>
                            <ul class="links">
                                <li><a href="#" title="How to buy">Blog</a></li>
                                <li><a href="#" title="FAQs">FAQs</a></li>
                                <li><a href="#" title="Payment">Payment</a></li>
                                <li><a href="#" title="Shipment">Shipment</a></li>
                                <li><a href="#" title="Return policy">Return policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-column pull-left">
                            <h4>My profile</h4>
                            <ul class="links">
                                @if(!empty(session()->get('token')))
                                <li><a href="{{url('my-account')}}" title="Your Account">Your Account</a></li>
                                <li><a href="{{url('address-list')}}" title="Addresses">Addresses</a></li>
                                <li><a href="{{url('wishlist')}}" title="Wishlist">Wishlist</a></li>
                                <li><a href="{{url('order-history')}}" title="Orders History">Orders History</a></li>
                                @else
                                <li><a href="#" title="Your Account">Your Account</a></li>
                                <li><a href="#" title="Information">Information</a></li>
                                <li><a href="#" title="Addresses">Addresses</a></li>
                                <li><a href="#" title="Addresses">Discount</a></li>
                                <li><a href="#" title="Orders History">Orders History</a></li>
                                <li><a href="#" title="Order Tracking">Order Tracking</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-column pull-left">
                            <h4>Information</h4>
                            <ul class="links">
                                <li><a href="#" title="Site Map">Site Map</a></li>
                                <li><a href="#" title="Search Terms">Search Terms</a></li>
                                <li><a href="#" title="Advanced Search">Advanced Search</a></li>
                                <li><a href="#l" title="About Us">About Us</a></li>
                                <li><a href="#" title="Contact Us">Contact Us</a></li>
                                <li><a href="#" title="Suppliers">Suppliers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h4>Contact Us</h4>
                        <div class="contacts-info">
                            <address>
                                <i class="add-icon"></i>{{ CmsPage()['settings']['address'] }}
                            </address>
                            <div class="phone-footer"><i class="phone-icon"></i>+971
                                {{ CmsPage()['settings']['contact'] }}</div>
                            <div class="email-footer"><i class="email-icon"></i><a
                                    href="mailto:{{ CmsPage()['settings']['email'] }}">{{ CmsPage()['settings']['email'] }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="social">
                        <ul>
                            @foreach (CmsPage()['social_media_links'] as $social_media_link)
                                <style>
                                    .social .{{ $social_media_link['name'] }} a:before {
                                        content: "\{{ $social_media_link['unicode'] }}";
                                        font-family: FontAwesome;
                                    }

                                    .social .{{ $social_media_link['name'] }} a {
                                        background: {{ $social_media_link['color'] }};
                                        font-size: 18px;
                                        border-radius: 999px;
                                        line-height: 35px;
                                        display: inline-block;
                                        width: 35px;
                                        height: 35px;
                                        color: #fff;
                                        text-align: center;
                                        padding: 0;
                                    }

                                    .social .{{ $social_media_link['name'] }} a:hover {
                                        background: {{ $social_media_link['color'] }};
                                    }
                                </style>
                                <li class="{{ $social_media_link['name'] }}"><a
                                        href="{{ $social_media_link['link'] }}"></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 coppyright"> &copy; 2023 Gift city. all rights reserved. </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    </div>
    <!-- mobile menu -->
    <div id="mobile-menu">
        <ul>
            <li>
                <div class="mm-search">
                    <form id="search1" action="{{ url('products') }}" method="get">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
                            </div>
                            <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term"
                                id="srch-term">
                        </div>
                    </form>
                </div>
            </li>
            <li> <a href="{{url('/')}}">Home</a>
            </li>
            <li> <a href="#">{{ $category ? $category->category_name : 'Categories' }}</a>
                <ul>
                    <li> <a href="#" class="">Laptop</a>
                        <ul>
                             @foreach ($categoryList as $category)
                              <li role="presentation"><a
                                                role="menuitem @if ($category->id == request()->category_id) active @endif"
                                                tabindex="-1"
                                                href="{{ url('products?category_id=' . $category->id) }}">-
                                                {{ $category->category_name }}</a></li>
                                    @endforeach
                        </ul>
                    </li>
                  
                </ul>
            </li>
           
        </ul>
        <div class="top-links">
            <ul class="links">
                @if(!empty(session()->get('token')))
                                <li><a href="{{url('my-account')}}" title="Your Account">Your Account</a></li>
                                <li><a href="{{url('address-list')}}" title="Addresses">Addresses</a></li>
                                <li><a href="{{url('wishlist')}}" title="Wishlist">Wishlist</a></li>
                                <li><a href="{{url('order-history')}}" title="Orders History">Orders History</a></li>
                                @else
                                <li><a href="#" title="Your Account">Your Account</a></li>
                                <li><a href="#" title="Information">Information</a></li>
                                <li><a href="#" title="Addresses">Addresses</a></li>
                                <li><a href="#" title="Addresses">Discount</a></li>
                                <li><a href="#" title="Orders History">Orders History</a></li>
                                <li><a href="#" title="Order Tracking">Order Tracking</a></li>
                                @endif
            </ul>
        </div>
    </div>

    <header class="nav-down css-h5j">
        <ul>
            <li><a class="footer-menu-active" href="{{url('/')}}" tabindex="1"><i class="fa fa-home"></i>
                    <br />Home</a></li>
            <li><a href="{{url('products')}}" tabindex="2"><i class="fa fa-list-alt"></i> <br />products</a></li>
            @if (session()->get('token'))
            <li><a href="{{url('wishlist')}}" tabindex="3" style="color: #edb22b;"><i class="fa fa-heart"></i><br />wishlist</a></li>
             @else
            <li><a href="#" tabindex="3" style="color: #edb22b;" data-toggle="modal" data-target="#myModalsignin"><i class="fa fa-heart"></i><br />wishlist</a></li>
             @endif
           @if (session()->get('token'))
            <li><a href="{{ url('my-account') }}" tabindex="4"><i class="fa fa-user"></i> <br />My Account</a></li>
            @else
             <li><a href="#" tabindex="4"  data-toggle="modal" data-target="#myModalsignin"><i class="fa fa-user"></i> <br />My Account</a></li>
             @endif
             @if (session()->get('token'))
            <li><a href="{{url('cart')}}" tabindex="5" ><i class="fa fa-shopping-cart"></i> <br />Cart</a></li>
            @else
             <li><a href="#" tabindex="4"  data-toggle="modal" data-target="#myModalsignin"><i class="fa fa-shopping-cart"></i> <br />Cart</a></li>
             @endif
        </ul>
    </header>
