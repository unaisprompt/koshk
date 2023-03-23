@extends('layouts.app')
@section('content')   

    <div class="container-fluid">
      <div class="row">
        <!-- Slider -->
        <div class="home-slider5">
          <div id="thmg-slideshow" class="thmg-slideshow">
            <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
              <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                <ul>
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

                </ul>
                <div class="tp-bannertimer"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
{{-- {{dd($finalData)}} --}}
    <!-- ============================================== INFO BOXES ============================================== -->
    <!--<div class="info-boxes wow fadeInUp">
          <div class="container info-boxes-inner">
            <div class="row">
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <img src="images/moneyback.png" alt="" />
                      <h4 class="info-box-heading green">money back</h4>
                    </div>
                  </div>
                  <h6 class="text">30 Days Money Back Guarantee</h6>
                </div>
              </div>
              
              
              <div class="hidden-md col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <img src="images/free-shipping.jpg" alt="" />
                      <h4 class="info-box-heading green">free shipping</h4>
                    </div>
                  </div>
                  <h6 class="text">Shipping on orders over $99</h6>
                </div>
              </div>
           
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <img src="images/SpecialSale.png" alt="" />
                      <h4 class="info-box-heading green">Special Sale</h4>
                    </div>
                  </div>
                  <h6 class="text">Extra $5 off on all items </h6>
                </div>
              </div>
             
            </div>
           
          </div>
        </div> -->
    <!-- /.info-boxes-inner -->





    <!-- ============================================== SCROLL TABS ============================================== -->
    <div id="product-tabs-slider" class="scroll-tabs">
      <div class="more-info-tab clearfix">
        <ul class="nav nav-tabs nav-tab-line container">
          @foreach($finalData['main_data']['category'] as $category)
          <li class="{{$loop->iteration == 1 ? 'active': ''}}"> <a data-transition-type="backSlide" href="#cat_{{$category['id']}}" data-toggle="tab"> <img
                src="{{$category['image_url']}}" alt="mobiles"> <span> {{$category['category_name']}}</span> </a> </li>
                @endforeach
        </ul>
        <!-- /.nav-tabs -->
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
                    <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt=""
                          src="{{$product['productimage']['image_url']}}"> </a>
                      <div class="box-hover">
                        <ul class="add-to-links">
                          <li><a class="link-quickview openModal"></a></li>
                          <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                         </ul>
                      </div>

                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a href="product_detail.html">{{$product['product_name']}}</a> </div>
                      {{-- <div class="brand">Datsun</div> --}}
                      <div class="star-rating">
                        <span style="width:60%">Rated <strong class="rating">{{$product['avg_ratting']}}</strong> out of 5</span>
                      </div>
                      <div class="item-content">
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">AED {{$product['discounted_price']}}</span>
                            </span> </div>
                        </div>
                        {{-- <span style="font-size: 12px
                        ;">Free Shipping & Free Delivery</span> --}}
                        <div class="count-number">
                          <form id='myform' method='POST' class='quantity' action='#'>
                            <input type='button' value='-' class='qtyminus minus' field='quantity' />
                            <input type='text' name='quantity' value='0' class='qty' />
                            <input type='button' value='+' class='qtyplus plus' field='quantity' />
                          </form>
                        </div>
                        <div class="action">
                          <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i
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
    {{-- <div class="container-fluid qwre">
      <div class="container">
        <div class="row">
          <div class="bb5g">
            <div class="yuhd">
              <img src="{{asset('assets/images/shoes.png')}}" alt="" />
            </div>
            <div class="uyd">
              <h1>30% off or more</h1>
              <h2>Sports Shoes</h2>
            </div>
          </div>
          <div class="bb5g">
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
          </div>
        </div>
      </div>
    </div> --}}

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
                            href="product_detail.html"> <img alt="" src="{{$featured_products['productimage']['image_url']}}"> </a>
                           <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="quick_view.html"></a> </li>
                              <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                              <li><a class="link-compare" href="compare.html"></a> </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">{{$featured_products['product_name']}}</a> </div>
                          <div class="brand">{{!empty($featured_products['brand']['brand_name'])}}</div>
                          <div class="star-rating">
                            {{-- <span style="width:60%">Rated <strong class="rating">{{$featured_products['rattings']}}</strong> out of 5</span> --}}
                          </div>
                          <div class="item-content">
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">AED {{$featured_products['discounted_price']}}</span>
                                </span> </div>
                            </div>

                            <div class="count-number">
                              <form id='myform' method='POST' class='quantity' action='#'>
                                <input type='button' value='-' class='qtyminus minus' field='quantity' />
                                <input type='text' name='quantity' value='0' class='qty' />
                                <input type='button' value='+' class='qtyplus plus' field='quantity' />
                              </form>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title=""
                                data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
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
              <h4>Explore everyday <br />essentials</h4>
              <a href="#">
                <img src="{{asset('assets/images/ponds-cream.jpg')}}" alt="" />
              </a>
              <a href="#">
                <img src="{{asset('assets/images/vasline.png')}}" alt="" />
              </a>
              <a href="#">
                <img src="{{asset('assets/images/lakme.jpg')}}" alt="" />
              </a>
              <a href="#">
                <img src="{{asset('assets/images/ponds-cream.jpg')}}" alt="" />
              </a>
            </div>
          </div>
          <div class="col-md-6 col-sm-3 col-lg-3">
            <div class="utgd1">
              <h4>Food, fitness and WFH <br />essentials</h4>
              <a href="#">
                <img src="{{asset('assets/images/breakfist.jpg')}}" alt="" />
                <h6>breakfast essentials</h6>
              </a>
              <a href="#">
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
              </a>
              <div class="iu5d">
                <a href="#">See all offers</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-3 col-lg-3">
            <div class="utgd1">
              <h4>Up to 30% off | Snacks & <br />beverages</h4>
              <a href="#">
                <img src="{{asset('assets/images/biskut.jpg')}}" alt="" />
                <h6>biskut & Snacks</h6>
              </a>
              <a href="#">
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
              </a>
              <div class="iu5d">
                <a href="#">See all offers</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-3 col-lg-3">
            <div class="utgd1">
              <h4>Electronics to make your <br />christmas special</h4>
              <a href="#">
                <img src="{{asset('assets/products-images/product4.jpg')}}" alt="" />
                <h6>breakfast essentials</h6>
              </a>
              <a href="#">
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
              </a>
              <div class="iu5d">
                <a href="#">See all offers</a>
              </div>
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

    <section class="bb5b">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-4 col-lg-4">
            <div class="bv5v">
              <h3>Sales</h3>
              <div class="products-grid yh32d">
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="#" title="Retis lapen casen" class="product-image"> <img
                        src="{{asset('assets/products-images/product5.jpg')}}" alt="Retis lapen casen"> </a>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.html" title="Retis lapen casen"> Anti Glare
                            Side Narrow Border Display Laptop </a> </div>
                        <div class="brand">Sonet</div>
                        <div class="item-content">
                          <div class="star-rating">
                            <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                          </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">AED 125.00</span>
                              </span> <span class="old-price"><span class="price">AED 199.00</span></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="#" title="Retis lapen casen" class="product-image"> <img
                        src="{{asset('assets/products-images/product12.jpg')}}" alt="Retis lapen casen"> </a>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.html" title="Retis lapen casen"> Anti Glare
                            Side Narrow Border Display Laptop </a> </div>
                        <div class="brand">Sonet</div>
                        <div class="item-content">
                          <div class="star-rating">
                            <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                          </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">AED 125.00</span>
                              </span> <span class="old-price"><span class="price">AED 199.00</span></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="#" title="Retis lapen casen" class="product-image"> <img
                        src="{{asset('assets/products-images/product4.jpg')}}" alt="Retis lapen casen"> </a>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.html" title="Retis lapen casen"> Anti Glare
                            Side Narrow Border Display Laptop </a> </div>
                        <div class="brand">Sonet</div>
                        <div class="item-content">
                          <div class="star-rating">
                            <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                          </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">AED 125.00</span>
                              </span> <span class="old-price"><span class="price">AED 199.00</span></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="#" title="Retis lapen casen" class="product-image"> <img
                        src="{{asset('assets/products-images/product1.jpg')}}"  alt="Retis lapen casen"> </a>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.html" title="Retis lapen casen"> Anti Glare
                            Side Narrow Border Display Laptop </a> </div>
                        <div class="brand">Sonet</div>
                        <div class="item-content">
                          <div class="star-rating">
                            <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                          </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">AED 125.00</span>
                              </span> <span class="old-price"><span class="price">AED 199.00</span></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
                  <div class="item active">
                    <img src="{{asset('assets/images/BLOG_2_square_1000x.jpg')}}" alt="" />
                  </div>
                  <div class="item">
                    <img src="{{asset('assets/images/blog-img1.jpg')}}" alt="" />
                  </div>
                  <div class="item">
                    <img src="{{asset('assets/images/blog-img3.jpg')}}" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-4 col-lg-4">
            <div class="bv5v">
              <h3>top rated</h3>
              <div class="products-grid yh32d">
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="#" title="Retis lapen casen" class="product-image"> <img
                            src="{{asset('assets/products-images/product7.jpg')}}" alt="Retis lapen casen"> </a>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.html" title="Retis lapen casen"> Anti Glare
                            Side Narrow Border Display Laptop </a> </div>
                        <div class="brand">Sonet</div>
                        <div class="item-content">
                          <div class="star-rating">
                            <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                          </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">AED 125.00</span>
                              </span> <span class="old-price"><span class="price">AED 199.00</span></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="#" title="Retis lapen casen" class="product-image"> <img
                            src="{{asset('assets/products-images/product6.jpg')}}" alt="Retis lapen casen"> </a>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.html" title="Retis lapen casen"> Anti Glare
                            Side Narrow Border Display Laptop </a> </div>
                        <div class="brand">Sonet</div>
                        <div class="item-content">
                          <div class="star-rating">
                            <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                          </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">AED 125.00</span>
                              </span> <span class="old-price"><span class="price">AED 199.00</span></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="#" title="Retis lapen casen" class="product-image"> <img
                            src="{{asset('assets/products-images/product13.jpg')}}" alt="Retis lapen casen"> </a>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.html" title="Retis lapen casen"> Anti Glare
                            Side Narrow Border Display Laptop </a> </div>
                        <div class="brand">Sonet</div>
                        <div class="item-content">
                          <div class="star-rating">
                            <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                          </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">AED 125.00</span>
                              </span> <span class="old-price"><span class="price">AED 199.00</span></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a href="#" title="Retis lapen casen" class="product-image"> <img
                            src="{{asset('assets/products-images/product8.jpg')}}" alt="Retis lapen casen"> </a>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.html" title="Retis lapen casen"> Anti Glare
                            Side Narrow Border Display Laptop </a> </div>
                        <div class="brand">Sonet</div>
                        <div class="item-content">
                          <div class="star-rating">
                            <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                          </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">AED 125.00</span>
                              </span> <span class="old-price"><span class="price">AED 199.00</span></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
          <div class="article-home">
            <div class="article-home__i
          
          
          e parallax-parent"> <img src="{{asset('assets\images\Sophie_editorail-16_500x.jpg')}}" class="parallax-child--second"
                alt="article image"> </div>
            <div class="article-home__content">
              <div class="inside">
                <h4 class="title">Discount for<br /> laptops</h4>
                <a href="#" class="link">Shop Now <i class="fa fa-chevron-circle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="article-home">
            <div class="article-home__image parallax-parent"> <img src="{{asset('assets\images\BLOG_2_square_1000x.jpg')}}"
                class="parallax-child--second" alt="article image"> </div>
            <div class="article-home__content">
              <div class="inside">
                <h4 class="title">Share your music</h4>
                <a href="#" class="link">Shop Now <i class="fa fa-chevron-circle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="article-home">
            <div class="article-home__image parallax-parent"> <img src="{{asset('assets\images\drake_500x.jpg')}}"
                class="parallax-child--second" alt="article image"> </div>
            <div class="article-home__content">
              <div class="inside">
                <h4 class="title">Phones</h4>
                <a href="#" class="link">Shop Now <i class="fa fa-chevron-circle-right"></i></a>
              </div>
            </div>
          </div>
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
          <div class="bb5g">
            <div class="yuhd">
              <img src="{{asset('assets/images/shoes.png')}}" alt="" />
            </div>
            <div class="uyd">
              <h1>30% off or more</h1>
              <h2>Sports Shoes</h2>
            </div>
          </div>
          <div class="bb5g">
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
          </div>
        </div>
      </div>
    </div>
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





    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementsByClassName("openModal");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn[0].onclick = function () {
      modal.style.display = "block";
    };

    btn[1].onclick = function () {
      modal.style.display = "block";
    };

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
      modal.style.display = "none";
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    };







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

@endsection
       