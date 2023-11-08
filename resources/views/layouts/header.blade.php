<!-- Header -->
@php
    $categoryList = categoryList();
    $category = collect($categoryList)->first(function ($value, $key) {
        return $value->id == request()->category_id;
    });
@endphp
<header>
    

    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 logo-block">
                <!-- Header Logo -->
                <div class="logo"> <a title="logo" href="{{ url('/') }}"><img alt="logo"
                            src="{{env('LIVE_PATH')}}/assets/images/settings/{!!CmsPage()['settings']['logo'] !!}">
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
                                    href="#">@lang('label.categories') <b
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
                    <div class="dropdown block-language-wrapper"> 
                        @if(session()->get('locale') == 'ar')
                        <a href="#" data-lang="en" class="languageChange">
                             <img src="{{ asset('assets/images/arabia.png') }}" alt="language">
                            </a>
                            @else
                            <a href="#" data-lang="ar" class="languageChange"> <img
                                src="{{ asset('assets/images/english.png') }}" alt="language">
                            </a>
                            @endif
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
                            <h3><i class="fa fa-bars" aria-hidden="true"></i> @lang('label.all_categories')</h3>
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
                                                                <h3><a
                                                                        href="{{ url('products?category_id=' . $category->id . '&subcategory_id=' . $subcategory->id) }}">
                                                                        {{ $subcategory->subcategory_name }}
                                                                    </a>
                                                                </h3>
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
                        <div class="nav-cat-main">
                            <a class="nav-cat @if(url()->full()== url('products?category_id=' . $category->id)) active  @endif"
                            href="{{ url('products?category_id=' . $category->id) }}">{{ $category->category_name }}</a>
                        </div>
                           
                            @if ($loop->iteration >= 6)
                            @break
                        @endif
                    @endforeach
                    {{-- <span> <button class="offer-btn" type="button"
                            onclick="window.location='{{ url('products?explore_more=1') }}'">{!! CommonData()->navigation_button !!}</button>
                    </span> --}}
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
                    <input type="text" id="name" oninput="this.value=this.value.replace(/[^A-Za-z\s]/g,'');" name="name" value="">
                </div>


                <div class="mmc5c">
                    <label> Last Name</label>
                    <input type="text" id="last_name" oninput="this.value=this.value.replace(/[^A-Za-z\s]/g,'');" name="last_name" value="">
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

<script type="text/javascript">  
    var url = "{{ route('LangChange') }}";
    $(".languageChange").click(function(){
        var val=$(this).data('lang')
        window.location.href = url + "?lang="+val;
    });  
</script>

<script>
    // Using JavaScript to toggle the active class
const megaMenuTitle = document.querySelector('.mega-menu-title');

megaMenuTitle.addEventListener('click', () => {
    megaMenuTitle.classList.toggle('active');
});


</script>
