

@extends('layouts.app')
@section('content') 
<style>
  .product-view .product-essential .add-to-links .link-wishlist.active 
  {
    background:blue;
    color:white;
  }
  .comment-respond .stars a.active {
    color:#ffc808
  }
</style>  
    <section class="main-container col1-layout">
      <div class="container">
        <div class="row">

          <!-- Breadcrumbs -->
          <div class="breadcrumbs">
            <ul>
              <li class="home"> <a href="index.html" title="Go to Home Page">Home</a> <span>/</span> </li>
              
              <li> <strong>{{$data->product_name}}</strong> </li>
            </ul>
          </div>
          <!-- Breadcrumbs End -->

          <div class="col-sm-12 col-xs-12">

            <article class="col-main">
              <div class="product-view">
                <div class="product-essential">
                  <form action="#" method="post" id="product_addtocart_form">
                    <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                    <div class="product-img-box col-lg-5 col-sm-5 col-xs-12">
                      @if ($data->new_item)
                      <div class="new-label new-top-left"> New </div>
                      @endif
                      <div class="product-image">
                        <div class="product-full mag"> <img id="product-zoom" data-toggle="magnify"
                            src="{{$data->productimage->image_url}}" data-zoom-image="{{$data->productimage->image_url}}"
                            alt="product-image"> </div>
                        <div class="more-views">
                          <div class="slider-items-products">
                            <div id="gallery_01" class="product-flexslider hidden-buttons product-img-thumb">
                              <div class="slider-items slider-width-col4 block-content">
                               @foreach ($data->productimages as $image)
                                <div class="more-views-items"> 
                                  <a href="#" data-image="{{$image->image_url}}"
                                    data-zoom-image="{{$image->image_url}}"> <img id="product-zoom{{$loop->iteration}}"
                                      src="{{$image->image_url}}" alt="product-image"> </a>
                                </div>
                               @endforeach
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end: more-images -->

                      <div class="add-to-box">
                        <div class="add-to-cart">
                          <button onclick="cartadd({{$data->id}})"  id="cart_button" style="cursor:pointer;" value="{{$data->id}}" class="button btn-cart"title="Add to Cart">Add to Cart</button>
                          @if(collect($data->stocks)->sum('quantity')<=0)
                          <button  class="button btn-buy" title="Add to Cart" type="button">Sold Out</button>
                          @endif
                        </div>

                      </div>
                      <ul class="add-to-links">
                        <li> <a class="link-wishlist active" href="#"><span>Add to Wishlist</span></a></li>
                        <li><a class="link-compare" href="{{url('products')}}"><span>Continue Shopping</span></a></li>
                      </ul>
                    </div>
                    <div class="product-shop col-lg- col-sm-7 col-xs-12">
                      <div class="product-next-prev"> <a class="product-next" href="#"><span></span></a> <a
                          class="product-prev" href="#"><span></span></a> </div>
                      <div class="brand">{{$data->brand->brand_name}}</div>
                      <div class="product-name">
                        <h1>{{$data->product_name}}</h1>
                        <input type="hidden" value="{{$data->product_name}}" name="pro_name" id="pro_name">
                       <input type="hidden" value="{{$data->productimage->image_url}}" name="pro_img" id="pro_img">
                      </div>
                      <div class="rating">
                        <div class="star-rating">
                          <span style="width:{{(count($data->rattings)>0)?$data->rattings[0]->avg_ratting*2*10:'0'}}%">Rated <strong class="rating">{{(count($data->rattings)>0)?$data->rattings[0]->avg_ratting:'0'}}</strong> out of 5</span>
                        </div>
                        <p class="rating-links"> <a href="#">{{(count($data->rattings)>0)?$data->rattings[0]->ratting_count:'0'}} ratings &amp; {{count($data->reviews)}} reviews</a> <span
                            class="separator">|</span> <a href="#">Add Review</a> </p>
                      </div>
                      <div class="price-block">
                        <!-- <div class="count-number">
                            <input type='button' value='-' class='qtyminus minus' field='quantity' />
                            <input type='text'id="pro_qty" name='quantity' value='1' class='qty' />
                            <input type='button' value='+' class='qtyplus plus' field='quantity' />
                        </div> -->
                        <div class="price-box">
                            @if(collect($data->stocks)->sum('quantity')<=0)
                          <p class="availability in-stock"><span>Sold out</span></p>
                          @endif
                          <p class="special-price"> <span class="price-label">Special Price</span> <span
                              id="product-price-48" class="price"> AED {{$data->discounted_price}} </span> </p>
                              <input type="hidden" value="{{$data->discounted_price}}" name="price" id="pro_price">

                          <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> AED
                            {{$data->product_price}} </span> </p>
                          <p{{$data->delivery_message}}</p>

                        </div>
                      </div>


                      <div class="list">
                        <div class="heading">Description</div>
                        <div class="points">
                        {{$data->description}}</div>
                      </div>

                      <div class="list">
                        <div class="heading">Other</div>
                        <div class="points">
                          <h4>Shipping & Return</h4>
                          <ul>
                            <li>{{($data->free_shipping||$data->shipping_cost==0)?'Free Shipping':"Shipping Cost $data->shipping_cost"}}</li>
                            <li>{{($data->est_shipping_days>0)?'Estimated shipping days '.$data->est_shipping_days:"Shipping days may vary"}}</li>
                            <li>{{$data->is_return?"$data->return_days Days Return Policy":"No return Available"}}</li>
                          </ul>
                        </div>
                      </div>







                    </div>
                  </form>
                </div>
                <div class="product-collateral">
                  <div class="add_info">
                    <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                      <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Description
                        </a> </li>
                      <!-- <li><a href="#product_tabs_tags" data-toggle="tab">Specifications</a></li> -->
                      <li> <a href="#reviews_tabs" data-toggle="tab">Reviews</a> </li>
                      <!-- <li> <a href="#product_tabs_custom" data-toggle="tab">Custom Tab</a> </li> -->
                      <!-- <li> <a href="#product_tabs_custom1" data-toggle="tab">Questions & Answers</a> </li> -->
                    </ul>
                    <div id="productTabContent" class="tab-content">
                      <div class="tab-pane fade in active" id="product_tabs_description">
                        <div class="std">
                         {!!$data->detail_description!!}
                        </div>
                      </div>
                      <div class="tab-pane fade" id="reviews_tabs">
                        <div class="woocommerce-Reviews">
                          <div>
                            <h2 class="woocommerce-Reviews-title"><v id="review_count">{{count($data->reviews)}}</v> reviews for <span>{{$data->product_name}}</span></h2>
                            <ol class="commentlist">
                              @foreach ($data->reviews as $review)
                              <li class="comment">
                                <div>
                                  <img alt="" src="{{$review->users->image_url}}" class="avatar avatar-60 photo">
                                  <div class="comment-text">
                                    <div class="star-rating">
                                      <span style="width:{{$review->ratting*2*10}}%">Rated <strong class="rating">{{$review->ratting}}</strong> out of 5</span>
                                    </div>
                                    <p class="meta">
                                      <strong>{{$review->users->name}}</strong>
                                      <span>–</span>{{date('F j, Y',strtotime($review->created_at))}}
                                    </p>
                                    <div class="description">
                                      <p>{{$review->comment}}</p>
                                    </div>
                                  </div>
                                </div>
                              </li><!-- #comment-## -->
                              @endforeach
                            </ol>
                          </div>
                          <div>
                            <div>
                              <div class="comment-respond" style="padding:26px">
                                <span class="comment-reply-title">Add a review </span>
                                <form onsubmit="event.preventDefault();submitReview()" action="#" id="addreviewform" method="post" class="comment-form" novalidate="">
                                  <p class="comment-notes"><span id="email-notes">Your email address will not be
                                      published.</span> Required fields are marked <span class="required">*</span></p>
                                  <div class="comment-form-rating">
                                    <label id="rating">Your rating</label>
                                    <p class="stars">
                                      <span>
                                        <a class="star-1 star" href="#" onclick="event.preventDefault();addRating(1,$(this))">1</a>
                                        <a class="star-2 star" href="#" onclick="event.preventDefault();addRating(2,$(this))">2</a>
                                        <a class="star-3 star" href="#" onclick="event.preventDefault();addRating(3,$(this))">3</a>
                                        <a class="star-4 star" href="#" onclick="event.preventDefault();addRating(4,$(this))">4</a>
                                        <a class="star-5 star" href="#" onclick="event.preventDefault();addRating(5,$(this))">5</a>
                                      </span>
                                    </p>
                                  </div>
                                  <p class="comment-form-comment">
                                    <label>Your review <span class="required">*</span></label>
                                    <input type="hidden" name="ratting" id="ratting" value="0"/>
                                    <input type="hidden" name="vendor_id" value="{{$data->vendor_id}}"/>
                                    <input type="hidden" name="user_id" value="{{session()->get('user_id')}}"/>
                                    <input type="hidden" name="product_id" value="{{$data->id}}"/>
                                    <input type="reset" id="reset" style="display:none">
                                    <textarea id="comment" name="comment" cols="45" rows="8" required="" @if(!session()->get('token')) onclick="$('#myModalsignin').modal('show');" @endif></textarea>
                                  </p>
                                  <p class="comment-form-author">
                                    <label for="author">Name </label>
                                    <input id="author" name="author" readonly type="text" value="{{session()->get('name')}}" size="30" required="">
                                  </p>
                                  <p class="comment-form-email">
                                    <label for="email">Email </label>
                                    <input id="email" name="email" readonly type="email" value="{{session()->get('email')}}" size="30" required="">
                                  </p>
                                  <div class="form-submit">
                                    <input name="submit"  class="submit"  type="submit" id="submit"  @if(!session()->get('token')) disabled  @endif value="Submit">
                                  </div>
                                </form>
                              </div><!-- #respond -->
                            </div>
                          </div>
                          <div class="clear"></div>
                        </div>
                      </div>
                    </div>
                  </div>



                </div>

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










                <div class="container">

                  <div class="row">

                    <div class="col-sm-12">

                      <div class="owl-carousel owl-theme">

                        <div class="item-video" data-merge="1"><a class="owl-video"
                            href="https://www.youtube.com/watch?v=H3jLkJrhHKQ"></a></div>
                        <div class="item-video" data-merge="2"><a class="owl-video"
                            href="https://www.youtube.com/watch?v=H3jLkJrhHKQ"></a></div>
                        <div class="item-video" data-merge="1"><a class="owl-video"
                            href="https://www.youtube.com/watch?v=H3jLkJrhHKQ"></a></div>
                        <div class="item-video" data-merge="2"><a class="owl-video"
                            href="https://www.youtube.com/watch?v=H3jLkJrhHKQ"></a></div>
                        <div class="item-video" data-merge="3"><a class="owl-video"
                            href="https://www.youtube.com/watch?v=g3J4VxWIM6s"></a></div>
                        <div class="item-video" data-merge="1"><a class="owl-video"
                            href="https://www.youtube.com/watch?v=0fhoIate4qI"></a></div>
                        <div class="item-video" data-merge="2"><a class="owl-video"
                            href="https://www.youtube.com/watch?v=EF_kj2ojZaE"></a></div>
                      </div>

                    </div>

                  </div>

                </div>








                <!-- similar products -->
                <div class="bestsell-pro mt-0 mb-60">




                  <div>
                    <div class="slider-items-products">
                      <div class="bestsell-block">
                        <div class="block-title">
                          <h2>Similar Productsw</h2>
                        </div>
                        <div id="bestsell-slider" class="product-flexslider hidden-buttons">
                          <div class="slider-items slider-width-col4 products-grid block-content">
                            <div class="item">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"> <a class="product-image" title="Retis lapen casen"
                                      href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product12.jpg')}}"> </a>
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
                                    <div class="item-title"> <a title="Retis lapen casen"
                                        href="product_detail.html">Anti Glare Side Narrow Border Display Laptop</a>
                                    </div>
                                    <div class="brand">Tonrex</div>
                                    <div class="star-rating">
                                      <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                                    </div>
                                    <div class="item-content">
                                      <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">AED
                                              88.00</span> </span> </div>
                                      </div>
                                      <div class="action">
                                        <button class="button btn-cart" type="button" title=""
                                          data-original-title="Add to Cart"><i
                                            class="fa fa-shopping-basket"></i></button>
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
                                  <div class="item-img-info"> <a class="product-image" title="Retis lapen casen"
                                      href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product11.jpg')}}"> </a>
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
                                    <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">
                                        Stovekraft Induction Stove with Feather touch </a> </div>
                                    <div class="brand">Unicorn</div>
                                    <div class="item-content">
                                      <div class="star-rating">
                                        <span style="width:60%">Rated <strong class="rating">3.00</strong> out of
                                          5</span>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">AED
                                              325.00</span> </span> </div>
                                      </div>
                                      <div class="action">
                                        <button class="button btn-cart" type="button" title=""
                                          data-original-title="Add to Cart"><i
                                            class="fa fa-shopping-basket"></i></button>
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
                                  <div class="item-img-info"> <a class="product-image" title="Retis lapen casen"
                                      href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product10.jpg')}}"> </a>
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
                                    <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">
                                        Home Security Camera with Alarm System </a> </div>
                                    <div class="brand">Harrier</div>
                                    <div class="item-content">
                                      <div class="star-rating">
                                        <span style="width:60%">Rated <strong class="rating">3.00</strong> out of
                                          5</span>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">AED
                                              245.00</span> </span> </div>
                                      </div>
                                      <div class="action">
                                        <button class="button btn-cart" type="button" title=""
                                          data-original-title="Add to Cart"><i
                                            class="fa fa-shopping-basket"></i></button>
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
                                  <div class="item-img-info"> <a class="product-image" title="Retis lapen casen"
                                      href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product6.jpg')}}"> </a>
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
                                    <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">
                                        Fitness Smartwatch with Heart Rate Monitor </a> </div>
                                    <div class="brand">Cruiser</div>
                                    <div class="star-rating">
                                      <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                                    </div>
                                    <div class="item-content">
                                      <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">AED
                                              88.00</span> </span> </div>
                                      </div>
                                      <div class="action">
                                        <button class="button btn-cart" type="button" title=""
                                          data-original-title="Add to Cart"><i
                                            class="fa fa-shopping-basket"></i></button>
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
                                  <div class="item-img-info"> <a class="product-image" title="Retis lapen casen"
                                      href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product8.jpg')}}"> </a>
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
                                    <div class="item-title"> <a title="Retis lapen casen"
                                        href="product_detail.html">Mixer Grinder with 3 Stainless Steel Jar</a> </div>
                                    <div class="brand">Flipmart</div>
                                    <div class="star-rating">
                                      <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                                    </div>
                                    <div class="item-content">
                                      <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">AED
                                              88.00</span> </span> </div>
                                      </div>
                                      <div class="action">
                                        <button class="button btn-cart" type="button" title=""
                                          data-original-title="Add to Cart"><i
                                            class="fa fa-shopping-basket"></i></button>
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
                                  <div class="item-img-info"> <a class="product-image" title="Retis lapen casen"
                                      href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product7.jpg')}}"> </a>
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
                                    <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">5
                                        Star Direct Cool Single Door Refrigerator</a> </div>
                                    <div class="brand">Nexus</div>
                                    <div class="star-rating">
                                      <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                                    </div>
                                    <div class="item-content">
                                      <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">AED
                                              88.00</span> </span> </div>
                                      </div>
                                      <div class="action">
                                        <button class="button btn-cart" type="button" title=""
                                          data-original-title="Add to Cart"><i
                                            class="fa fa-shopping-basket"></i></button>
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
                                  <div class="item-img-info"> <a class="product-image" title="Retis lapen casen"
                                      href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product9.jpg')}}"> </a>
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
                                    <div class="item-title"> <a title="Retis lapen casen"
                                        href="product_detail.html">Direct Wireless Network Laser Printer</a> </div>
                                    <div class="brand">Dealsdot</div>
                                    <div class="star-rating">
                                      <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                                    </div>
                                    <div class="item-content">
                                      <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">AED
                                              88.00</span> </span> </div>
                                      </div>
                                      <div class="action">
                                        <button class="button btn-cart" type="button" title=""
                                          data-original-title="Add to Cart"><i
                                            class="fa fa-shopping-basket"></i></button>
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

                <!-- End similar products -->

              </div>
            </article>
            <!--	///*///======    End article  ========= //*/// -->
          </div>
        </div>
      </div>
    </section>
<script>
        $(document).ready(function () {
          if (jQuery('.mega-menu-category').is(':visible')) {
            jQuery('.mega-menu-category').slideUp();
        }
           });
    </script>
  <!-- JavaScript -->
@section('script')
  <script type="text/javascript" src="{{asset('assets/js\jquery.flexslider.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js\cloud-zoom.js')}}"></script>
@endsection


  <script>
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
      $('.count-number,.quantity').on('click', '.plus', function (e) {
        let $input = $(this).prev('input.qty');
        let val = parseInt($input.val());
        $input.val(val + 1).change();
      });

      $('.count-number,.quantity').on('click', '.minus',
        function (e) {
          let $input = $(this).next('input.qty');
          var val = parseInt($input.val());
          if (val > 0) {
            $input.val(val - 1).change();
          }
        });
    });


    
    function cartadd(id){
 
     //alert('jhghjsgv');

     var setting={
    url:'{{url("/add-to-cart")}}',
     dataType:'json',
     type:'post',
     headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       },
     data: { 
         product_id: id,
         product_name: $("#pro_name").val(),
         qty: $("#pro_qty").val(),
         price: $("#pro_price").val(),
         shipping_cost: 0,
         tax: 0,
         image: $("#pro_img").val()
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
    function addRating(count,ref)
    {
      @if(session()->get('token'))
       $('.star').removeClass('.active');
       ref.addClass('active');
       $('#ratting').val(count);
      @else
       $('#myModalsignin').modal('show');
      @endif
    }
  </script>
  <script>
    function submitReview()
    {
       var token="{{session()->get('token')}}";
         $.ajax({
            url:'{{config('global.api')}}/addratting',
            type:'post',
            beforeSend: function (xhr) {
                xhr.setRequestHeader('Authorization', 'Bearer '+token);
            },
            data:$('#addreviewform').serialize(),
            dataType:'json',
            success:function(response){
                if(response.status)
                {
                        Toastify({
                      text: response.message,
                      className: "info",
                      close: true,
                      style: {
                          background: "#1cad6a",
                      }
                      }).showToast();
                      
                let rating=$('#ratting').val();
                let comment=$('#comment').val();
                let discription= `<li class="comment">
                                  <div>
                                    <img alt="" src="{{session()->get('profile_pic')}}" class="avatar avatar-60 photo">
                                    <div class="comment-text">
                                      <div class="star-rating">
                                        <span style="width:${rating*2*10}%">Rated <strong class="rating">${ratting}</strong> out of 5</span>
                                      </div>
                                      <p class="meta">
                                        <strong>{{session()->get('name')}}</strong>
                                        <span>–</span>few minutes ago
                                      </p>
                                      <div class="description">
                                        <p>${comment}</p>
                                      </div>
                                    </div>
                                  </div>
                                </li>`;
                  $('.commentlist').append(discription); 
                  $('#reset').click();
                  let review_count=parseInt($('#review_count').html());
                  
                  $('#review_count').html(review_count+1);
                }else{
                   Toastify({
                      text: response.message,
                      className: "error",
                      close: true,
                      style: {
                          background: "red",
                      }
                      }).showToast();
                }           
            }
          });
    }
    
  </script>
@endsection