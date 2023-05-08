<!-- Header -->
@php
    $categoryList = categoryList();
    $category = collect($categoryList)->first(function ($value, $key) {
        return $value->id == request()->category_id;
    });
@endphp
<header>
    <div class="top-nav">
        <div class="container">
            <div class="header-strip-wrap">


                <div class="delivery-section ">

                    <span class="icons" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 0 0-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02c-.37-1.11-.56-2.3-.56-3.53c0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99C3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z" />
                        </svg>
                    </Span>

                    <!-- <img src="https://api.iconify.design/carbon:delivery.svg" alt="Fast &amp; Free Delivery" class="delivery-icon"> -->
                    <span class="delivery-content">{!! CommonData()->top_header_phone !!} </span>

                </div>




                <div class="delivery-section delivery-time">

                    <span class="icons" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8s8 3.58 8 8s-3.58 8-8 8zm.5-13H11v6l5.25 3.15l.75-1.23l-4.5-2.67z" />
                        </svg>
                    </Span>

                    <!-- <img src="https://api.iconify.design/carbon:delivery.svg" alt="Fast &amp; Free Delivery" class="delivery-icon"> -->

                    <span class="delivery-content" data-container="body" data-toggle="popover" data-trigger="hover"
                        data-placement="bottom"
                        data-content="Vivamus
              sagittis lacus vel augue laoreet rutrum faucibus.">
                        {!! CommonData()->top_header_clock !!} </span>


                </div>

                <div class="delivery-section">

                    <span class="icons" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <path fill="currentColor" d="M4 16h12v2H4zm-2-5h10v2H2z" />
                            <path fill="currentColor"
                                d="m29.919 16.606l-3-7A.999.999 0 0 0 26 9h-3V7a1 1 0 0 0-1-1H6v2h15v12.556A3.992 3.992 0 0 0 19.142 23h-6.284a4 4 0 1 0 0 2h6.284a3.98 3.98 0 0 0 7.716 0H29a1 1 0 0 0 1-1v-7a.997.997 0 0 0-.081-.394ZM9 26a2 2 0 1 1 2-2a2.002 2.002 0 0 1-2 2Zm14-15h2.34l2.144 5H23Zm0 15a2 2 0 1 1 2-2a2.002 2.002 0 0 1-2 2Zm5-3h-1.142A3.995 3.995 0 0 0 23 20v-2h5Z" />
                        </svg>
                    </Span>

                    <!-- <img src="https://api.iconify.design/carbon:delivery.svg" alt="Fast &amp; Free Delivery" class="delivery-icon"> -->
                    <span class="delivery-content"> {!! CommonData()->top_header3 !!}</span>

                </div>

                <div class="delivery-section">

                    <span class="icons" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 20 20">
                            <path fill="currentColor"
                                d="M10 2.5a2.5 2.5 0 0 0-4 2V6H5a1 1 0 0 0-1 1v8a3 3 0 0 0 3 3h6.5a2.5 2.5 0 0 0 2.5-2.5V7a1 1 0 0 0-1-1h-1V4.5a2.5 2.5 0 0 0-4-2Zm-3 2a1.5 1.5 0 1 1 3 0V6H7V4.5Zm3.667-1.248A1.5 1.5 0 0 1 13 4.5V6h-2V4.5c0-.454-.121-.88-.333-1.248ZM7 17a2 2 0 0 1-2-2V7h6v8.5c0 .563.186 1.082.5 1.5H7Zm8-1.5a1.5 1.5 0 0 1-3 0V7h3v8.5Z" />
                        </svg>
                    </span>
                    <span class="delivery-content">{!! CommonData()->top_header2 !!}</span>

                </div>

                <div class="delivery-section">

                    <span class="icons" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256">
                            <path fill="currentColor"
                                d="M184 104v32a8 8 0 0 1-8 8H99.3l10.4 10.3a8.1 8.1 0 0 1 0 11.4a8.2 8.2 0 0 1-11.4 0l-24-24a8.1 8.1 0 0 1 0-11.4l24-24a8.1 8.1 0 0 1 11.4 11.4L99.3 128H168v-24a8 8 0 0 1 16 0Zm48-48v144a16 16 0 0 1-16 16H40a16 16 0 0 1-16-16V56a16 16 0 0 1 16-16h176a16 16 0 0 1 16 16Zm-16 144V56H40v144Z" />
                        </svg>
                    </span>
                    <span class="delivery-content">{!! CommonData()->top_header1 !!}</span>

                </div>

            </div>

        </div>
    </div>

    <div class="container">




        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 logo-block">
                <!-- Header Logo -->
                <div class="logo"> <a title="Citroen" href="{{ url('/') }}"><img alt="Citroen"
                            src="{{ asset('assets/images/logo.png') }}">
                    </a>
                </div>
                <!-- End Header Logo -->
            </div>
            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-3 hidden-xs category-search-form">
                <div class="search-box">
                    <form id="search_mini_form" action="{{ url('products') }}" method="get">
                        <!-- Autocomplete End code -->
                        <ul class="categories-filter animate-dropdown">
                            <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown"
                                    href="#">{{ $category ? $category->category_name : 'Categories' }} <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
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
                        <input type="hidden" name="category_id" value="{{ request()->category_id }}" />
                        <input id="search" type="text" name="search" placeholder="Search entire store here..."
                            class="searchbox" maxlength="128" value="{{ request()->search }}">
                        <button type="submit" title="Search" class="search-btn-bg" id="submit-button"></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 card_wishlist_area">
                <div class="mm-toggle-wrap" open-val="0">
                    <div class="mm-toggle"><i class="fa fa-bars"></i><span class="mm-label">Menu</span>
                    </div>
                </div>
                <div class="yujhs">
                    <div class="dropdown block-language-wrapper"> <a href="#"> <img
                                src="{{ asset('assets/images/arabia.png') }}" alt="language">
                            UAE </a>
                    </div>
                    <div class="fl-links">
                        <div class="no-js">
                            @if (session()->get('token'))
                                <a href="{{ url('my-account') }}" title="Company" class="clicker"></a>
                                <div class="fl-nav-links">
                                    <ul class="links">

                                        <li>
                                            <a href="{{ url('my-account') }}" title="My Account">
                                                {{ session()->get('name') }}'s Account</i>
                                            </a>
                                        </li>
                                        <li><a href="{{ url('wishlist') }}" title="Wishlist">Wishlist</a></li>
                                        <li class="last">
                                            <a href="{{ url('logout') }}" title="Login">
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            @else
                                <a href="#" title="Company" class="clicker" data-toggle="modal"
                                    data-target="#myModalsignin"></a>
                            @endif
                        </div>
                    </div>
                </div>

                @include('layouts.minicart')
                <!-- thm wishlist -->
            </div>
        </div>
    </div>
    <nav class="hidden-xs">
        <div class="nav-container">
            <div class="col-md-3 col-xs-12 col-sm-3">
                <div class="mega-container visible-lg visible-md visible-sm">
                    <div class="navleft-container">
                        <div class="mega-menu-title">
                            <h3><i class="fa fa-bars" aria-hidden="true"></i> All Categories</h3>
                        </div>
                        <div class="mega-menu-category">
                            <ul class="nav">
                                @foreach ($categoryList as $category)
                                    @if (empty($category->subcategory))
                                        <li class="nosub"><a
                                                href="{{ url('products?category_id=' . $category->id) }}"><i
                                                    class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                                {{ $category->category_name }}
                                            </a>
                                        </li>
                                    @else
                                        <li class="dropdown has-sub wide"> <a href="#" class="dropdown-toggle"
                                                data-toggle="dropdown"><i class="fa fa-long-arrow-right"
                                                    aria-hidden="true"></i>{{ $category->category_name }}</a>
                                            <div class="dropdown-menu wrap-popup">
                                                <div class="popup">
                                                    <div class="row">
                                                        @foreach ($category->subcategory as $subcategory)
                                                            <div class="col-md-4 col-sm-6">
                                                                <h3>{{ $subcategory->subcategory_name }}</h3>
                                                                <ul class="nav">
                                                                    @foreach ($subcategory->inner_category as $inner_category)
                                                                        <li> <a
                                                                                href="{{ url('products?category_id=' . $category->id . '&subcategory_id=' . $subcategory->id . '&innersubcategory_id=' . $inner_category->id) }}"><span>{{ $inner_category->innersubcategory_name }}</span></a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- features box -->
            <div class="our-features-box hidden-xs">
                <div class="features-block">
                    <div class="col-lg-9 col-md-9 col-xs-12 col-sm-9 offer-block">
                        @foreach ($categoryList as $category)
                            <a
                                href="{{ url('products?category_id=' . $category->id) }}">{{ $category->category_name }}</a>
                            @if ($loop->iteration >= 5)
                            @break
                        @endif
                    @endforeach
                    <span> <button class="offer-btn" type="button"
                            onclick="window.location='{{ url('products?explore_more=1') }}'">{!! CommonData()->navigation_button !!}</button>
                    </span>
                </div>
            </div>
        </div>
</nav>
</header>
<!-- end header -->

<div class="modal fade" id="myModalsignin" role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header v5c">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <div class="yhd0d">
                <h1>Welcome back!</h1>
                <h2>Sign in to your account</h2>
                <h3>Don't have an account? <a href="#" data-toggle="modal"
                        onclick="$('#myModalsignup').modal('show');$('#myModalsignin').modal('hide');">Sign
                        Up</a></h3>
            </div>
            <form id="login_form">
                @csrf
                <div class="mmc5c">
                    <label>Email</label>
                    <input type="text" name="email" id="email_signup" value="">
                </div>
                <div class="mmc5c">
                    <label>Password</label>
                    <input type="password" name="password" id="password" value=""
                        class="password_signin">
                    <span class="eyesopen" onclick="showPassword()"><i class="fa fa-eye-slash"></i></span>
                </div>
                <span class="ipEvhD"
                    onclick="$('#myModalsignup').modal('hide');$('#myModalsignin').modal('hide');$('#myModalforgot').modal('show'); "
                    style="cursor:pointer;">Forgot your password?</span>
                <button type="button" class="jcdgCW" id="login_btn" onclick="loginUser()">Sign In</button>
            </form>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="myModalsignup" role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header v5c">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form method="post" id="register_form">
            @csrf
            <div class="modal-body">
                <div class="yhd0d">
                    <h2>Create an account</h2>
                    <h3>Already have an account? <a href="#"
                            onclick="$('#myModalsignup').modal('hide');$('#myModalsignin').modal('show');">Sign
                            In</a></h3>
                </div>
                <div class="mmc5c">
                    <label>Email *</label>
                    <input type="text" id="email_reg" name="email_reg" value="">
                </div>
                <div class="mmc5c">
                    <label>Password *</label>
                    <input type="password" id="password" name="password_reg" value=""
                        class="password_signin">
                    <span onclick="showPassword()"><i class="fa fa-eye-slash"></i></span>
                </div>

                <div class="mmc5c">
                    <label> Name *</label>
                    <input type="text" id="name" name="name" value="">
                </div>


                <div class="mmc5c">
                    <label> Last Name</label>
                    <input type="text" id="last_name" name="last_name" value="">
                </div>

                <div class="mmc5c">
                    <label>Mobile *</label>
                    <input type="number" id="phone" min="0" name="phone" value="">
                </div>
                <button type="button" class="jcdgCW" id="register_btn" onclick="register()">Create an
                    account</button>
            </div>
        </form>
    </div>
</div>
</div>


<div class="modal fade" id="myModalsigninotp" role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header v5c">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form id="otp_form">
            @csrf
            <div class="modal-body">
                <div class="yhd0d">
                    <div id="some_div_time"></div>
                    <h1>Verify Your Account</h1>
                    {{-- <h2>Sign in to your account</h2> --}}
                    <h3>Don't have an account? <a href="#" data-toggle="modal"
                            onclick="$('#myModalsignup').modal('show');">Sign Up</a>
                    </h3>
                </div>
                <div class="mmc5c">
                    <label>otp</label>
                    <input type="number" name="otp_verify_otp" value="" min="0"
                        id="otp_verify_otp">
                </div>
                <a class="ipEvhD" href="#">Forgot your password?</a>
                <button type="button" class="jcdgCW" onclick="verifyOtp()">Verify
                    Otp</button>
                <button type="button" id="resend_btn" onclick="ResendEmailOtp()" style="display:none;">Reseend
                    Otp</button>

            </div>
        </form>
    </div>
</div>
</div>

<div class="modal fade" id="myModalforgot" role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header v5c">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form id="forget_password">
            @csrf
            <div class="modal-body">
                <div class="yhd0d">
                    <h1>Forget password</h1>
                    <button type="button"
                        onclick="$('#myModalsignup').modal('show');$('#myModalforgot').modal('hide');">Create
                        your account ?</button>

                </div>
                <div class="mmc5c">
                    <label>Enter Your Registered Email</label>
                    <input type="text" name="email" value="" id="email_forget">
                </div>
                <button type="button" class="jcdgCW" onclick="ForgetPassword()">Send Email</button>
                <button type="button" onclick="$('#myModalforgot').modal('hide');">sign in your
                    account?</button>
            </div>
        </form>
    </div>
</div>
</div>

<div class="modal fade" id="myModalforgetotp" role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header v5c">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form id="forget_otp">
            @csrf
            <div class="modal-body">
                <div class="yhd0d">
                    <div id="some_div"></div>
                    <h1>Otp Enter</h1>
                    {{-- <h2>Sign in to your account</h2> --}}
                    {{-- <h3>Don't have an account? <a href="#" data-toggle="modal" onclick="$('#myModalsignup').modal('show');">Sign Up</a></h3> --}}
                </div>
                <div class="mmc5c">
                    <label>otp</label>
                    <input type="number" name="otp" value="" id="otp_for" min="0">
                </div>
                <button type="button" class="jcdgCW" onclick="ForgetOtp()">Verify
                    Otp</button>
                <button type="button" id="resend_btn_otp" onclick="ResendOtp()" style="display:none;">Resend
                    Otp</button>

            </div>
        </form>
    </div>
</div>
</div>

<div class="modal fade" id="myModalchangepass" role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header v5c">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form id="change_password">
            @csrf
            <div class="modal-body">
                <div class="yhd0d">
                    <h1>Password Reset</h1>
                    {{-- <h2>Sign in to your account</h2> --}}
                    {{-- <h3>Don't have an account? <a href="#" data-toggle="modal" onclick="$('#myModalsignup').modal('show');">Sign Up</a></h3> --}}
                </div>
                <div class="mmc5c">
                    <label>Enter New Password</label>
                    <input type="password" name="new_password" value="" id="new_password"
                        class="password_signin">
                    <span onclick="showPassword()"><i class="fa fa-eye-slash"></i></span>
                </div>
                <button type="button" class="jcdgCW" onclick="newPassword()">change
                    Password</button>
            </div>
        </form>
    </div>
</div>
</div>
<script>
    function showPassword() {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $(".password_signin");
        if (input.attr("type") === "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }

    };
</script>
