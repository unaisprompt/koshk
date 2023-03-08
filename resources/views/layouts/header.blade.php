
   <!-- Start Top Header Area -->
     <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <p>FREE shipping over AED 100</p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="search-box">
                        <form method="GET" action="{{url('search')}}">
                            @csrf
                            <input type="text" name="search" class="input-search" value="" placeholder="Enter your keywords...">
                            <button type="submit"><i class='bx bx-search'></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <ul>
                        <li><a href="https://www.facebook.com/profile.php?id=100083354881800&mibextid=ZbWKwL" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="https://wa.me/message/Z4PLY3KW5YWYK1" target="_blank"><i class='bx bxl-whatsapp'></i></a></li>
                        <li><a href="https://instagram.com/fandf_dxb?igshid=ZDdkNTZiNTM=" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                        <li><a href="https://maps.app.goo.gl/6qLaHfLhPrWBSZ7L7" target="_blank"><i class='fas fa-map-marker-alt'></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Header Area -->

<!-- Start Navbar Area -->
<div class="navbar-area" style="background-color: #FDFFEA;
">
    <div class="patoi-responsive-nav">
        <div class="container">
            <div class="patoi-responsive-menu">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="{{asset('assets/img/fandflogo.png')}}" alt="logo"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="patoi-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/img/fandflogo.png')}}" alt="logo"
                        style="width: 200px;"></a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav" style="display: flex;justify-content: center;align-items: center;">
                        <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Home</a></li>

                        @foreach($menus as $category)
                        @if(count($category['subcategory'])!=0)
                        <li class="nav-item"><a href="#" class="dropdown-toggle nav-link">{{$category['category_name']}}</a>
                            <ul class="dropdown-menu">
                                @foreach($category['subcategory'] as $subcategory)
                                <li class="nav-item"><a href="{{url('products')}}?category={{$category['id']}}&ctegoryname={{$category['category_name']}}&subcategory={{$subcategory['id']}}&subcategoryname={{$subcategory['subcategory_name']}}" class="nav-link">{{$subcategory['subcategory_name']}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @else
                          <li class="nav-item"><a href="{{url('products')}}?category={{$category['id']}}&ctegoryname={{$category['category_name']}}" class="nav-link">{{$category['category_name']}}</a></li>

                        @endif
                        @endforeach
                        
                        {{-- <li class="nav-item"><a href="{{url('products')}}" class="nav-link">Products</a></li> --}}

                        {{-- <li>
                            <div class="searchbox">
                                <input type="text" id="box" placeholder="Search anything..." class="search__box">
                                <i class="fas fa-search search__icon" id="icon" onclick="toggleShow()" style="width: 18px;
                                height: 18px;"></i>
                            </div>
                        </li> --}}
                    </ul>
                    <div class="others-option">
                        <div class="d-flex align-items-center">
                            <ul>
                                <li>
                                    {{-- <select class="form-select">
                                        <option selected>EN</option>
                                    </select> --}}
                                
                                    @if(Session::has('name'))<span>Hi {{Session::get('name')}} </span>@endif
                                </li>

                                <li>@if(Session::has('user_id') && Session::has('token')) <a href="{{url('my-account')}}"><i class='bx bx-user-circle'></i></a> @else <a href="{{url('login')}}"><i class='bx bx-user-circle'></i></a> @endif </li>
                                <li>
                                    <a href="{{url('cart')}}"><i class='bx bx-cart position-relative'></i><span class="badge bg-danger rounded-pill  badgecart">
                                    {{-- <a href="{{url('cart')}}"><i class='bx bx-cart'></i> --}}
                                    {{-- @if(count(Session::get('cart'))>0){{count(Session::get('cart'))}}@endif  --}}
                                    @if(Session::has('user_id') && Session::has('token')){{count(cartCount())}}
                                    @elseif(session::has('cart') && count(Session::get('cart'))>0){{count(Session::get('cart'))}}
                                    @else
                                    0
                                    @endif
                                   
                                   
                                    </a>
                                 {{-- <span class="position-absolute cartbadge   
}    badge rounded-pill bg-danger">
    0   
    <span class="visually-hidden">unread messages</span>
  </span> --}}
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-option">
                        <ul>
                            {{-- <li>
                                <select class="form-select">
                                    <option selected>English</option>
                                    <option value="1">Spanish</option>
                                    <option value="2">Chinese</option>
                                </select>
                            </li> --}}
                            <li>@if(Session::has('user_id') && Session::has('token')) <a href="{{url('my-account')}}"><i class='bx bx-user-circle'></i></a> @else <a href="{{url('login')}}"><i class='bx bx-user-circle'></i></a> @endif </li>
                                <li><a href="{{url('cart')}}"><i class='bx bx-cart'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

