@extends('layouts.app')


   @section('content')     

   <section id="heros">


    <div class="container-fluid ">
        <div class="section" id="hero">
            <div class="content">
                <h1 id="brand">{{$response['slider']['title1']}}</h1>
                <p id="sub-brand-text">{{$response['slider']['title2']}}</p>
            </div>
            <div class="video-wrapper">
                <video id="hero-video" src="{{$response['slider']['image']}}" autoplay muted loop></video>
            </div>
        </div>
        <!-- End Home Slides Area -->

        <!-- Start Offer Area -->
        <div class="offer-area pt-100 pb-75">
            <div class="container">
                <div class="row justify-content-center">

                    @foreach($response['top_banner'] as $topbanner)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-offer-box">
                            <a href="{{url('products')}}" class="d-block">
                                <img src="{{$topbanner['image']}}" alt="offer-image">
                            </a>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
        <!-- End Offer Area -->

        <!-- Start Categories Area -->
        <div class="categories-area pb-75">
            <div class="container">
                <div class="section-title">
                    <h2>Shop by Categories</h2>
                </div>
                <div class="categories-slides owl-carousel owl-theme">


                    @foreach($response['category'] as $catitem)

                    <div class="single-categories-box">
                        <a href="{{url('products')}}?category={{$catitem['id']}}&ctegoryname={{$catitem['category_name']}}" class="d-block">
                            <img src="{{$catitem['image_url']}}" alt="categories-image">
                            <h3>{{$catitem['category_name']}}</h3>
                        </a>
                    </div>
                                 
                   
                    @endforeach
                  
                 
                </div>
            </div>
        </div>
        <!-- End Categories Area -->

        <!-- Start Products Area -->
        <div class="products-area pb-75">
            <div class="container">
                <div class="section-title">
                    <h2>New Arrivals</h2>
                </div>
                <div class="row justify-content-center">

                    @foreach($response['new_products'] as $newItem)
                     @if(!empty($newItem['productimage']['image_url']))
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="{{url('product/detail')}}?product={{$newItem['id']}}&productname={{$newItem['product_name']}}" class="d-block">
                                   <img src="{{$newItem['productimage']['image_url']}}" alt="products-image">
                                </a>
                                <ul class="products-button">
                            
                                    <li><a data-cpid={{$newItem['id']}} data-pprice={{$newItem['discounted_price']}} data-tax={{$newItem['tax']}} data-img={{$newItem['productimage']['image_url']}} data-pship={{$newItem['shipping_cost']}} data-pname={{$newItem['product_name']}} class="cart_button_home"><i class='bx bx-cart-alt'></i></a></li>
                                   @if(Session::has('user_id') && Session::has('token'))
                                    <li><a data-cpidw="{{$newItem['id']}}" class="add-to-wishlist"><i class='bx bx-heart'></i></a></li>
                                    @endif
                                    <li><a href="{{url('product/detail')}}?product={{$newItem['id']}}&productname={{$newItem['product_name']}}"><i class='bx bx-link-alt'></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3><a href="{{url('product/detail')}}?product={{$newItem['id']}}&productname={{$newItem['product_name']}}">{{$newItem['product_name']}}</a></h3>
                                <div class="price">
                                    <span class="new-price">AED {{$newItem['discounted_price']}}</span>
                                   @if($newItem['product_price']!=0) <span class="old-price"> {{$newItem['product_price']}}</span>@endif
                                </div>
                                @if(count($newItem['rattings'])!=0)
                                {{-- <div class="rating">
                                    <i class='bx bxs-star' style="color: #afada8;"></i>
                                    <i class='bx bxs-star' style="color: #afada8;"></i>
                                    <i class='bx bxs-star' style="color: #afada8;"></i>
                                    <i class='bx bxs-star' style="color: #afada8;"></i>
                                    <i class='bx bxs-star' style="color: #afada8;"></i>
    
                                </div>
                                @else --}}
                                <div class="rating">
                                    <i class='bx bxs-star'  style="@if($newItem['rattings'][0]['avg_ratting']>=1) color:#facb11; @else color: #afada8;  @endif"  ></i>
                                    <i class='bx bxs-star' style="@if($newItem['rattings'][0]['avg_ratting']>=2) color:#facb11; @else color: #afada8;  @endif"></i>
                                    <i class='bx bxs-star' style="@if($newItem['rattings'][0]['avg_ratting']>=3) color:#facb11; @else color: #afada8;  @endif"></i>
                                    <i class='bx bxs-star' style="@if($newItem['rattings'][0]['avg_ratting']>=4) color:#facb11; @else color: #afada8;  @endif"></i>
                                    <i class='bx bxs-star' style="@if($newItem['rattings'][0]['avg_ratting']>=5) color:#facb11; @else color: #afada8;  @endif"></i>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    
                    
                </div>
            </div>
        </div>
        <!-- End Products Area -->

        <!-- Start Offer Area -->
        <div class="offer-area pb-75">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($response['deal_banner'] as $dealbanner)
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offer-box">
                            <a href="{{url('products')}}" class="d-block">
                                <img src="{{$dealbanner['image']}}" alt="offer-image">
                            </a>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
        <!-- End Offer Area -->

        <!-- Start Products Area -->
        <div class="products-area pb-75">
            <div class="container">
                <div class="section-title">
                    <h2> Hot Deals </h2>
                </div>
                <div class="products-slides owl-carousel owl-theme">

                    @foreach($response['hot_deal_products'] as $hotItem)
                
                    <div class="single-products-box">
                        <div class="image">
                            <a href="{{url('product/detail')}}?product={{$hotItem['id']}}&productname={{$hotItem['product_name']}}" class="d-block">
                                <img src="{{$hotItem['productimage']['image_url']}}" alt="products-image">
                            </a>
                            <ul class="products-button">
                                 <li><a data-cpid={{$hotItem['id']}} data-pprice={{$hotItem['discounted_price']}} data-tax={{$hotItem['tax']}} data-img={{$hotItem['productimage']['image_url']}} data-pship={{$hotItem['shipping_cost']}} data-pname={{$hotItem['product_name']}} class="cart_button_home"><i class='bx bx-cart-alt'></i></a></li>
                                   @if(Session::has('user_id') && Session::has('token'))
                                    <li><a data-cpidw="{{$hotItem['id']}}" class="add-to-wishlist"><i class='bx bx-heart'></i></a></li>
                                    @endif
                                
                                <li><a href="{{url('product/detail')}}?product={{$hotItem['id']}}&productname={{$hotItem['product_name']}}"><i class='bx bx-link-alt'></i></a></li>
                            </ul>
                            {{-- <div class="new">New!</div> --}}
                        </div>
                        <div class="content">
                            <h3><a href="{{url('product/detail')}}?product={{$hotItem['id']}}&productname={{$hotItem['product_name']}}">{{$hotItem['product_name']}}</a></h3>
                            <div class="price">
                                <span class="new-price">AED {{$hotItem['discounted_price']}}</span>
                                @if($hotItem['product_price']!=0) <span class="old-price"> {{$hotItem['product_price']}}</span>@endif
                            </div>
                            @if(count($hotItem['rattings'])!=0)
                            {{-- <div class="rating">
                                <i class='bx bxs-star' style="color: #afada8;"></i>
                                <i class='bx bxs-star' style="color: #afada8;"></i>
                                <i class='bx bxs-star' style="color: #afada8;"></i>
                                <i class='bx bxs-star' style="color: #afada8;"></i>
                                <i class='bx bxs-star' style="color: #afada8;"></i>

                            </div>
                            @else --}}
                            <div class="rating">
                                <i class='bx bxs-star'  style="@if($hotItem['rattings'][0]['avg_ratting']>=1) color:#facb11; @else color: #afada8;  @endif"  ></i>
                                <i class='bx bxs-star' style="@if($hotItem['rattings'][0]['avg_ratting']>=2) color:#facb11; @else color: #afada8;  @endif"></i>
                                <i class='bx bxs-star' style="@if($hotItem['rattings'][0]['avg_ratting']>=3) color:#facb11; @else color: #afada8;  @endif"></i>
                                <i class='bx bxs-star' style="@if($hotItem['rattings'][0]['avg_ratting']>=4) color:#facb11; @else color: #afada8;  @endif"></i>
                                <i class='bx bxs-star' style="@if($hotItem['rattings'][0]['avg_ratting']>=5) color:#facb11; @else color: #afada8;  @endif"></i>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                   
                    
                    
                </div>
            </div>
        </div>
        <!-- End Products Area -->

        <!-- Start Offer Area -->
        <div class="offer-area pb-75">
            <div class="container">
                <div class="single-offer-box">
                    <a href="{{url('products')}}" class="d-block">
                        <img src="{{$response['bottom_banner']['image']}}" alt="offer-image">
                    </a>
                </div>
            </div>
        </div>
        <!-- End Offer Area -->

        <!-- Start Brands Area -->
        <div class="brands-area pb-75">
            <div class="container">
                <div class="section-title">
                    <h2>Our Brands</h2>
                </div>
                <div class="row justify-content-center align-items-center">
                    @foreach($response['brands'] as $brand)
                    <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                        <div class="single-brands-box">
                            <a href="{{url('brand/products')}}?brand_name={{$brand['brand_name']}}&brand_id={{$brand['id']}}" class="d-block">
                                <img src="{{$brand['image_url']}}" alt="brands">
                            </a>
                        </div>
                    </div>
                    @endforeach
                 
                </div>
            </div>
        </div>
        <!-- End Brands Area -->

        <!-- Start Products Area -->
        <div class="products-area pb-75">
            <div class="container">
                <div class="section-title">
                    <h2>Featured Products</h2>
                </div>
                <div class="row justify-content-center">
                    @foreach($response['featured_products'] as $featured)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="{{url('product/detail')}}?product={{$featured['id']}}&productname={{$featured['product_name']}}" class="d-block">
                                    <img src="{{$featured['productimage']['image_url']}}" alt="products-image">
                                </a>
                                <ul class="products-button">
                                   <li><a data-cpid={{$featured['id']}} data-pprice={{$featured['discounted_price']}} data-tax={{$featured['tax']}} data-img={{$featured['productimage']['image_url']}} data-pship={{$featured['shipping_cost']}} data-pname={{$featured['product_name']}} class="cart_button_home"><i class='bx bx-cart-alt'></i></a></li>
                                   @if(Session::has('user_id') && Session::has('token'))
                                    <li><a data-cpidw="{{$featured['id']}}" class="add-to-wishlist"><i class='bx bx-heart'></i></a></li>
                                    @endif
                                    
                                    <li><a href="{{url('product/detail')}}?product={{$featured['id']}}&productname={{$featured['product_name']}}"><i class='bx bx-link-alt'></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3><a href="{{url('product/detail')}}?product={{$featured['id']}}&productname={{$featured['product_name']}}">{{$featured['product_name']}}</a></h3>
                                <div class="price">
                                    <span class="new-price">AED {{$featured['discounted_price']}}</span>
                                    @if($featured['product_price']!=0) <span class="old-price"> {{$featured['product_price']}}</span>@endif
                                </div>
                                @if(count($featured['rattings'])!=0)
                                {{-- <div class="rating">
                                    <i class='bx bxs-star' style="color: #afada8;"></i>
                                    <i class='bx bxs-star' style="color: #afada8;"></i>
                                    <i class='bx bxs-star' style="color: #afada8;"></i>
                                    <i class='bx bxs-star' style="color: #afada8;"></i>
                                    <i class='bx bxs-star' style="color: #afada8;"></i>

                                </div>
                                @else --}}
                                <div class="rating">
                                    <i class='bx bxs-star'  style="@if($featured['rattings'][0]['avg_ratting']>=1) color:#facb11; @else color: #afada8;  @endif"  ></i>
                                    <i class='bx bxs-star' style="@if($featured['rattings'][0]['avg_ratting']>=2) color:#facb11; @else color: #afada8;  @endif"></i>
                                    <i class='bx bxs-star' style="@if($featured['rattings'][0]['avg_ratting']>=3) color:#facb11; @else color: #afada8;  @endif"></i>
                                    <i class='bx bxs-star' style="@if($featured['rattings'][0]['avg_ratting']>=4) color:#facb11; @else color: #afada8;  @endif"></i>
                                    <i class='bx bxs-star' style="@if($featured['rattings'][0]['avg_ratting']>=5) color:#facb11; @else color: #afada8;  @endif"></i>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach                    
                  
                    <!-- End Products Area -->

                    <!-- Start Facility Area -->
                    <div class="facility-area">
                        <div class="container">
                            <div class="facility-inner bg2">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                        <div class="single-facility-box">
                                            <img src="assets/img/icon/icon1.png" alt="icon">
                                            <h3>Best collection</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                        <div class="single-facility-box">
                                            <img src="assets/img/icon/icon2.png" alt="icon">
                                            <h3>Fast delivery</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                        <div class="single-facility-box">
                                            <img src="assets/img/icon/icon3.png" alt="icon">
                                            <h3>24/7 customer support</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                        <div class="single-facility-box">
                                            <img src="assets/img/icon/icon4.png" alt="icon">
                                            <h3>Secured payment</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Facility Area -->

                    <!-- Start Blog Area -->
                    <div class="blog-area pt-100 pb-75">
                        <div class="container">
                            <div class="section-title">
                                <h2>Best Sellers</h2>
                            </div>
                          
                            <div class="row justify-content-center">
                                @foreach($response['bestsellers'] as $bestItem)
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="single-products-box">
                                        <div class="image">
                                            <a href="{{url('product/detail')}}?product={{$bestItem['id']}}&productname={{$bestItem['product_name']}}" class="d-block">
                                                <img src="{{$bestItem['productimage']['image_url']}}" alt="products-image">
                                            </a>
                                            <span class="on-sale">On Sale!</span>
                                            <ul class="products-button">
                                               <li><a data-cpid={{$bestItem['id']}} data-pprice={{$bestItem['discounted_price']}} data-tax={{$bestItem['tax']}} data-img={{$bestItem['productimage']['image_url']}} data-pship={{$bestItem['shipping_cost']}} data-pname={{$bestItem['product_name']}} class="cart_button_home"><i class='bx bx-cart-alt'></i></a></li>
                                   @if(Session::has('user_id') && Session::has('token'))
                                    <li><a data-cpidw="{{$bestItem['id']}}" class="add-to-wishlist"><i class='bx bx-heart'></i></a></li>
                                    @endif
                                                
                                                <li><a href="{{url('product/detail')}}?product={{$bestItem['id']}}&productname={{$bestItem['product_name']}}"><i class='bx bx-link-alt'></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="content">
                                            <h3><a href="{{url('product/detail')}}?product={{$bestItem['id']}}&productname={{$bestItem['product_name']}}">{{$bestItem['product_name']}}</a></h3>
                                            <div class="price">
                                                <span class="new-price">{{$bestItem['discounted_price']}}</span>
                                                @if($bestItem['product_price']!=0)   <span class="old-price"> {{$bestItem['product_price']}}</span>@endif
                                            </div>
                                            @if(count($bestItem['rattings'])!=0)
                                            {{-- <div class="rating">
                                                <i class='bx bxs-star' style="color: #afada8;"></i>
                                                <i class='bx bxs-star' style="color: #afada8;"></i>
                                                <i class='bx bxs-star' style="color: #afada8;"></i>
                                                <i class='bx bxs-star' style="color: #afada8;"></i>
                                                <i class='bx bxs-star' style="color: #afada8;"></i>
            
                                            </div>
                                            @else --}}
                                            <div class="rating">
                                                <i class='bx bxs-star'  style="@if($bestItem['rattings'][0]['avg_ratting']>=1) color:#facb11; @else color: #afada8;  @endif"  ></i>
                                                <i class='bx bxs-star' style="@if($bestItem['rattings'][0]['avg_ratting']>=2) color:#facb11; @else color: #afada8;  @endif"></i>
                                                <i class='bx bxs-star' style="@if($bestItem['rattings'][0]['avg_ratting']>=3) color:#facb11; @else color: #afada8;  @endif"></i>
                                                <i class='bx bxs-star' style="@if($bestItem['rattings'][0]['avg_ratting']>=4) color:#facb11; @else color: #afada8;  @endif"></i>
                                                <i class='bx bxs-star' style="@if($bestItem['rattings'][0]['avg_ratting']>=5) color:#facb11; @else color: #afada8;  @endif"></i>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                               @endforeach
                            
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Area -->
<script>
 

$('.cart_button_home').click(function(e){
 
        e.preventDefault();
   var setting={
           url:'{{url("/add-to-cart")}}',
            dataType:'json',
            type:'post',
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
            data: { 
                product_id: $(this).data('cpid'),
                product_name: $(this).data('pname'),
                qty: 1,
                price: $(this).data('pprice'),
                shipping_cost: $(this).data('pship'),
                tax: $(this).data('tax'),
                image: $(this).data('img')
            },
          
            success:function(response){
             // console.log(response);

             if(response.status==1){
              // alert(response.cart_count);
                $('.badgecart').text(response.cart_count);
                Toastify({
            text: "Cart Item Added",
            className: "info",
            close: true,
            style: {
                background: "#1cad6a",
            }
            }).showToast();

             }
            
            },
             error: function(xhr) {
             
         console.log(xhr.responseText); // this line will save you tons of hours while debugging
        // do something here because of error
       }
        };
     $.ajax(setting);
    });


       $('.add-to-wishlist').click(function(e){
    e.preventDefault();
    // $('#review_button').prop('disabled', true);
        $.ajax({
        type: "POST",
        url: '{{url("wishlist-add")}}',
        headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
        data: {
               product_id: $(this).data('cpidw')
             }, 
        success: function(response) {
            if(response.status==1){
                 $("#my_btn_heart").css({'color': 'red'});
                Toastify({
            text: "Product Added",
            className: "info",
            close: true,
            style: {
                background: "#1cad6a",
            }
            }).showToast();
             }
             else{
                Toastify({
            text: 'product already added',
            className: "info",
            close: true,
            style: {
                background: "#e11414",
            }
            }).showToast();
             }
        }
    });
    });

    </script>
    @endsection
       