
@extends('layouts.app')


@section('content')  

        <!-- Start Page Title Area -->
        {{-- <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>My Account</h1>
                    
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Profile Authentication Area -->
        <div class="profile-authentication-area ptb-100">
            <div class="container">
                <div class="row">
                   
                    <a href="{{url('logout')}}">logout</a>
                    <a href="{{url('user-password-change')}}">Password Reset</a>
                    <a href="{{url('address-list')}}">Address List</a>  
                    
                </div>
            </div>
        </div> --}}
        <div class="products-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area">
                        <div class="widget widget_categories">
                            <h3 class="widget-title"><span>My Account</span></h3>
                            <ul>
                               
                                <li><span>
                                        <box-icon name='user'><i class='bx bx-lock'></i></box-icon>&nbsp;
                                    </span> <a href="{{url('user-password-change')}}">Password Reset</a></li>
                                        <li><span>
                                        <box-icon name='user'><i class='bx bx-lock'></i></box-icon>&nbsp;
                                    </span> <a href="{{url('wishlist')}}">WishList</a></li>
                                     <li><span>
                                        <box-icon name='user'><i class='bx bx-map'></i></box-icon>&nbsp;
                                    </span> <a href="{{url('address-list')}}">Address List</a>  </li>
                                   <li><span>
                                        <box-icon name='shopping-bag'><i class='bx bx-shopping-bag'></i></box-icon>
                                        &nbsp;
                                </span><a href="{{url('order-history')}}">Orders</a></li>
                                      <li><span>
                                        <box-icon name='user'><i class='bx bx-cog'></i></box-icon>&nbsp;
                                    </span>  <a href="{{url('logout')}}">logout</a></li>
                                <!-- <li><span><box-icon name='location-plus' ><i class='bx bx-location-plus' ></i></box-icon>&nbsp;</span><a href="shop-left-sidebar.html">Address book</a></li> -->

                                <!-- <li><span><box-icon type='solid' name='cog'><i class='bx bxs-cog'></i></box-icon>&nbsp;</span><a href="shop-left-sidebar.html">Account Settings</a></li> -->
                                <!-- <li><a href="shop-left-sidebar.html">Tips</a></li>
                                    <li><a href="shop-left-sidebar.html">Log in</a></li>
                                    <li><a href="shop-left-sidebar.html">Uncategorized</a></li> -->
                            </ul>
                        </div>

                    </aside>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="patoi-grid-sorting row align-items-center">
                        <div class="col-lg-6 col-md-6 result-count">
                            {{-- <p>Lorem ipsum </p> --}}
                        </div>

                    </div>


                    <div class="person-cont">
                        <div class="person-background">
                            <div class="person-info">
                                <div class="person-image">
                                    <div class="person-defaultImage">
                                          <img src="{{$data['data']['profile_pic']}}" >
                                           
                                    </div>
                                </div>
                                <div class="person-infoHolder">
                                    <a class="person-editProfile" href="{{url('edit-profile')}}">Edit Profile </a>
                                    <div class="person-info">
                                        <div class="person-name">
                                           name : {{$data['data']['name']}}<br>
                                            mobile : {{$data['data']['mobile']}}<br>
                                            email : {{$data['data']['email']}}<br>
                                            
                                          {{-- {{dd($data)}} --}}
                                        </div>
                                        <div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="service-categories text-xs-center">
                        <div class="container">
                            <div class="row">

                                <div class="col-md-4">
                                    <a href="{{url('order-history')}}">
                                        <div class="card service-card card-inverse">
                                            <div class="card-block">
                                                <div class="ico">
                                                    <span class="bi bi-gift-fill fa-2x"></span>
                                                </div>
                                                <div>
                                                    <h5 class="card-title text-center">Orders</h5>
                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{url('wishlist')}}">
                                        <div class="card service-card card-inverse">
                                            <div class="card-block">
                                                <div class="ico">
                                                    <span class="bi bi-heart-fill fa-2x"></span>
                                                </div>
                                                <div>
                                                    <h5 class="card-title text-center">Wishlist</h5>
                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{url('cart')}}">
                                        <div class="card service-card card-inverse">
                                            <div class="card-block">
                                                <div class="ico">
                                                    <span class="bi bi-bag-check-fill fa-2x"></span>
                                                </div>
                                                <div>
                                                    <h5 class="card-title text-center">Cart</h5>
                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                               

                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- End Profile Authentication Area -->

    @endsection