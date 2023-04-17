@extends('layouts.app')
@section('content')   
<style>
  .product-view .product-essential .add-to-links li:first-child {
    float: left !important;
}
</style>
    <div class="container-fluid">
      <div class="row">
        <!-- Slider -->
        <div class="home-slider5">
          <div id="thmg-slideshow" class="thmg-slideshow">
            <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
              <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                <ul>
                  @if(!empty($finalData['main_data']['slider']))
                  @foreach($finalData['main_data']['slider'] as $banner)
                  <li data-transition='random' data-slotamount='7' data-masterspeed='1000'
                    data-thumb='{{$banner['image']}}'>
                    <img src='{{$banner['image']}}' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner" />
                    <div class="container">
                      <div class="content_slideshow">
                        <div class="row">
                          <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
                          <div class="col-lg-9 col-sm-9 col-md-9">
                            <div class="info">
                              <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500'
                                data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none'
                                data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'
                                style='z-index:2; white-space:nowrap;'><span>{{$banner['title1']}}</span> </div>
                              <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500'
                                data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                                data-elementdelay='0.1' data-endelementdelay='0.1'
                                style='z-index:3; white-space:nowrap;'><span
                                  style="font-weight:normal; display:block">{{$banner['title2']}}</div>
                              <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500'
                                data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                                data-elementdelay='0.1' data-endelementdelay='0.1'
                                style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Shop Now</a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  @endforeach
                  @endif
                </ul>
                <div class="tp-bannertimer"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ============================================== INFO BOXES ============================================== -->
    <!-- ============================================== SCROLL TABS ============================================== -->
    <div id="product-tabs-slider" class="scroll-tabs">
      {{-- <div class="more-info-tab clearfix">
        <ul class="nav nav-tabs nav-tab-line container">
          @foreach($finalData['main_data']['category'] as $category)
          <li class="{{$loop->iteration == 1 ? 'active': ''}}"> <a data-transition-type="backSlide" href="#cat_{{$category['id']}}" data-toggle="tab"> <img
                src="{{$category['image_url']}}" alt="mobiles"> <span> {{$category['category_name']}}</span> </a> </li>
                @endforeach
        </ul>
        <!-- /.nav-tabs -->
      </div> --}}

            <div class="splide" id="product-carousel">
        <div class="splide__track more-info-tab clearfix ">
          <ul class="splide__list nav nav-tabs nav-tab-line container" style="height: 230px;">
             @foreach($finalData['main_data']['category'] as $category)
            <li class="splide__slide {{$loop->iteration == 1 ? 'active': ''}}">
              <a data-transition-type="backSlide" href="#cat_{{$category['id']}}" data-toggle="tab"> 
                <img src="{{$category['image_url']}}" alt="mobiles"> 
                <span> {{$category['category_name']}}</span> 
              </a> 
            </li>  
             @endforeach   
          </ul>
        </div>
            </div>

      <div class="tab-content container">
              @foreach($finalData['category_with_product']['category'] as $cat_product)
        <div class="tab-pane {{$loop->iteration == 1 ? 'active': ''}}" id="cat_{{$cat_product['id']}}">
          <div class="product-slider products-grid">
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
          @foreach($cat_product['products'] as $product)
              <div class="item item-carousel">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a class="product-image" href="{{url('product-detail')}}?id={{$product['id']}}"> <img alt=""
                          src="{{$product['productimage']['image_url']}}"> </a>
                          @php $percentage = (($product['product_price'] - $product['discounted_price']) / $product['product_price'])*100; @endphp
                          <div class="sale-label sale-top-right">{{round($percentage,2)}}%</div>
                          @if($product['new_item'] == 2)
                          <div class="new-label new-top-left">new</div>
                          @endif
                      <div class="box-hover">
                        <ul class="add-to-links">
                          <li><a class="link-quickview openModal" data-details="{{json_encode($product)}}" onClick="setProductDetails($(this).data('details'))"></a></li>
                          <li><a class="link-wishlist add-to-wishlist" data-cpidw="{{$product['id']}}"></li>
                         </ul>
                      </div>

                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a href="{{url('product-detail')}}?id={{$product['id']}}">{{$product['product_name']}}</a> </div>
                      <div class="brand"> {{$product['product_brand']['brand_name']}}</div>
                      <div class="star-rating">
                        <span style="width:60%">Rated <strong class="rating">{{$product['avg_ratting']}}</strong> out of 5</span>
                      </div>
                      <div class="item-content">
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">AED {{$product['discounted_price']}}</span>
                            </span> </div>
                        </div>
                      <span style="font-size: 12px
                        ;">{{$product['delivery_message']}}</span>
                        <div class="count-number">
                          <form id='myform' method='POST' class='quantity' action='#'>
                            <input type='button' value='-' class='qtyminus minus' field='quantity' />
                            <input type='text' name='quantity' value='0' class='qty' />
                            <input type='button' value='+' class='qtyplus plus' field='quantity' />
                          </form>
                        </div>
                        <div class="action">
                          <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart" data-details="{{json_encode($product)}}" onclick="addCart($(this).data('details'),$(this).closest('.item').find('.qty').val())"><i
                              class="fa fa-shopping-basket"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <!-- /.products -->
              </div>
           @endforeach
              <!-- /.item -->
            </div>
            <!-- /.home-owl-carousel -->
          </div>
          <!-- /.product-slider -->
        </div>
        @endforeach


      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.scroll-tabs -->
    <!-- ============================================== SCROLL TABS : END ============================================== -->
    <div class="container">
      <div class="wide-banner">
        <div class="row">
          @foreach($finalData['main_data']['top_banner'] as $top_banner)
          <div class="figure banner-with-effects effect-sadie1 banner-width  with-button"><img src="{{$top_banner['image']}}"
              alt="">
           
          </div>
          @endforeach
          {{-- <div class="figure banner-with-effects effect-sadie1 banner-width  with-button"><img
              src="{{asset('assets\images\shoes-banner.jpg')}}" alt="">
        
          </div> --}}
        </div>
      </div>
    </div>
    <div class="container-fluid qwre">
      <div class="container">
        <div class="row">
          @if(!empty($finalData['main_data']['offer_banner']))
         @foreach($finalData['main_data']['offer_banner'] as $offer_banner)
          <div class="bb5g">
            <div class="yuhd">
              <a href="{{url('products')}}?category_id={{$offer_banner['cat_id']}}" style="text-decoration:none;"><img src="{{$offer_banner['image']}}" alt="" />
            </div>
            <div class="uyd">
              <h1>{{$offer_banner['title']}}</h1>
              <h2>{{$offer_banner['category']['category_name']}}</h2></a>
            </div>
          </div>
          @endforeach
         @endif
        </div>
      </div>
    </div>

    <div class="container">
      <div class="bestsell-pro">
        <div>
          <div class="slider-items-products">
            <div class="bestsell-block">
              <div class="block-title">
                <h2>Best Sellers</h2>
              </div>
              <div id="bestsell-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid block-content">
                  @foreach($finalData['main_data']['bestsellers'] as $featured_products)
                  <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"> <a class="product-image" title="Retis lapen casen"
                            href="{{url('product-detail')}}?id={{$featured_products['id']}}"> <img alt="" src="{{$featured_products['productimage']['image_url']}}"> </a>
                           <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview openModal" href="#"  data-details="{{json_encode($featured_products)}}" onClick="setProductDetails($(this).data('details'))"></a> </li>
                              <li><a class="link-wishlist add-to-wishlist"  data-id="{{$featured_products['id']}}"  onclick="event.preventDefault();addWishlist($(this))"></a> </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Retis lapen casen" href="{{url('product-detail')}}?id={{$featured_products['id']}}">{{$featured_products['product_name']}}</a> </div>
                          {{-- <div class="brand">{{!empty($featured_products['brand']['brand_name'])}}</div> --}}
                          <div class="star-rating">
                            {{-- <span style="width:60%">Rated <strong class="rating">{{$featured_products['rattings']}}</strong> out of 5</span> --}}
                          </div>
                          <div class="item-content">
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">AED {{$featured_products['discounted_price']}}</span>
                                </span> </div>
                            </div>

                            {{-- <div class="count-number">
                              <form id='myform' method='POST' class='quantity' action='#'>
                                <input type='button' value='-' class='qtyminus minus' field='quantity' />
                                <input type='text' name='quantity' value='0' class='qty' />
                                <input type='button' value='+' class='qtyplus plus' field='quantity' />
                              </form>
                            </div> --}}
                            <div class="action">
                              <button class="button btn-cart" type="button" title=""
                                data-original-title="Add to Cart" data-details="{{json_encode($featured_products)}}" onclick="addCart($(this).data('details'))"><i class="fa fa-shopping-basket"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  <!-- End Item -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="banner-row irf">
      <div class="container">
        <div class="row">
          @foreach($finalData['main_data']['deal_banner'] as $deal_banner)
          <div class="col-12 col-lg-4 col-md-6">
            <div class="position-relative">
              <!-- Background -->
              <img class="img-fluid hover-zoom" src="{{$deal_banner['image']}}" alt="">
              <!-- Body -->
              <div class="banner-text">
                <h6 class="text-white">{{$deal_banner['title']}}</h6>
                <!-- Heading -->
                <h3 class="text-white">{{$deal_banner['description']}}</h3>
                {{-- <!-- Link --> <a class="more-link text-dark" href="#">Shop Now </a> --}}
              </div>
            </div>
          </div>
          @endforeach
         
        </div>
      </div>
    </section>

    <section class="explor">
      <div class="container">
        <div class="row">
      
         <div class="col-md-6 col-sm-3 col-lg-3">
            <div class="utgd">
              <h4>Hot Deal <br />Product</h4>
              @if(!empty($finalData['main_data']['hot_products_limited']))
               @foreach($finalData['main_data']['hot_products_limited'] as $product_img)
              <a href="{{url('product-detail')}}?id={{$product_img['id']}}">
                <img src="{{$product_img['productimage']['image_url']}}" alt="" />
              </a>
             @endforeach
             @endif
            </div>
          </div>
          <div class="col-md-6 col-sm-3 col-lg-3">
            <div class="utgd1">
              <h4>New <br> Arrivals</h4>
              @if($finalData['main_data']['new_products']&& count($finalData['main_data']['new_products'])>4)
            @php
            $arr = $finalData['main_data']['new_products'];
            $limitedArray = array_slice($arr, 0, 4);
            @endphp
            @foreach($limitedArray as $new_arrival)
              <a href="{{url('product-detail')}}?id={{$new_arrival['id']}}">
                <img src="{{$new_arrival['productimage']['image_url']}}" alt="" />
                <h6>{{$new_arrival['product_name']}}</h6>
              </a>
              @endforeach
              @endif
              {{-- <a href="#">
                <img src="{{asset('assets/images/WFH.jpg')}}" alt="" />
                <h6>WFH essentials</h6>
              </a>
              <a href="#">
                <img src="{{asset('assets/images/protine.jpg')}}" alt="" />
                <h6>protein supplements</h6>
              </a>
              <a href="#">
                <img src="{{asset('assets/images/fitness.jpg')}}" alt="" />
                <h6>fitness essentials</h6>
              </a> --}}
              {{-- <div class="iu5d">
                <a href="#">See all offers</a>
              </div> --}}
            </div>
          </div>
          {{-- {{dd($finalData['main_data'])}} --}}
          <div class="col-md-6 col-sm-3 col-lg-3">
            <div class="utgd1">
              <h4>Bestseller Product</h4>
               @if($finalData['main_data']['bestsellers']&& count($finalData['main_data']['bestsellers'])>4)
            @php
            $arr_best = $finalData['main_data']['bestsellers'];
            $limitedArrayBest = array_slice($arr_best, 0, 4);
            @endphp
            @foreach($limitedArrayBest as $bestsellers)
              <a href="{{url('product-detail')}}?id={{$bestsellers['id']}}">
                <img src="{{$bestsellers['productimage']['image_url']}}" alt="" />
                 <h6>
                  @php if(strlen($bestsellers['product_name']) > 30){
                      $string = substr($bestsellers['product_name'], 0, 20) . "...";
                      echo $string; 
                  }else{
                   echo $bestsellers['product_name'];
                  }
                  @endphp </h6>
              </a>
              @endforeach
              @endif
              {{-- <a href="#">
                <img src="{{asset('assets/images/beverages.jpg')}}" alt="" />
                <h6>beverages</h6>
              </a>
              <a href="#">
                <img src="{{asset('assets/images/protine.jpg')}}" alt="" />
                <h6>protein supplements</h6>
              </a>
              <a href="#">
                <img src="{{asset('assets/images/fitness.jpg')}}" alt="" />
                <h6>fitness essentials</h6>
              </a> --}}
              {{-- <div class="iu5d">
                <a href="#">See all offers</a>
              </div> --}}
            </div>
          </div>
          <div class="col-md-6 col-sm-3 col-lg-3">
            <div class="utgd1">
              <h4>Featured  Product</h4>
            @if($finalData['main_data']['featured_products']&& count($finalData['main_data']['featured_products'])>4)
            @php
            $arr_featured = $finalData['main_data']['featured_products'];
            $limitedArrayFeatured = array_slice($arr_featured, 0, 4);
            @endphp
            @foreach($limitedArrayFeatured as $featured_products)
              <a href="{{url('product-detail')}}?id={{$featured_products['id']}}">
                 <img src="{{$featured_products['productimage']['image_url']}}" alt="" />
                <h6>
                  @php if(strlen($featured_products['product_name']) > 30){
                      $string = substr($featured_products['product_name'], 0, 20) . "...";
                      echo $string; 
                  }else{
                   echo $featured_products['product_name'];
                  }
                  @endphp </h6>
              </a>
                @endforeach
              @endif
              {{-- <a href="#">
                <img src="{{asset('assets/products-images/product1.jpg')}}" alt="" />
                <h6>WFH essentials</h6>
              </a>
              <a href="#">
                <img src="{{asset('assets/products-images/product2.jpg')}}" alt="" />
                <h6>protein supplements</h6>
              </a>
              <a href="#">
                <img src="{{asset('assets/products-images/product3.jpg')}}" alt="" />
                <h6>fitness essentials</h6>
              </a> --}}
              {{-- <div class="iu5d">
                <a href="#">See all offers</a>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </section>

    <!---- <section class="u2n">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-3 col-lg-3">
          <div class="yh52d">
            <div class="kj2d">
              <img src="images/desc-img2.jpg" alt="" />
            </div>
            <div class="kj1d">
              <h3>catch big deals on the cameras</h3>
              <a href="#">Shop Now <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-3 col-lg-3">
          <div class="yh52d">
            <div class="kj2d">
              <img src="images/desc-img2.jpg" alt="" />
            </div>
            <div class="kj1d">
              <h3>catch big deals on the cameras</h3>
              <a href="#">Shop Now <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-3 col-lg-3">
          <div class="yh52d">
            <div class="kj2d">
              <img src="images/desc-img2.jpg" alt="" />
            </div>
            <div class="kj1d">
              <h3>catch big deals on the cameras</h3>
              <a href="#">Shop Now <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-3 col-lg-3">
          <div class="yh52d">
            <div class="kj2d">
              <img src="images/desc-img2.jpg" alt="" />
            </div>
            <div class="kj1d">
              <h3>catch big deals on the cameras</h3>
              <a href="#">Shop Now <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->

    <div class="ads-block">
      <div class="container">
        <div class="row">
          <div class="banner-text-big"><span>Smartphones,
              Tablets
              & Wearables</span> <br>
            50% or more off</div>
          <button class="shop" title="Subscribe" type="submit"><span>Shop now</span></button>


        </div>
      </div>
    </div>
{{-- {{dd($finalData)}} --}}
    <section class="bb5b">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-4 col-lg-4">
            <div class="bv5v">
              <h3>Sales</h3>
              <div class="products-grid yh32d">
                @if(!empty($finalData['main_data']['sale']))
                @foreach($finalData['main_data']['sale'] as $sale_data)
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="{{url('product-detail')}}?id={{$sale_data['id']}}" title="Retis lapen casen" class="product-image"> <img
                        src="{{$sale_data['productimage']['image_url']}}" alt="Retis lapen casen"> </a>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="{{url('product-detail')}}?id={{$sale_data['id']}}" title="Retis lapen casen"> {{$sale_data['product_name']}} </a> </div>
                        {{-- <div class="brand">{{!empty($sale_data['brand']['brand_name'])}}</div> --}}
                        <div class="item-content">
                          <div class="star-rating">
                            {{-- <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span> --}}
                          </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">AED {{$sale_data['product_price']}}</span>
                              </span> <span class="old-price"><span class="price">AED {{$sale_data['discounted_price']}}</span></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                @endif
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-4 col-lg-4">
            <div class="sd58s">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  @foreach($finalData['main_data']['slipping_banner'] as $sliding)
                  <div class="item  @if($loop->iteration == 1) active @endif">
                    <img src="{{$sliding['image']}}" alt="" />
                  </div>
                  @endforeach
                  {{-- <div class="item">
                    <img src="{{asset('assets/images/blog-img1.jpg')}}" alt="" />
                  </div>
                  <div class="item">
                    <img src="{{asset('assets/images/blog-img3.jpg')}}" alt="" />
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-4 col-lg-4">
            <div class="bv5v">
              <h3>top rated</h3>
              <div class="products-grid yh32d">
                @if(!empty($finalData['main_data']['top_rated']))
                @foreach($finalData['main_data']['top_rated'] as $top_rated)
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="{{url('product-detail')}}?id={{$top_rated['id']}}" title="Retis lapen casen" class="product-image"> <img
                            src="{{$top_rated['productimage']['image_url']}}" alt="Retis lapen casen"> </a>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="{{url('product-detail')}}?id={{$top_rated['id']}}" title="Retis lapen casen"> {{$top_rated['product_name']}} </a> </div>
                        <div class="brand">{{!empty($top_rated['brand']['brand_name'])}}</div>
                        <div class="item-content">
                          <div class="star-rating">
                            <span style="width:{{(count($top_rated['rattings'])>0)?$top_rated['rattings'][0]['avg_ratting']*2*10:'0'}}%">Rated <strong class="rating">{{(count($top_rated['rattings'])>0)?$top_rated['rattings'][0]['avg_ratting']:''}}</strong> out of 5</span>
                          </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">AED {{$top_rated['product_price']}}</span>
                              </span> <span class="old-price"><span class="price">AED {{$top_rated['discounted_price']}}</span></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                @endif
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Latest Blog -->
    <section class="home-articles spacer-medium">
      <div class="container">
        <div class="css-grid--columns-2">
       @if(!empty($finalData['main_data']['bottom_banner']))
          @foreach($finalData['main_data']['bottom_banner'] as $bottom_banner)
          <div class="article-home">
            <div class="article-home__ie parallax-parent"> <img src="{{$bottom_banner['image']}}" class="parallax-child--second"
                alt="article image"> </div>
            <div class="article-home__content">
              <div class="inside">
                <h4 class="title">{{$bottom_banner['title']}}</h4>
                <a href="#" class="link">Shop Now <i class="fa fa-chevron-circle-right"></i></a>
              </div>
            </div>
          </div>
          @endforeach
         @endif
         
        </div>
      </div>
    </section>



    <!-- <section class="banner-row irf ban-top">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-12 col-md-12">
            <div class="position-relative">
            
              <img class="img-fluid hover-zoom" src="images/popup.jpeg" alt="">
             

            </div>
          </div>


        </div>
      </div>
    </section> -->
    <!-- End Latest Blog -->
    <div class="container-fluid qwre">
      <div class="container">
        <div class="row">
           @if(!empty($finalData['main_data']['offer_banner']))
          @foreach($finalData['main_data']['offer_banner'] as $offer_banner)
          {{-- {{dd($offer_banner)}} --}}
          <div class="bb5g">
            <div class="yuhd">
              <a href="{{url('products')}}?category_id={{$offer_banner['cat_id']}}" style="text-decoration:none;"><img src="{{$offer_banner['image']}}" alt="" />
            </div>
            <div class="uyd">
              <h1>{{$offer_banner['title']}}</h1>
              <h2>{{$offer_banner['category']['category_name']}}</h2></a>
            </div>
          </div>
          @endforeach
          @endif
          {{-- <div class="bb5g">
            <div class="yuhd">
              <img src="{{asset('assets/images/Shoes1.png')}}" alt="" />
            </div>
            <div class="uyd">
              <h1>30% off or more</h1>
              <h2>Sports Shoes</h2>
            </div>
          </div>
          <div class="bb5g">
            <div class="yuhd">
              <img src="{{asset('assets/images/Shoes2.png')}}" alt="" />
            </div>
            <div class="uyd">
              <h1>30% off or more</h1>
              <h2>Sports Shoes</h2>
            </div>
          </div>
          <div class="bb5g">
            <div class="yuhd">
              <img src="{{asset('assets/images/Shoes3.png')}}" alt="" />
            </div>
            <div class="uyd">
              <h1>30% off or more</h1>
              <h2>Sports Shoes</h2>
            </div>
          </div>
          <div class="bb5g">
            <div class="yuhd">
              <img src="{{asset('assets/images/Shoes4.png')}}" alt="" />
            </div>
            <div class="uyd">
              <h1>30% off or more</h1>
              <h2>Sports Shoes</h2>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
    
  <div id="myModal" class="modal">



    <div class="modal-content modal-pad">
      <div class="button-close" onclick="$('#myModal').modal('hide');">
        <span class="close">&times;</span>
      </div>


      <div class="product-view">
        <div class="product-essential">
          <form action="#" method="post" id="product_addtocart_form">
            <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
            <div class="product-img-box col-lg-5 col-sm-5 col-xs-12">
              <div class="new-label new-top-left"> New </div>
              <div class="product-image">
                <div class="product-full mag"> <img data-toggle="magnify" src=""
                    alt="product-image"> </div>

              </div>
              <!-- end: more-images -->

              <div class="add-to-box">
                <div class="add-to-cart">
                  <button onclick="addCart($(this).data('details'))" class="button btn-cart" title="Add to Cart"
                    type="button" data-details="" id="modal-add-to-cart">Add to Cart</button>
                  @if(session()->get('user_id')) <button data-details="" onclick="checkout($(this).data('details')); " class="button btn-buy" title="Add to Cart"
                    type="button" id="modal-add-buy-now">Buy Now</button>@endif

                </div>

              </div>
              <ul class="add-to-links">
                <li><a class="link-compare" href="#" onclick="$('#myModal').modal('hide');"><span>Continue Shopping</span></a></li>
                @if(session()->get('user_id'))<li> <a class="link-wishlist" data-id="" href="#" onclick="event.preventDefault();addWishlist($(this))"><span>Add to Wishlist</span></a></li>@endif
              </ul>
            </div>
            <div class="product-shop col-lg- col-sm-7 col-xs-12">

              <div class="brand"></div>
              <div class="product-name">
                <h1></h1>
              </div>
              <div class="rating">
                <div class="star-rating">
                  <span style="width:0%"></span>
                </div>
                <!-- <p class="rating-links"> <a href="#">453 ratings &amp; 61 reviews</a> <span class="separator">|</span>
                  <a href="#">Add Review</a>
                </p> -->
              </div>
              <div class="price-block">
                <div class="price-box">
                  <p class="availability in-stock"><span></span></p>
                  <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-modal"
                      class="price">  </span> </p>
                  <p class="old-price"> <span class="price-label">Regular Price:</span> 
                  <span class="price" id="product-old-price-modal"></span> </p>

                </div>
              </div>

              <!-- <div class="list">
                <div class="heading">Colors</div>
                <div class="points">
                  <span style="background-color:rgb(72, 118, 255)"></span>
                  <span style="background-color:rgb(192, 192, 192)"></span>
                  <span style="background-color:rgb(255, 195, 0)"></span>
                </div>
              </div> -->

              <!-- <div class="list">
                <div class="heading">Highlights</div>
                <div class="points">
                  <ul>
                    <li>Intel Celeron Dual Core</li>
                    <li>HDD Capacity 1 TB</li>
                    <li>RAM 4 GB DDR4</li>
                    <li>19.5 inch Display</li>
                  </ul>
                </div>
              </div> -->

              <div class="list">
                <div class="heading">Description</div>
                <div class="points" id="modal-description">
                </div>
              </div>

              <!-- <div class="list">
            <div class="heading">Seller</div>
            <div class="points">
            <h4>ThemesGround Retail</h4>
            <ul>
            <li>Free Wordwide Shipping</li>
            <li>30 Days Return Policy</li>
            <li>Member Discount</li>
            </ul>
            </div>
            </div>
             -->






            </div>
          </form>
        </div>


        <!-- similar products -->

        <!-- End similar products -->

      </div>
    </div>
  </div>
  <script>
    
    function addWishlist(ref)
    {
       @if(session()->get('token'))
        var token="{{session()->get('token')}}";
        $.ajax({
        url: '{{config('global.api')}}/addtowishlist',
        type: 'POST',
        beforeSend: function (xhr) {
            xhr.setRequestHeader('Authorization', 'Bearer '+token);
        },
        data: {product_id:ref.data('id')},
        success: function (response) {
            if(response.status==1)
            {
                Toastify({
                text: response.message,
                className: "info",
                close: true,
                style: {
                    background: "#1cad6a",
                }
                }).showToast();
                ref.addClass('active');
            }
        },
        error: function () { },
        });
       @else
       $('#myModalsignin').modal('show');
       @endif
    }
  </script>
  <script>
   function setProductDetails(data)
   {
    $('#myModal').modal('show');
    console.log(data);
     $('#myModal').find('img').attr('src',data.productimage.image_url);
     $('#myModal').find('.brand').html(data.brand_name);
     $('#myModal').find('.product-name').find('h1').html(data.product_name);
     var ratting=0;
     if(data.avg_ratting>0)
     {
       ratting=data.avg_ratting;
     }
    var totalStock= data.stocks.map((item)=>item.quantity).reduce((a, b) => a + b, 0);
     $('#myModal').find('.star-rating').find('span').css('width',`${ratting*2*10}%`);
     $('#myModal').find('.star-rating').find('span').html(`Rated <strong class="rating">${ratting}</strong> out of 5`);
     $('#myModal').find('.in-stock').find('span').html(`${totalStock} in stock`);
     $('#myModal').find('#product-price-modal').html(`AED ${data.discounted_price}`);
     $('#myModal').find('#product-old-price-modal').html(`AED ${data.product_price}`);
     $('#myModal').find('#modal-description').html(data.description);
     $('#myModal').find('.link-wishlist').data('id',data.id);
     $('#modal-add-to-cart').data('details',data);
     $('#modal-add-buy-now').data('details',data);
    }
  </script>
  <script>
    jQuery(document).ready(function () {
      jQuery('#rev_slider_4').show().revolution({
        dottedOverlay: 'none',
        delay: 5000,
        startwidth: 1170,
        startheight: 310,

        hideThumbs: 200,
        thumbWidth: 200,
        thumbHeight: 50,
        thumbAmount: 2,

        navigationType: 'thumb',
        navigationArrows: 'solo',
        navigationStyle: 'round',

        touchenabled: 'on',
        onHoverStop: 'on',

        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,

        spinner: 'spinner0',
        keyboardNavigation: 'off',

        navigationHAlign: 'center',
        navigationVAlign: 'bottom',
        navigationHOffset: 0,
        navigationVOffset: 20,

        soloArrowLeftHalign: 'left',
        soloArrowLeftValign: 'center',
        soloArrowLeftHOffset: 20,
        soloArrowLeftVOffset: 0,

        soloArrowRightHalign: 'right',
        soloArrowRightValign: 'center',
        soloArrowRightHOffset: 20,
        soloArrowRightVOffset: 0,

        shadow: 0,
        fullWidth: 'on',
        fullScreen: 'off',

        stopLoop: 'off',
        stopAfterLoops: -1,
        stopAtSlide: -1,

        shuffle: 'off',

        autoHeight: 'off',
        forceFullWidth: 'on',
        fullScreenAlignForce: 'off',
        minFullScreenHeight: 0,
        hideNavDelayOnMobile: 1500,

        hideThumbsOnMobile: 'off',
        hideBulletsOnMobile: 'off',
        hideArrowsOnMobile: 'off',
        hideThumbsUnderResolution: 0,

        hideSliderAtLimit: 0,
        hideCaptionAtLimit: 0,
        hideAllCaptionAtLilmit: 0,
        startWithSlide: 0,
        fullScreenOffsetContainer: ''
      });
    });

    function hasScrolled() {
      var st = $(this).scrollTop();

      // Make sure they scroll more than delta
      if (Math.abs(lastScrollTop - st) <= delta)
        return;

      // If they scrolled down and are past the navbar, add class .nav-up.
      // This is necessary so you never see what is "behind" the navbar.
      if (st > lastScrollTop && st > navbarHeight) {
        // Scroll Down
        $('header').removeClass('nav-down').addClass('nav-up');
      } else {
        // Scroll Up
        if (st + $(window).height() < $(document).height()) {
          $('header').removeClass('nav-up').addClass('nav-down');
        }
      }

      lastScrollTop = st;
    }





    jQuery(document).ready(($) => {
      $('.quantity').on('click', '.plus', function (e) {
        let $input = $(this).prev('input.qty');
        let val = parseInt($input.val());
        $input.val(val + 1).change();
      });

      $('.quantity').on('click', '.minus',
        function (e) {
          let $input = $(this).next('input.qty');
          var val = parseInt($input.val());
          if (val > 0) {
            $input.val(val - 1).change();
          }
        });
    });




    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function () {
      myInput.focus()
    })



    // $(document).ready(function(){
    //   $(".openModal").click(function(){
    //     $("#myModal").show();
    //   });
    //   $(".close").click(function(){
    //     $("#myModal").hide();
    //   });
    // });





    // // Get the modal
    // var modal = document.getElementById("myModal");

    // // Get the button that opens the modal
    // var btn = document.getElementsByClassName("openModal");

    // // Get the <span> element that closes the modal
    // var span = document.getElementsByClassName("close")[0];

    // // When the user clicks the button, open the modal
    // btn[0].onclick = function () {
    //   modal.style.display = "block";
    // };

    // btn[1].onclick = function () {
    //   modal.style.display = "block";
    // };

    // // When the user clicks on <span> (x), close the modal
    // span.onclick = function () {
    //   modal.style.display = "none";
    // };

    // // When the user clicks anywhere outside of the modal, close it
    // window.onclick = function (event) {
    //   if (event.target == modal) {
    //     modal.style.display = "none";
    //   }
    // };







    /*
    Credits:
    https://github.com/marcaube/bootstrap-magnify
    */


    ! function ($) {

      "use strict"; // jshint ;_;


      /* MAGNIFY PUBLIC CLASS DEFINITION
       * =============================== */

      var Magnify = function (element, options) {
        this.init('magnify', element, options)
      }

      Magnify.prototype = {

        constructor: Magnify

        ,
        init: function (type, element, options) {
          var event = 'mousemove',
            eventOut = 'mouseleave';

          this.type = type
          this.$element = $(element)
          this.options = this.getOptions(options)
          this.nativeWidth = 0
          this.nativeHeight = 0

          this.$element.wrap('<div class="magnify" \>');
          this.$element.parent('.magnify').append('<div class="magnify-large" \>');
          this.$element.siblings(".magnify-large").css("background", "url('" + this.$element.attr("src") +
            "') no-repeat");

          this.$element.parent('.magnify').on(event + '.' + this.type, $.proxy(this.check, this));
          this.$element.parent('.magnify').on(eventOut + '.' + this.type, $.proxy(this.check, this));
        }

        ,
        getOptions: function (options) {
          options = $.extend({}, $.fn[this.type].defaults, options, this.$element.data())

          if (options.delay && typeof options.delay == 'number') {
            options.delay = {
              show: options.delay,
              hide: options.delay
            }
          }

          return options
        }

        ,
        check: function (e) {
          var container = $(e.currentTarget);
          var self = container.children('img');
          var mag = container.children(".magnify-large");

          // Get the native dimensions of the image
          if (!this.nativeWidth && !this.nativeHeight) {
            var image = new Image();
            image.src = self.attr("src");

            this.nativeWidth = image.width;
            this.nativeHeight = image.height;

          } else {

            var magnifyOffset = container.offset();
            var mx = e.pageX - magnifyOffset.left;
            var my = e.pageY - magnifyOffset.top;

            if (mx < container.width() && my < container.height() && mx > 0 && my > 0) {
              mag.fadeIn(100);
            } else {
              mag.fadeOut(100);
            }

            if (mag.is(":visible")) {
              var rx = Math.round(mx / container.width() * this.nativeWidth - mag.width() / 2) * -1;
              var ry = Math.round(my / container.height() * this.nativeHeight - mag.height() / 2) * -1;
              var bgp = rx + "px " + ry + "px";

              var px = mx - mag.width() / 2;
              var py = my - mag.height() / 2;

              mag.css({
                left: px,
                top: py,
                backgroundPosition: bgp
              });
            }
          }

        }
      }


      /* MAGNIFY PLUGIN DEFINITION
       * ========================= */

      $.fn.magnify = function (option) {
        return this.each(function () {
          var $this = $(this),
            data = $this.data('magnify'),
            options = typeof option == 'object' && option
          if (!data) $this.data('tooltip', (data = new Magnify(this, options)))
          if (typeof option == 'string') data[option]()
        })
      }

      $.fn.magnify.Constructor = Magnify

      $.fn.magnify.defaults = {
        delay: 0
      }


      /* MAGNIFY DATA-API
       * ================ */

      $(window).on('load', function () {
        $('[data-toggle="magnify"]').each(function () {
          var $mag = $(this);
          $mag.magnify()
        })
      })

    }(window.jQuery);
  </script>

 
                 {{-- @if(!empty(session()->all()['token'])) --}}

  <script type="text/javascript">
    $(document).ready(function () {
      //Fade in delay for the background overlay (control timing here)
      $("#bkgOverlay").delay(2800).fadeIn(400);
      //Fade in delay for the popup (control timing here)
      $("#delayedPopup").delay(3000).fadeIn(400);

      //Hide dialouge and background when the user clicks the close button
      $("#btnClose").click(function (e) {
        HideDialog();
        e.preventDefault();
      });
    });
    //Controls how the modal popup is closed with the close button
    function HideDialog() {
      $("#bkgOverlay").fadeOut(400);
      $("#delayedPopup").fadeOut(300);
    }
  </script>

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
 localStorage.setItem("cartupdate", 1);
      }
     
     },
      error: function(xhr) {
      
  console.log(xhr.responseText); // this line will save you tons of hours while debugging
 // do something here because of error
}
 };
$.ajax(setting);
});
  </script>


  <script>
    function addCart(product,qty)
    {
      if(product.is_variation==1)
      {
        window.location='{{url("product-detail")}}?id='+product.id;
        return;
      }
      var tax=0;
      if(product.tax_type=="amount")
      {
        tax=product.tax;
      }else{
        tax=product.discounted_price*product.tax/100;
      }
      var stocks=product.stocks.map(item=>item.quantity).reduce((a, b) => a + b, 0);
      if(!(stocks>0))
      {
             Toastify({
                        text: "Not enough stocks",
                        className: "info",
                        close: true,
                        style: {
                            background: "red",
                        }
                        }).showToast();
      }
           var setting={
                        url:'{{url("/add-to-cart")}}',
                        dataType:'json',
                        type:'post',
                        headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          },
                        data: { 
                            product_id: product.id,
                            product_name: product.product_name,
                            qty: qty,
                            price: product.discounted_price,
                            shipping_cost: product.shipping_cost,
                            tax: tax,
                            image: product.productimage.image_url
                        },
                      
                        success:function(response){
                          // console.log(response);

                          if(response.status==1){
                            Toastify({
                        text: "Cart Item Added",
                        className: "info",
                        close: true,
                        style: {
                            background: "#1cad6a",
                        }
                        }).showToast();
                        localStorage.setItem("cartupdate", 1);
                          }
                        
                        },
                          error: function(xhr) {
                          
                      console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                    }
                    };
            $.ajax(setting);
    }
       function checkout(product)
    {
      if(product.is_variation==1)
      {
        window.location='{{url("product-detail")}}?id='+product.id;
        return;
      }
      var tax=0;
      if(product.tax_type=="amount")
      {
        tax=product.tax;
      }else{
        tax=product.discounted_price*product.tax/100;
      }
           var setting={
                        url:'{{url("/add-to-cart")}}',
                        dataType:'json',
                        type:'post',
                        headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          },
                        data: { 
                            product_id: product.id,
                            product_name: product.product_name,
                            qty: 1,
                            price: product.discounted_price,
                            shipping_cost: product.shipping_cost,
                            tax: tax,
                            image: product.productimage.image_url
                        },
                      
                        success:function(response){
                          // console.log(response);

                          if(response.status==1){
                            Toastify({
                        text: "Cart Item Added",
                        className: "info",
                        close: true,
                        style: {
                            background: "#1cad6a",
                        }
                        }).showToast();
                         localStorage.setItem("cartupdate", 1);
                        window.location="{{url('checkout')}}";
                          }
                        
                        },
                          error: function(xhr) {
                          
                      console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                    }
                    };
            $.ajax(setting);
    }
  </script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    new Splide( '.splide', {
      type: 'slide',
      perPage: 7,
      perMove: 1,
      gap: 0,
      autoplay: false,
      interval: 3000,
      pauseOnHover: true,
      breakpoints: {
        992: {
          perPage: 3,
        },
        768: {
          perPage: 2,
        },
        576: {
          perPage: 3,
        },
      }
    } ).mount();
  });
</script>
@endsection
       