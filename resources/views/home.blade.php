 @extends('layouts.app')
 @section('content')
     @php
         use Illuminate\Support\Str;
     @endphp
     <style>
         .colorcls {
             color: #000;
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
                                 @if (!empty($finalData['main_data']['slider']))
                                     @foreach ($finalData['main_data']['slider'] as $banner)
                                         <li data-transition='random' data-slotamount='7' data-masterspeed='1000'
                                             data-thumb='{{ $banner['image'] }}'>
                                             <img src='{{ $banner['image'] }}' data-bgfit='cover' data-bgrepeat='no-repeat'
                                                 alt="banner" />
                                             <div class="container">
                                                 <div class="content_slideshow">
                                                     <div class="row">
                                                         <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
                                                         <div class="col-lg-9 col-sm-9 col-md-9">
                                                             <div class="info">
                                                                 <div class='tp-caption ExtraLargeTitle sft  tp-resizeme '
                                                                     data-endspeed='500' data-speed='500' data-start='1100'
                                                                     data-easing='Linear.easeNone' data-splitin='none'
                                                                     data-splitout='none' data-elementdelay='0.1'
                                                                     data-endelementdelay='0.1'
                                                                     style='z-index:2; white-space:nowrap;'>
                                                                     <span>{{ $banner['title1'] }}</span>
                                                                 </div>
                                                                 <div class='tp-caption LargeTitle sfl  tp-resizeme '
                                                                     data-endspeed='500' data-speed='500' data-start='1300'
                                                                     data-easing='Linear.easeNone' data-splitin='none'
                                                                     data-splitout='none' data-elementdelay='0.1'
                                                                     data-endelementdelay='0.1'
                                                                     style='z-index:3; white-space:nowrap;'><span
                                                                         style="font-weight:normal; display:block">{{ $banner['title2'] }}</span>
                                                                     {{ $banner['title3'] }}
                                                                 </div>
                                                                 @if ($banner['btn_name'])
                                                                     <div class='tp-caption sfb  tp-resizeme '
                                                                         data-endspeed='500' data-speed='500'
                                                                         data-start='1500' data-easing='Linear.easeNone'
                                                                         data-splitin='none' data-splitout='none'
                                                                         data-elementdelay='0.1' data-endelementdelay='0.1'
                                                                         style='z-index:4; white-space:nowrap;'>

                                                                         <a href='{{ $banner['btn_link'] }}'
                                                                             class="buy-btn">{{ $banner['btn_name'] }}</a>
                                                                     </div>
                                                                 @endif
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





     <!-- ============================================== SCROLL TABS ============================================== -->
     <div id="product-tabs-slider" class="scroll-tabs">
         <div class="more-info-tab clearfix">
             <ul class="nav nav-tabs nav-tab-line container my-slider">
                 @foreach ($finalData['main_data']['category'] as $category)
                     <li class="{{ $loop->iteration == 1 ? 'active' : '' }}" onClick="toggleActive($(this))"> <a
                             data-transition-type="backSlide" href="#cat_{{ $category['id'] }}" data-toggle="tab">
                             <img src="{{ $category['image_url'] }}" alt="{{ $category['category_name'] }}"> <span>
                                 {{ $category['category_name'] }}</span> </a> </li>
                 @endforeach
             </ul>
             <!-- /.nav-tabs -->
         </div>

         <div class="tab-content container">
             @foreach ($finalData['category_with_product']['category'] as $cat_product)
                 <div class="tab-pane {{ $loop->iteration == 1 ? 'active' : '' }}" id="cat_{{ $cat_product['id'] }}">
                     <div class="product-slider products-grid">
                         <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                             @foreach ($cat_product['products'] as $product)
                                 <!-- item -->
                                 <div class="item item-carousel">
                                     <div class="item-inner">
                                         <div class="item-img">
                                             <div class="item-img-info">
                                                 <a class="product-image"
                                                     href="{{ url('product-detail') }}?id={{ $product['id'] }}">
                                                     <img alt="" src="{{ $product['productimage']['image_url'] }}">
                                                 </a>
                                                 <div class="box-hover">
                                                     <ul class="add-to-links">
                                                         <li><a class="link-quickview openModal"
                                                                 data-details="{{ json_encode($product) }}"
                                                                 onClick="setProductDetails($(this).data('details'))"></a>
                                                         </li>
                                                         <li><a class="link-wishlist add-to-wishlist {{ $product['is_wishlist'] ? 'active' : '' }}"
                                                                 data-cpidw="{{ $product['id'] }}"
                                                                 data-id="{{ $product['id'] }}"
                                                                 onclick="event.preventDefault();addWishlist($(this))"></li>
                                                     </ul>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="item-info">
                                             <div class="info-inner">
                                                 <div class="item-title">
                                                     <a href="{{ url('product-detail') }}?id={{ $product['id'] }}">
                                                         {{ $product['product_name'] }}
                                                     </a>
                                                 </div>
                                                 <div class="brand">
                                                     @if ($product['product_brand'])
                                                         {{ $product['product_brand']['brand_name'] }}
                                                     @endif
                                                 </div>
                                                 @php
                                                     $avg_rating = $product['avg_ratting'] ?? 0;
                                                 @endphp
                                                 <div class="star-rating">
                                                     <span style="width:{{ $avg_rating * 2 * 10 }}%">
                                                         Rated
                                                         <strong class="rating">{{ $avg_rating }}</strong>
                                                         out of 5
                                                     </span>
                                                 </div>
                                                 <div class="item-content">
                                                     <div class="item-price">
                                                         <div class="price-box"> <span class="regular-price"> <span
                                                                     class="price">AED
                                                                     {{ number_format($product['discounted_price'], 2) }}</span>
                                                             </span> </div>
                                                     </div>
                                                     <span
                                                         style="font-size: 12px">{{ $product['delivery_message'] }}</span>
                                                     <div class="count-number">
                                                         <form id='myform' method='POST' class='quantity'
                                                             action='#'>
                                                             <input type='button' value='-' class='qtyminus minus'
                                                                 field='quantity' />
                                                             <input type='text' name='quantity' value="1"
                                                                 class='qty' />
                                                             <input type='button' value='+' class='qtyplus plus'
                                                                 field='quantity' />
                                                         </form>
                                                     </div>
                                                     <div class="action">
                                                         <button class="button btn-cart" type="button" title=""
                                                             data-original-title="Add to Cart"
                                                             data-details="{{ json_encode($product) }}"
                                                             onclick="addCart($(this).data('details'),$(this).closest('.item').find('.qty').val())"><i
                                                                 class="fa fa-shopping-basket"></i></button>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- /.products -->
                                 </div>
                                 <!-- /.item -->
                             @endforeach
                         </div>
                         <!-- /.home-owl-carousel -->
                     </div>
                     <!-- /.product-slider -->
                 </div>
                 <!-- /.tab-pane -->
             @endforeach

         </div>
         <!-- /.tab-content -->
     </div>
     <!-- /.scroll-tabs -->
     <!-- ============================================== SCROLL TABS : END ============================================== -->
     <div class="container">
         <div class="wide-banner">
             <div class="row">
                 @foreach ($finalData['main_data']['top_banner'] as $top_banner)
                     <div class="figure banner-with-effects effect-sadie1 banner-width  with-button"><img
                             src="{{ $top_banner['image'] }}" alt="">

                     </div>
                 @endforeach
             </div>
         </div>
     </div>



     <div class="container-fluid qwre">
         <div class="container">
             <div class="row">
                 @if (!empty($finalData['main_data']['offer_banner']))
                     @foreach ($finalData['main_data']['offer_banner'] as $offer_banner)
                         <div class="bb5g">
                             <div class="yuhd">
                                 <a href="@if ($offer_banner['product_id'] != 0) {{ url('product-detail') }}?id={{ $offer_banner['product_id'] }} @elseif($offer_banner['cat_id'] != 0){{ url('products') }}?cat_id={{ $offer_banner['cat_id'] }} @endif"
                                     style="text-decoration:none;"><img src="{{ $offer_banner['image'] }}"
                                         alt="" />
                             </div>
                             <div class="uyd">
                                 <h1 class="colorcls">{{ $offer_banner['title'] }}</h1>
                                 <h2 class="colorcls">
                                     {{ isset($offer_banner['heading']) ? \Illuminate\Support\Str::limit($offer_banner['heading'], 25, '...') : '' }}
                                 </h2></a>
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
                                 @foreach ($finalData['main_data']['bestsellers'] as $featured_products)
                                     <!-- Item -->
                                     <div class="item">
                                         <div class="item-inner">
                                             <div class="item-img">
                                                 <div class="item-img-info">
                                                     <a class="product-image" title=""
                                                         href="{{ url('product-detail') }}?id={{ $featured_products['id'] }}">
                                                         <img alt=""
                                                             src="{{ $featured_products['productimage']['image_url'] }}">
                                                     </a>
                                                     <div class="box-hover">
                                                         <ul class="add-to-links">
                                                             <li><a class="link-quickview openModal" href="#"
                                                                     data-details="{{ json_encode($featured_products) }}"
                                                                     onClick="setProductDetails($(this).data('details'))"></a>
                                                             </li>
                                                             <li><a class="link-wishlist add-to-wishlist {{ $featured_products['is_wishlist'] ? 'active' : '' }}"
                                                                     data-id="{{ $featured_products['id'] }}"
                                                                     onclick="event.preventDefault();addWishlist($(this))"></a>
                                                             </li>
                                                         </ul>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="info-inner">
                                                     <div class="item-title">
                                                         <a title="{{ $featured_products['product_name'] }}"
                                                             href="{{ url('product-detail') }}?id={{ $featured_products['id'] }}">{{ $featured_products['product_name'] }}</a>
                                                     </div>
                                                     <div class="brand">
                                                         {{ $featured_products['brand'] ? $featured_products['brand']['brand_name'] : '' }}
                                                     </div>
                                                     <div class="item-content">
                                                         @php
                                                             $avg_rating = 0;
                                                             if (!empty($featured_products['rattings'])) {
                                                                 $avg_rating = $featured_products['rattings'][0]['avg_ratting'];
                                                             }
                                                             
                                                         @endphp
                                                         <div class="star-rating">
                                                             <span style="width:{{ $avg_rating * 2 * 10 }}%">Rated <strong
                                                                     class="rating">{{ $avg_rating }}</strong> out of
                                                                 5</span>
                                                         </div>
                                                         <div class="item-price">
                                                             <div class="price-box">
                                                                 <span class="regular-price">
                                                                     <span class="price">AED
                                                                         {{ number_format($featured_products['discounted_price']) }}</span>
                                                                 </span>
                                                             </div>
                                                         </div>
                                                         <div class="count-number">
                                                             <form id='myform' method='POST' class='quantity'
                                                                 action='#'>
                                                                 <input type='button' value='-'
                                                                     class='qtyminus minus' field='quantity' />
                                                                 <input type='text' name='quantity' value="1"
                                                                     class='qty' />
                                                                 <input type='button' value='+'
                                                                     class='qtyplus plus' field='quantity' />
                                                             </form>
                                                         </div>
                                                         <div class="action">
                                                             <div class="action">
                                                                 <button class="button btn-cart" type="button"
                                                                     title="" data-original-title="Add to Cart"
                                                                     data-details="{{ json_encode($featured_products) }}"
                                                                     onclick="addCart($(this).data('details'),$(this).closest('info-inner').find('.qty').val())"><i
                                                                         class="fa fa-shopping-basket"></i></button>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- End Item -->
                                 @endforeach
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
                 @foreach ($finalData['main_data']['deal_banner'] as $deal_banner)
                     <div class="col-12 col-lg-4 col-md-6">
                         <div class="position-relative">
                             <!-- Background -->
                             <img class="img-fluid hover-zoom" src="{{ $deal_banner['image'] }}" alt="">
                             <!-- Body -->
                             <div class="banner-text">
                                 <h6 class="text-white">{{ $deal_banner['title'] }}</h6>
                                 <!-- Heading -->
                                 <h3 class="text-white">{{ $deal_banner['description'] }}<br>
                                     Deals</h3>
                                 <!-- Link -->
                                 @if ($deal_banner['btn_name'])
                                     <a class="more-link text-dark"
                                         href="{{ $deal_banner['btn_link'] }}">{{ $deal_banner['btn_name'] }} </a>
                                 @endif
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
                 <div class="col-md-6 col-sm-3 col-lg-3 res-wid">
                     <div class="utgd">
                         <h4>Hot Deal <br />Product</h4>
                         @if (!empty($finalData['main_data']['hot_products_limited']))
                             @foreach ($finalData['main_data']['hot_products_limited'] as $product_img)
                                 <a href="{{ url('product-detail') }}?id={{ $product_img['id'] }}">
                                     <img src="{{ $product_img['productimage']['image_url'] }}" alt="" />
                                 </a>
                             @endforeach
                         @endif
                     </div>
                 </div>
                 <div class="col-md-6 col-sm-3 col-lg-3 res-wid">
                     <div class="utgd1">
                         <h4>New <br> Arrivals</h4>
                         @if ($finalData['main_data']['new_products'] && count($finalData['main_data']['new_products']) > 4)
                             @php
                                 $arr = $finalData['main_data']['new_products'];
                                 $limitedArray = array_slice($arr, 0, 4);
                             @endphp
                             @foreach ($limitedArray as $new_arrival)
                                 <a href="{{ url('product-detail') }}?id={{ $new_arrival['id'] }}">
                                     <img src="{{ $new_arrival['productimage']['image_url'] }}" alt="" />
                                     <h6>{{ $new_arrival['product_name'] }}</h6>
                                 </a>
                             @endforeach
                         @endif
                         <div class="iu5d">
                             <a href="{{ url('products') }}?new_arrival=1">See all offers</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 col-sm-3 col-lg-3 res-wid">
                     <div class="utgd1">
                         <h4>Bestseller Product</h4>
                         @if ($finalData['main_data']['bestsellers'] && count($finalData['main_data']['bestsellers']) > 4)
                             @php
                                 $arr_best = $finalData['main_data']['bestsellers'];
                                 $limitedArrayBest = array_slice($arr_best, 0, 4);
                             @endphp
                             @foreach ($limitedArrayBest as $bestsellers)
                                 @php
                                     if (strlen($bestsellers['product_name']) > 30) {
                                         $string = substr($bestsellers['product_name'], 0, 20) . '...';
                                         $title = $string;
                                     } else {
                                         $title = $bestsellers['product_name'];
                                     }
                                 @endphp
                                 <a href="{{ url('product-detail') }}?id={{ $bestsellers['id'] }}">
                                     <img src="{{ $bestsellers['productimage']['image_url'] }}" alt="" />
                                     <h6>{{ $title }}</h6>
                                 </a>
                             @endforeach
                         @endif
                         <div class="iu5d">
                             <a href="{{ url('products') }}?best_seller=1">See all offers</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 col-sm-3 col-lg-3 res-wid">
                     <div class="utgd1">
                         <h4>Featured Product</h4>
                         @if ($finalData['main_data']['featured_products'] && count($finalData['main_data']['featured_products']) > 4)
                             @php
                                 $arr_featured = $finalData['main_data']['featured_products'];
                                 $limitedArrayFeatured = array_slice($arr_featured, 0, 4);
                             @endphp
                             @foreach ($limitedArrayFeatured as $featured_products)
                                 @php
                                     if (strlen($featured_products['product_name']) > 30) {
                                         $string = substr($featured_products['product_name'], 0, 20) . '...';
                                         $title = $string;
                                     } else {
                                         $title = $featured_products['product_name'];
                                     }
                                 @endphp
                                 <a href="{{ url('product-detail') }}?id={{ $featured_products['id'] }}">
                                     <img src="{{ $featured_products['productimage']['image_url'] }}" alt="" />
                                     <h6>{{ $title }}</h6>
                                 </a>
                             @endforeach
                         @endif

                         <div class="iu5d">
                             <a href="{{ url('products') }}?featured_product=1">See all offers</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <div class="ads-block" style="background-image: url({{ $finalData['main_data']['ad_block']['image_url'] }});">
         <div class="container">
             <div class="row">
                 <div class="banner-text-big"><span>{{ $finalData['main_data']['ad_block']['title'] }}</span> <br>
                     {{ $finalData['main_data']['ad_block']['title1'] }}</div>
                 <a href="{{ $finalData['main_data']['ad_block']['btn_link'] }}" style="text-decoration:none;"><button
                         class="shop" title="Subscribe"
                         type="submit"><span>{{ $finalData['main_data']['ad_block']['btn_name'] }}</span></button></a>
             </div>
         </div>
     </div>
     <section class="bb5b">
         <div class="container">
             <div class="row">
                 <div class="col-md-6 col-sm-4 col-lg-4 res-wid">
                     <div class="bv5v">
                         <h3>Sales</h3>
                         <div class="products-grid yh32d">
                             @if (!empty($finalData['main_data']['sale']))
                                 @foreach ($finalData['main_data']['sale'] as $sale_data)
                                     <div class="item">
                                         <div class="item-inner">
                                             <div class="item-img">
                                                 <div class="item-img-info">
                                                     <a href="{{ url('product-detail') }}?id={{ $sale_data['id'] }}"
                                                         title="{{ $sale_data['product_name'] }}" class="product-image">
                                                         <img src="{{ $sale_data['productimage']['image_url'] }}"
                                                             alt="{{ $sale_data['product_name'] }}"> </a>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="info-inner">
                                                     <div class="item-title"> <a
                                                             href="{{ url('product-detail') }}?id={{ $sale_data['id'] }}"
                                                             title="{{ $sale_data['product_name'] }}">{{ $sale_data['product_name'] }}</a>
                                                     </div>
                                                     <div class="brand">
                                                         {{ $sale_data['brand'] ? $sale_data['brand']['brand_name'] : '' }}
                                                     </div>
                                                     <div class="item-content">
                                                         @php
                                                             $avg_rating = 0;
                                                             if (!empty($sale_data['rattings'])) {
                                                                 $avg_rating = $sale_data['rattings'][0]['avg_ratting'];
                                                             }
                                                             
                                                         @endphp
                                                         <div class="star-rating">
                                                             <span style="width:{{ $avg_rating * 2 * 10 }}%">Rated <strong
                                                                     class="rating">{{ $avg_rating }}</strong>
                                                                 out of 5</span>
                                                         </div>
                                                         <div class="item-price">
                                                             <div class="price-box"> <span class="regular-price"> <span
                                                                         class="price">AED
                                                                         {{ number_format($sale_data['product_price'], 2) }}</span>
                                                                 </span> <span class="old-price">
                                                                     <span class="price">AED
                                                                         {{ number_format($sale_data['discounted_price'], 2) }}</span></span>
                                                             </div>
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
                 <div class="col-md-6 col-sm-4 col-lg-4 res-wid">
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
                                 @foreach ($finalData['main_data']['slipping_banner'] as $sliding)
                                     <div class="item  @if ($loop->iteration == 1) active @endif">
                                         <img src="{{ $sliding['image'] }}" alt="" />
                                     </div>
                                 @endforeach
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 col-sm-4 col-lg-4 res-wid">
                     <div class="bv5v">
                         <h3>top rated</h3>
                         <div class="products-grid yh32d">
                             @if (!empty($finalData['main_data']['top_rated']))
                                 @foreach ($finalData['main_data']['top_rated'] as $top_rated)
                                     <div class="item">
                                         <div class="item-inner">
                                             <div class="item-img">
                                                 <div class="item-img-info">
                                                     <a href="{{ url('product-detail') }}?id={{ $top_rated['id'] }}"
                                                         title="{{ $top_rated['product_name'] }}" class="product-image">
                                                         <img src="{{ $top_rated['productimage']['image_url'] }}"
                                                             alt="{{ $top_rated['product_name'] }}"> </a>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="info-inner">
                                                     <div class="item-title" style="max-height: 50px;  ">
                                                         <a href="{{ url('product-detail') }}?id={{ $top_rated['id'] }}"
                                                             title="{{ $top_rated['product_name'] }}">
                                                             {{ $top_rated['product_name'] }}
                                                         </a>
                                                     </div>


                                                     <div class="brand">
                                                         {{ $top_rated['brand'] ? $top_rated['brand']['brand_name'] : '' }}
                                                     </div>
                                                     <div class="item-content">
                                                         @php
                                                             $avg_rating = 0;
                                                             if (!empty($top_rated['rattings'])) {
                                                                 $avg_rating = $top_rated['rattings'][0]['avg_ratting'];
                                                             }
                                                             
                                                         @endphp
                                                         <div class="star-rating">
                                                             <span style="width:{{ $avg_rating * 2 * 10 }}%">Rated
                                                                 <strong class="rating">{{ $avg_rating }}</strong> out
                                                                 of 5</span>
                                                         </div>
                                                         <div class="item-price">
                                                             <div class="price-box"> <span class="regular-price"> <span
                                                                         class="price">AED
                                                                         {{ number_format($top_rated['product_price'], 2) }}</span>
                                                                 </span> <span class="old-price"><span class="price">AED
                                                                         {{ number_format($top_rated['discounted_price'], 2) }}</span></span>
                                                             </div>
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
                 @if (!empty($finalData['main_data']['bottom_banner']))
                     @foreach ($finalData['main_data']['bottom_banner'] as $bottom_banner)
                         <div class="article-home">
                             <div class="article-home__ie parallax-parent"> <img src="{{ $bottom_banner['image'] }}"
                                     class="parallax-child--second" alt=""> </div>
                             <div class="article-home__content">
                                 <div class="inside">
                                     <h4 class="title">{{ $bottom_banner['title'] }}</h4>
                                     @if ($bottom_banner['btn_name'])
                                         <a href="{{ $bottom_banner['btn_link'] }}" class="link">
                                             {{ $bottom_banner['btn_name'] }} <i class="fa fa-chevron-circle-right"></i>
                                         </a>
                                     @endif
                                 </div>
                             </div>
                         </div>
                     @endforeach
                 @endif
             </div>
         </div>
     </section>
     @php
         $addhome = topOfferCommon('home');
     @endphp
     @if ($addhome)
         <section class="banner-row irf index-banner-pad">
             <div class="container">
                 <div class="row">
                     <div class="col-12 col-lg-12 col-md-12">
                         <div class="position-relative">
                             <!-- Background -->
                             <a href="{{ $addhome->btn_link }}" target="_black">
                                 <img class="img-fluid hover-zoom" src="{{ $addhome->image }}" alt="">
                             </a>
                             <!-- Body -->

                         </div>
                     </div>


                 </div>
             </div>
         </section>
     @endif
     <!-- End Latest Blog -->

     <div class="container-fluid qwre">
         <div class="container">
             <div class="row">
                 @if (!empty($finalData['main_data']['offer_banner']))
                     @foreach ($finalData['main_data']['offer_banner'] as $offer_banner)
                         <div class="bb5g">
                             <div class="yuhd">
                                 <a href="@if ($offer_banner['product_id'] != 0) {{ url('products-detail') }}?id={{ $offer_banner['product_id'] }} @elseif($offer_banner['cat_id'] != 0){{ url('products') }}?cat_id={{ $offer_banner['cat_id'] }} @endif"
                                     style="text-decoration:none;"><img src="{{ $offer_banner['image'] }}"
                                         alt="" />
                             </div>
                             <div class="uyd">
                                 <h1 class="colorcls">{{ $offer_banner['title'] }}</h1>
                                 <h2 class="colorcls">
                                     {{ isset($offer_banner['heading']) ? \Illuminate\Support\Str::limit($offer_banner['heading'], 25, '...') : '' }}
                                 </h2></a>
                             </div>
                         </div>
                     @endforeach
                 @endif
             </div>
         </div>
     </div>
 @endsection
 @section('script')
     <script>
         function addWishlist(ref) {
             @if (session()->get('token'))
                 var token = "{{ session()->get('token') }}";
                 $.ajax({
                     url: '{{ config('global.api') }}/addtowishlist',
                     type: 'POST',
                     beforeSend: function(xhr) {
                         xhr.setRequestHeader('Authorization', 'Bearer ' + token);
                     },
                     data: {
                         product_id: ref.data('id')
                     },
                     success: function(response) {
                         if (response.status == 1) {
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
                     error: function() {},
                 });
             @else
                 $('#myModalsignin').modal('show');
             @endif
         }
     </script>
     <script>
         jQuery(document).ready(function() {
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
             $('.quantity').on('click', '.plus', function(e) {
                 let $input = $(this).prev('input.qty');
                 let val = parseInt($input.val());
                 $input.val(val + 1).change();
             });

             $('.quantity').on('click', '.minus',
                 function(e) {
                     let $input = $(this).next('input.qty');
                     var val = parseInt($input.val());
                     if (val > 0) {
                         $input.val(val - 1).change();
                     }
                 });
         });




         var myModal = document.getElementById('myModal')
         var myInput = document.getElementById('myInput')

         myModal.addEventListener('shown.bs.modal', function() {
                 myInput.focus()
             })









             /*
             Credits:
             https://github.com/marcaube/bootstrap-magnify
             */


             ! function($) {

                 "use strict"; // jshint ;_;


                 /* MAGNIFY PUBLIC CLASS DEFINITION
                  * =============================== */

                 var Magnify = function(element, options) {
                     this.init('magnify', element, options)
                 }

                 Magnify.prototype = {

                     constructor: Magnify

                         ,
                     init: function(type, element, options) {
                             var event = 'mousemove',
                                 eventOut = 'mouseleave';

                             this.type = type
                             this.$element = $(element)
                             this.options = this.getOptions(options)
                             this.nativeWidth = 0
                             this.nativeHeight = 0

                             this.$element.wrap('<div class="magnify" \>');
                             this.$element.parent('.magnify').append('<div class="magnify-large" \>');
                             this.$element.siblings(".magnify-large").css("background", "url('" + this.$element.attr(
                                     "src") +
                                 "') no-repeat");

                             this.$element.parent('.magnify').on(event + '.' + this.type, $.proxy(this.check, this));
                             this.$element.parent('.magnify').on(eventOut + '.' + this.type, $.proxy(this.check, this));
                         }

                         ,
                     getOptions: function(options) {
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
                     check: function(e) {
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
                                 var rx = Math.round(mx / container.width() * this.nativeWidth - mag.width() / 2) * -
                                     1;
                                 var ry = Math.round(my / container.height() * this.nativeHeight - mag.height() /
                                         2) * -
                                     1;
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

                 $.fn.magnify = function(option) {
                     return this.each(function() {
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

                 $(window).on('load', function() {
                     $('[data-toggle="magnify"]').each(function() {
                         var $mag = $(this);
                         $mag.magnify()
                     })
                 })

             }(window.jQuery);
     </script>


     {{-- @if (!empty(session()->all()['token'])) --}}

     <script type="text/javascript">
         $(document).ready(function() {
             //Fade in delay for the background overlay (control timing here)
             $("#bkgOverlay").delay(2800).fadeIn(400);
             //Fade in delay for the popup (control timing here)
             $("#delayedPopup").delay(3000).fadeIn(400);

             //Hide dialouge and background when the user clicks the close button
             $("#btnClose").click(function(e) {
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
         $('.cart_button_home').click(function(e) {

             e.preventDefault();
             var setting = {
                 url: '{{ url('/add-to-cart') }}',
                 dataType: 'json',
                 type: 'post',
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

                 success: function(response) {
                     // console.log(response);

                     if (response.status == 1) {
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
         document.addEventListener('DOMContentLoaded', function() {
             new Splide('.splide', {
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
             }).mount();
         });
     </script>
     <script>
         function toggleActive(ref) {
             $('.slick-slide').each(function() {
                 $(this).removeClass('active');
             });
         }
     </script>
 @endsection
