 @extends('layouts.app')
@section('content') 

  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="container">
     <!-- Breadcrumbs -->
    <div class="breadcrumbs">
            <ul>
              <li class="home"> <a href="index.html" title="Go to Home Page">Home</a> <span>/</span> </li>
              <li> <strong>Shopping Cart</strong> </li>
            </ul>
          </div>
           <!-- Breadcrumbs End -->
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <article class="col-main">
            <div class="cart">
              <div class="page-title">
                <h2>Shopping Cart</h2>
              </div>
              <div class="row">
              <div class="col-sm-8 col-lg-8">
                @php $total=0; $shipping=0; @endphp

                @if($data)
                @foreach($data as $item)
                <div class="uthssk">
                  <div class="pous">
                    <img src="{{$item['image_url']}}" alt="">
                  </div>
                  <div class="pous1">
                    {{-- <h3>Brand</h3> --}}
                    <h4>{{$item['product_name']}}</h4>  
                    <small>Order in 7 hrs 13 mins</small>  
                    <small><b>Free delivery by Tomorrow, Dec 28</b></small>  
                    <h5>Sold by <b>Gift City</b></h5>  
                    @if(Session::has('user_id'))
                    <a href="{{url('delete-cart')}}/{{$item['id']}}">
                    <span><i class="fa fa-trash"></i> Remove</span>  </a>
                    @else
                    <a href="{{url('delete-cart')}}/{{$item['product_id']}}">
                    <span><i class="fa fa-trash"></i> Remove</span>  </a>
                    @endif     
                  </div>
                  <div class="pous2">
                    <p>AED {{$item['price'] * $item['qty']}}</p>
                   @php $total+=$item['price'] * $item['qty']; @endphp
                    <div class="count-number">
                    
                        <input type='button' value='-' class='qtyminus minus' field='quantity' />
                        <input type='text' name='quantity' value='{{$item['qty']}}' class='qty' />
                        <input type='button' value='+' class='qtyplus plus' field='quantity' />
                     
                    </div>
                  </div>
                </div>
                @endforeach
                @endif
              
                <div class="gcvYcJ">
                  <a href="{{url('/')}}"><button type="button">Continue Shopping</button></a>
                </div>
              </div>
              <div class="col-sm-4 col-lg-4">
                <div class="hcbyIU">
                  <h1>Order Summary</h1>
                  <div class="coupon thm-coupon-cart">                
                  <input type="text" name="coupon_code" class="form-control unicase-form-control input-text" id="coupon_code" value="" placeholder="Coupon code"> 
                  <button type="submit" class="btn btn-upper btn-primary" name="apply_coupon" value="Apply coupon">Apply</button>
                  </div>
                  <div class="po1s">
                    <div class="d-flex justify-content-between">
                      <div class="cilop">
                        <h5>sub total</h5>
                        <h5>delivery charges</h5>
                      </div>
                      <div class="cilop1">
                        <h5>AED {{$total}}</h5>
                        <h5>+AED 0</h5>
                      </div>
                  </div><hr>
                  <div class="d-flex justify-content-between">
                      <div class="cilop">
                        <h5>your total savings</h5>
                      </div>
                      <div class="cilop1">
                        <h5>AED {{$total}}</h5>
                      </div>
                  </div>
                  <div class="ctllRv">
                    <button>Checkout</button>
                  </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="bestsell-pro mt-0 mb-60">
      <div>

        <section class="banner-row irf">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-12 col-md-12">
                <div class="position-relative"> 
                  <!-- Background --> 
                  <img class="img-fluid hover-zoom" src="{{asset('assets/images/popup.jpeg')}}" alt=""> 
                  <!-- Body -->
                  
                </div>
              </div>
            
              
            </div>
          </div>
      </section>
        <div class="slider-items-products">
          <div class="bestsell-block">
            <div class="block-title">
              <h2>You May also intrested</h2>
            </div>
            <div id="bestsell-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4 products-grid block-content">
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product12.jpg')}}"> </a>
                        <div class="new-label new-top-left">new</div>
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
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Anti Glare Side Narrow Border Display Laptop</a> </div>
                        <div class="brand">Tonrex</div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item -->
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product11.jpg')}}"> </a>
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
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Stovekraft Induction Stove with Feather touch </a> </div>
                        <div class="brand">Unicorn</div>
                        <div class="item-content">
                          <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$325.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                <!-- Item -->
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product10.jpg')}}"> </a>
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
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Home Security Camera with Alarm System </a> </div>
                        <div class="brand">Harrier</div>
                        <div class="item-content">
                          <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$245.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item -->
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product6.jpg')}}"> </a>
                        <div class="new-label new-top-left">new</div>
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
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Fitness Smartwatch with Heart Rate Monitor </a> </div>
                        <div class="brand">Cruiser</div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item -->
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product8.jpg')}}"> </a>
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
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Mixer Grinder with 3 Stainless Steel Jar</a> </div>
                        <div class="brand">Flipmart</div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item -->
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product7.jpg')}}"> </a>
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
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">5 Star Direct Cool Single Door Refrigerator</a> </div>
                        <div class="brand">Nexus</div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item -->
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product9.jpg')}}"> </a>
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
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Direct Wireless Network Laser Printer</a> </div>
                        <div class="brand">Dealsdot</div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
            </div>
          </article>
          <!--	///*///======    End article  ========= //*/// --> 
        </div>
        
      </div>
    </div>
  </section>
  <!-- Main Container End -->

<script>
        $(document).ready(function () {
          if (jQuery('.mega-menu-category').is(':visible')) {
            jQuery('.mega-menu-category').slideUp();
        }
           });
    </script>
 @endsection