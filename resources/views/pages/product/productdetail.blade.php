@extends('layouts.app')
@section('content')
    @php
        $price = $data->is_variation ? $variation->discounted_variation_price : $data->discounted_price;
        $stock = $data->is_variation ? $variation->stock->quantity : collect($data->stocks)->sum('quantity');
    @endphp
    <style>
        .product-view .product-essential .add-to-links .link-wishlist.active {
            background: #6e6eff;
            color: white;
        }

        .comment-respond .stars a.active {
            color: #ffc808
        }

        .box-hover .add-to-links li a.link-wishlist.active {
            color: #6e6eff;
        }
    </style>
    <section class="main-container col1-layout">
        <div class="container">
            <div class="row">

                <!-- Breadcrumbs -->
                <div class="breadcrumbs">
                    <ul>
                        <li class="home"> <a href="{{ url('') }}" title="Go to Home Page">Home</a> <span>/</span> </li>

                        <li> <strong>{{ $data->product_name }}</strong> </li>
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
                                            @if ($data->is_variation)
                                                @if ($variation->video)
                                                    <video width="420" height="340" controls controlsList="nodownload"
                                                        id="product-video" style="display: none;">
                                                        <source src="{{ $variation->video }}" type="video/mp4">

                                                        Your browser does not support the video tag.
                                                    </video>
                                                @endif
                                                @php
                                                    $image = collect($variation->product_images)->first();
                                                @endphp
                                                @if ($image)
                                                    <div class="product-full mag"> <img id="product-zoom"
                                                            data-toggle="magnify" src="{{ $image->image }}"
                                                            data-zoom-image="{{ $image->image }}" alt="product-image">
                                                    </div>
                                                @endif
                                            @else
                                                <div class="product-full mag" id="image-carosel-full">
                                                    @if ($data->product_video)
                                                        <video width="420" height="340" controls
                                                            controlsList="nodownload" id="product-video"
                                                            style="display: none;">
                                                            <source src="{{ $data->product_video }}" type="video/mp4">

                                                            Your browser does not support the video tag.
                                                        </video>
                                                    @endif
                                                    <img id="product-zoom" data-toggle="magnify"
                                                        src="{{ $data->productimage->image_url }}"
                                                        data-zoom-image="{{ $data->productimage->image_url }}"
                                                        alt="product-image">
                                                </div>
                                            @endif
                                            <div class="more-views">
                                                <div class="slider-items-products">
                                                    <div id="gallery_01"
                                                        class="product-flexslider hidden-buttons product-img-thumb">
                                                        <div class="slider-items slider-width-col4 block-content">
                                                            @if ($data->is_variation)
                                                                @if ($variation->video)
                                                                    <div class="more-views-items" img-div="2"> <a
                                                                            href="#"
                                                                            data-image="{{ url('assets/products-images/video-image.jpg') }}"
                                                                            data-zoom-image="{{ url('assets/products-images/video-image.jpg') }}">
                                                                            <img id="product-zoom0"
                                                                                src="{{ url('assets/products-images/video-image.jpg') }}"
                                                                                class="indiviual-image" image-video="2"
                                                                                alt="product-image"> </a></div>
                                                                @endif
                                                                @foreach ($variation->product_images as $image)
                                                                    <div class="more-views-items">
                                                                        <a href="#" data-image="{{ $image->image }}"
                                                                            data-zoom-image="{{ $image->image }}"> <img
                                                                                id="product-zoom{{ $loop->iteration }}"
                                                                                src="{{ $image->image }}"
                                                                                alt="product-image" class="indiviual-image"
                                                                                image-video="1"> </a>
                                                                    </div>
                                                                @endforeach
                                                            @else
                                                                @if ($data->product_video)
                                                                    <div class="more-views-items" img-div="2"> <a
                                                                            href="#"
                                                                            data-image="{{ url('assets/products-images/video-image.jpg') }}"
                                                                            data-zoom-image="{{ url('assets/products-images/video-image.jpg') }}">
                                                                            <img id="product-zoom0"
                                                                                src="{{ url('assets/products-images/video-image.jpg') }}"
                                                                                class="indiviual-image" image-video="2"
                                                                                alt="product-image"> </a></div>
                                                                @endif
                                                                @foreach ($data->productimages as $image)
                                                                    <div class="more-views-items">
                                                                        <a href="#"
                                                                            data-image="{{ $image->image_url }}"
                                                                            data-zoom-image="{{ $image->image_url }}"> <img
                                                                                id="product-zoom{{ $loop->iteration }}"
                                                                                src="{{ $image->image_url }}"
                                                                                alt="product-image" class="indiviual-image"
                                                                                image-video="1"> </a>
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end: more-images -->

                                        <div class="add-to-box">
                                            <div class="add-to-cart">
                                                <button
                                                    onclick="cartadd({{ $data->id }},{{ $variation ? $variation->id : 0 }},$('.qty').val(),{{ $stock }})"
                                                    type="button" id="cart_button" style="cursor:pointer;"
                                                    value="{{ $data->id }}"
                                                    class="button btn-cart"title="Add to Cart">Add to Cart</button>

                                                @if ($stock <= 0)
                                                    <button class="button btn-buy" title="Add to Cart" type="button">Sold
                                                        Out</button>
                                                @else
                                                    <button class="button btn-buy" title="Add to Cart"
                                                        onclick="buynow({{ $data->id }},{{ $variation ? $variation->id : 0 }},$('.qty').val(),{{ $stock }})"
                                                        type="button" id="buynow_button" style="cursor:pointer;"
                                                        value="{{ $data->id }}">Buy
                                                        Now</button>
                                                @endif
                                            </div>

                                        </div>
                                        <ul class="add-to-links">
                                            <li> <a class="link-wishlist  @if ($data->is_wishlist) active @endif"
                                                    id="wishlist_act" href="#"
                                                    onclick="addWishlist({{ $data->id }},$(this))"><span>Add to
                                                        Wishlist</span></a></li>
                                            <li><a class="link-compare" href="{{ url('products') }}"><span>Continue
                                                        Shopping</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-shop col-lg- col-sm-7 col-xs-12">
                                        {{-- <div class="product-next-prev">
                                            <a class="product-next" href="#"><span></span></a>
                                            <a class="product-prev" href="#"><span></span></a>
                                        </div> --}}
                                        <div class="brand">{{ $data->brand ? $data->brand->brand_name : '' }}</div>
                                        <div class="product-name">
                                            <h1>{{ $data->product_name }}</h1>
                                            <input type="hidden" value="{{ $data->product_name }}" name="pro_name"
                                                id="pro_name">
                                            <input type="hidden" value="{{ $data->productimage->image_url }}"
                                                name="pro_img" id="pro_img">
                                        </div>
                                        <div class="rating">
                                            <div class="star-rating">
                                                <span
                                                    style="width:{{ count($data->rattings) > 0 ? $data->rattings[0]->avg_ratting * 2 * 10 : '0' }}%">Rated
                                                    <strong
                                                        class="rating">{{ count($data->rattings) > 0 ? $data->rattings[0]->avg_ratting : '0' }}</strong>
                                                    out of 5</span>
                                            </div>
                                            <p class="rating-links"> <a
                                                    href="#">{{ count($data->rattings) > 0 ? $data->rattings[0]->ratting_count : '0' }}
                                                    ratings &amp; {{ count($data->reviews) }} reviews</a> <span
                                                    class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                        <div class="price-block">
                                            <div class="count-number">
                                                <input type='button' value='-' class='qtyminus minus'
                                                    field='quantity' />
                                                <input type='text' name='quantity' value='1' class='qty' />
                                                <input type='button' value='+' class='qtyplus plus'
                                                    field='quantity' />
                                            </div>
                                            <div class="price-box">
                                                @if ($stock <= 0)
                                                    <p class="availability in-stock"><span>Sold out</span></p>
                                                @else
                                                    <p class="availability in-stock">
                                                        <span>{{ $stock }} in stock</span>
                                                    </p>
                                                @endif
                                                <p class="special-price"> <span class="price-label">Special Price</span>
                                                    <span id="product-price-48" class="price"> AED {{ $price }}
                                                    </span>
                                                </p>
                                                <input type="hidden" value="{{ $price }}" name="price"
                                                    id="pro_price">

                                                <p class="old-price"> <span class="price-label">Regular Price:</span>
                                                    <span class="price"> AED
                                                        {{ $data->is_variation ? $variation->price : $data->product_price }}
                                                    </span>
                                                </p>
                                                <p>{{ $data->delivery_message }}</p>

                                            </div>
                                        </div>
                                        @if ($data->is_variation)
                                            @foreach ($data->variation_attribute_item as $attribute_item)
                                                <div class="list">
                                                    <div class="heading">{{ $attribute_item->attribute_name }}</div>
                                                    @php
                                                        $selected_item = collect($variation->variation_item)->first(function ($value, int $key) use ($attribute_item) {
                                                            return $value->attribute_id == $attribute_item->attribute_id;
                                                        });
                                                    @endphp
                                                    <div class="points">
                                                        @foreach ($attribute_item->items as $item)
                                                            <button type="button"
                                                                data-attribute="{{ $attribute_item->attribute_name }}"
                                                                onclick="addVariation({{ $attribute_item->attribute_id }},'{{ $item->variation_value }}',$(this))"
                                                                class="btn btn-info attribute-button {{ $selected_item->variation_value == $item->variation_value ? 'active' : '' }}">{{ $item->variation_value }}</button>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        <div class="list">
                                            <div class="heading">Highlights</div>
                                            <div class="points">
                                                {!! $data->highlights !!}</div>
                                        </div>
                                        <div class="list">
                                            <div class="heading">Description</div>
                                            <div class="points">
                                                {!! $data->description !!}</div>
                                        </div>

                                        <div class="list">
                                            <div class="heading">Other</div>
                                            <div class="points">
                                                <h4>Shipping & Return</h4>
                                                <ul>
                                                    <li>@if($data->free_shipping!=2)
                                                        Free Shipping
                                                        @elseif ($data->shipping_cost)
                                                        Shipping Cost {{$data->shipping_cost}}
                                                         @endif
                                                    </li>
                                                    <li>{{ $data->est_shipping_days > 0 ? 'Estimated shipping days ' . $data->est_shipping_days : 'Shipping days may vary' }}
                                                    </li>
                                                    <li>{{ $data->is_return ? "$data->return_days Days Return Policy" : 'No return Available' }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>







                                    </div>
                                </form>
                            </div>
                            <div class="product-collateral">
                                <div class="add_info">
                                    <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                        <li class="active"> <a href="#product_tabs_description" data-toggle="tab">
                                                Product Description
                                            </a> </li>
                                        <li><a href="#product_tabs_tags" data-toggle="tab">Specifications</a></li>
                                        <li> <a href="#reviews_tabs" data-toggle="tab">Reviews</a> </li>
                                        <!-- <li> <a href="#product_tabs_custom" data-toggle="tab">Custom Tab</a> </li> -->
                                        <!-- <li> <a href="#product_tabs_custom1" data-toggle="tab">Questions & Answers</a> </li> -->
                                    </ul>
                                    <div id="productTabContent" class="tab-content">
                                        <div class="tab-pane fade in active" id="product_tabs_description">
                                            <div class="std">
                                                {!! $data->detail_description !!}
                                            </div>
                                            @if ($data->youtube_link != null)
                                                <div class="std">
                                                    <iframe src="https://www.youtube.com/embed/{{ $data->youtube_link }}"
                                                        title="description"></iframe>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="tab-pane fade" id="product_tabs_tags">
                                            <div class="std">
                                                {!! $data->detail_specifications !!}
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="reviews_tabs">
                                            <div class="woocommerce-Reviews">
                                                <div>
                                                    <h2 class="woocommerce-Reviews-title">
                                                        <v id="review_count">{{ count($data->reviews) }}</v> reviews for
                                                        <span>{{ $data->product_name }}</span>
                                                    </h2>
                                                    <ol class="commentlist">
                                                        @foreach ($data->reviews as $review)
                                                            <li class="comment">
                                                                <div>
                                                                    <img alt=""
                                                                        src="{{ $review->users->image_url }}"
                                                                        class="avatar avatar-60 photo">
                                                                    <div class="comment-text">
                                                                        <div class="star-rating">
                                                                            <span
                                                                                style="width:{{ $review->ratting * 2 * 10 }}%">Rated
                                                                                <strong
                                                                                    class="rating">{{ $review->ratting }}</strong>
                                                                                out of 5</span>
                                                                        </div>
                                                                        <p class="meta">
                                                                            <strong>{{ $review->users->name }}</strong>
                                                                            <span>–</span>{{ date('F j, Y', strtotime($review->created_at)) }}
                                                                        </p>
                                                                        <div class="description">
                                                                            <p>{{ $review->comment }}</p>
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
                                                            <form onsubmit="event.preventDefault();submitReview()"
                                                                action="#" id="addreviewform" method="post"
                                                                class="comment-form" novalidate="">
                                                                <p class="comment-notes"><span id="email-notes">Your email
                                                                        address will not be
                                                                        published.</span> Required fields are marked <span
                                                                        class="required">*</span></p>
                                                                <div class="comment-form-rating">
                                                                    <label id="rating">Your rating</label>
                                                                    <p class="stars">
                                                                        <span>
                                                                            <a class="star-1 star" href="#"
                                                                                onclick="event.preventDefault();addRating(1,$(this))">1</a>
                                                                            <a class="star-2 star" href="#"
                                                                                onclick="event.preventDefault();addRating(2,$(this))">2</a>
                                                                            <a class="star-3 star" href="#"
                                                                                onclick="event.preventDefault();addRating(3,$(this))">3</a>
                                                                            <a class="star-4 star" href="#"
                                                                                onclick="event.preventDefault();addRating(4,$(this))">4</a>
                                                                            <a class="star-5 star" href="#"
                                                                                onclick="event.preventDefault();addRating(5,$(this))">5</a>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <p class="comment-form-comment">
                                                                    <label>Your review <span
                                                                            class="required">*</span></label>
                                                                    <input type="hidden" name="ratting" id="ratting"
                                                                        value="0" />
                                                                    <input type="hidden" name="vendor_id"
                                                                        value="{{ $data->vendor_id }}" />
                                                                    <input type="hidden" name="user_id"
                                                                        value="{{ session()->get('user_id') }}" />
                                                                    <input type="hidden" name="product_id"
                                                                        value="{{ $data->id }}" />
                                                                    <input type="reset" id="reset"
                                                                        style="display:none">
                                                                    <textarea id="comment" name="comment" cols="45" rows="8" required=""
                                                                        @if (!session()->get('token')) onclick="$('#myModalsignin').modal('show');" @endif></textarea>
                                                                </p>
                                                                <p class="comment-form-author">
                                                                    <label for="author">Name </label>
                                                                    <input id="author" name="author" readonly
                                                                        type="text"
                                                                        value="{{ session()->get('name') }}"
                                                                        size="30" required="">
                                                                </p>
                                                                <p class="comment-form-email">
                                                                    <label for="email">Email </label>
                                                                    <input id="email" name="email" readonly
                                                                        type="email"
                                                                        value="{{ session()->get('email') }}"
                                                                        size="30" required="">
                                                                </p>
                                                                <div class="form-submit">
                                                                    <input name="submit" class="submit" type="submit"
                                                                        id="submit"
                                                                        @if (!session()->get('token')) disabled @endif
                                                                        value="Submit">
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
                            @if ($data->banner)
                                <section class="banner-row irf">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 col-lg-12 col-md-12">
                                                <div class="position-relative">
                                                    <!-- Background -->
                                                    <img class="img-fluid hover-zoom" src="{{ $data->banner }}"
                                                        alt="">
                                                    <!-- Body -->

                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </section>
                            @endif


















                            <!-- similar products -->
                            <div class="bestsell-pro mt-0 mb-60">




                                <div>
                                    <div class="slider-items-products">
                                        <div class="bestsell-block">
                                            <div class="block-title">
                                                <h2>Similar Products</h2>
                                            </div>
                                            <div id="bestsell-slider" class="product-flexslider hidden-buttons">
                                                <div class="slider-items slider-width-col4 products-grid block-content">
                                                    @foreach ($related_products as $related_product)
                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="item-img">
                                                                    <div class="item-img-info"> <a class="product-image"
                                                                            title="Retis lapen casen"
                                                                            href="{{ url('product-detail') }}?id={{ $related_product->id }}">
                                                                            <img alt=""
                                                                                src="{{ $related_product->productimage->image_url }}">
                                                                        </a>
                                                                        @if ($related_product->new_item)
                                                                            <div class="new-label new-top-left">new</div>
                                                                        @endif
                                                                        <div class="box-hover">
                                                                            <ul class="add-to-links">
                                                                                <li><a class="link-quickview openModal"
                                                                                        href="#"
                                                                                        data-details="{{ json_encode($related_product) }}"
                                                                                        onClick="setProductDetails($(this).data('details'))"></a>
                                                                                </li>
                                                                                <li><a class="link-wishlist @if ($related_product->is_wishlist) active @endif"
                                                                                        href="#"
                                                                                        onclick="addWishlist({{ $related_product->id }},$(this))"></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item-info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title"> <a
                                                                                title="Retis lapen casen"
                                                                                href="{{ url('product-detail') }}?id={{ $related_product->id }}">{{ $related_product->product_name }}</a>
                                                                        </div>
                                                                        <div class="brand">
                                                                            {{ $related_product->brand ? $related_product->brand->brand_name : '' }}
                                                                        </div>
                                                                        <div class="star-rating">
                                                                            <span
                                                                                style="width:{{ $related_product->rattings ? $related_product->rattings[0]->avg_ratting * 2 * 10 : '0' }}%">Rated
                                                                                <strong
                                                                                    class="rating">{{ count($related_product->rattings) > 0 ? $related_product->rattings[0]->avg_ratting : '0' }}</strong>
                                                                                out of 5</span>
                                                                        </div>
                                                                        <div class="item-content">
                                                                            <div class="item-price">
                                                                                <div class="price-box"> <span
                                                                                        class="regular-price"> <span
                                                                                            class="price">AED
                                                                                            {{ $related_product->discounted_price }}</span>
                                                                                    </span> </div>
                                                                            </div>
                                                                            {{-- <div class="action">
                                                                                <button class="button btn-cart"
                                                                                    type="button" title=""
                                                                                     data-details="{{ json_encode($related_product) }}"
                                                                                      onclick="addCart($(this).data('details'))"
                                                                                    data-original-title="Add to Cart"><i
                                                                                        class="fa fa-shopping-basket"></i></button>
                                                                            </div> --}}
                                                                               <div class="action">
                                                         <button class="button btn-cart" type="button" title=""
                                                             data-original-title="Add to Cart"
                                                             data-details="{{ json_encode($related_product) }}"
                                                             onclick="addCart($(this).data('details'))"><i
                                                                 class="fa fa-shopping-basket"></i></button>
                                                     </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
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
        $(document).ready(function() {
            if (jQuery('.mega-menu-category').is(':visible')) {
                jQuery('.mega-menu-category').slideUp();
            }
        });
    </script>
    <!-- JavaScript -->
@section('script')
    <script type="text/javascript" src="{{ asset('assets/js\jquery.flexslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js\cloud-zoom.js') }}"></script>
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
        $('.count-number,.quantity').on('click', '.plus', function(e) {
            let $input = $(this).prev('input.qty');
            let val = parseInt($input.val());
            $input.val(val + 1).change();
        });

        $('.count-number,.quantity').on('click', '.minus',
            function(e) {
                let $input = $(this).next('input.qty');
                var val = parseInt($input.val());
                if (val > 1) {
                    $input.val(val - 1).change();
                }
            });
    });



    function cartadd(id, variation_id, qty, stock) {
        if (qty > stock) {
            Toastify({
                text: "Please check stock",
                className: "error",
                close: true,
                style: {
                    background: "red",
                }
            }).showToast();
            return;
        }
        @php

            $tax = $data->tax;
            if ($data->tax_type == 'percentage') {
                $tax = round(($price * $tax) / 100, 2);
            }
        @endphp
        var variation = [];
        var attribute = [];
        $('.attribute-button').each(function() {
            if ($(this).hasClass('active')) {
                variation.push($(this).html());
                attribute.push($(this).data('attribute'));
            }

        })
        var setting = {
            url: '{{ url('/add-to-cart') }}',
            dataType: 'json',
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                product_id: id,
                product_name: $("#pro_name").val(),
                qty: qty,
                price: $("#pro_price").val(),
                shipping_cost: '{{ $data->shipping_cost }}',
                tax: {{ $tax }},
                image: $("#pro_img").val(),
                attribute: attribute,
                variation: variation,
                variationId: '{{ $variation ? $variation->id : '' }}'
            },

            success: function(response) {
                // console.log(response);

                if (response.status == 1) {
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

    function buynow(id, variation_id, qty, stock) {
        if (qty > stock) {
            Toastify({
                text: "Please check stock",
                className: "error",
                close: true,
                style: {
                    background: "red",
                }
            }).showToast();
            return;
        }
        @php

            $tax = $data->tax;
            if ($data->tax_type == 'percentage') {
                $tax = round(($price * $tax) / 100, 2);
            }
        @endphp
        var variation = [];
        var attribute = [];
        $('.attribute-button').each(function() {
            if ($(this).hasClass('active')) {
                variation.push($(this).html());
                attribute.push($(this).data('attribute'));
            }

        })
        var setting = {
            url: '{{ url('/add-to-cart') }}',
            dataType: 'json',
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                product_id: id,
                product_name: $("#pro_name").val(),
                qty: qty,
                price: $("#pro_price").val(),
                shipping_cost: '{{ $data->shipping_cost }}',
                tax: {{ $tax }},
                image: $("#pro_img").val(),
                attribute: attribute,
                variation: variation,
                variationId: '{{ $variation ? $variation->id : '' }}'
            },

            success: function(response) {
                // console.log(response);

                if (response.status == 1) {
                    Toastify({
                        text: "Cart Item Added",
                        className: "info",
                        close: true,
                        style: {
                            background: "#1cad6a",
                        }
                    }).showToast();
                    localStorage.setItem("cartupdate", 1);
                    window.location = '{{ url('cart') }}'
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
    function addRating(count, ref) {
        @if (session()->get('token'))
            $('.star').removeClass('.active');
            ref.addClass('active');
            $('#ratting').val(count);
        @else
            $('#myModalsignin').modal('show');
        @endif
    }
</script>
<script>
    function submitReview() {
        var token = "{{ session()->get('token') }}";
        $.ajax({
            url: '{{ config('global.api') }}/addratting',
            type: 'post',
            beforeSend: function(xhr) {
                xhr.setRequestHeader('Authorization', 'Bearer ' + token);
            },
            data: $('#addreviewform').serialize(),
            dataType: 'json',
            success: function(response) {
                if (response.status) {
                    Toastify({
                        text: response.message,
                        className: "info",
                        close: true,
                        style: {
                            background: "#1cad6a",
                        }
                    }).showToast();

                    let rating = $('#ratting').val();
                    let comment = $('#comment').val();
                    let discription = `<li class="comment">
                                  <div>
                                    <img alt="" src="{{ session()->get('profile_pic') }}" class="avatar avatar-60 photo">
                                    <div class="comment-text">
                                      <div class="star-rating">
                                        <span style="width:${rating*2*10}%">Rated <strong class="rating">${ratting}</strong> out of 5</span>
                                      </div>
                                      <p class="meta">
                                        <strong>{{ session()->get('name') }}</strong>
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
                    let review_count = parseInt($('#review_count').html());

                    $('#review_count').html(review_count + 1);
                } else {
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
<script>
    var selectedVariation = {!! json_encode($variation) !!}
    var variationAttributItem = {!! json_encode($data->variation_attribute_item) !!};
    var attributes = variationAttributItem.map((item) => {
        return item.attribute_name;
    })
    var attributeValues = selectedVariation.variation_item.map((item) => {
        return {
            'attribute_id': item.attribute_id,
            'value': item.variation_value
        }
    });

    function addVariation(attribute_id, variation_value, ref) {
        ref.closest('.points').find('button').removeClass('active');
        ref.addClass('active');
        var index = attributeValues.findIndex((item) => item.attribute_id == attribute_id);
        if (index >= 0) {
            attributeValues[index] = {
                'attribute_id': attribute_id,
                'value': variation_value
            }
        } else {
            attributeValues.push({
                'attribute_id': attribute_id,
                'value': variation_value
            });
        }
        if (attributeValues.length == attributes.length) {
            var variations = {!! json_encode($data->variations) !!};
            var variation = variations.find((variation) => {
                var filtered = variation.variation_item.filter((variation_item) => {
                    return attributeValues.some((attributeValue) => {
                        return attributeValue.attribute_id == variation_item.attribute_id &&
                            attributeValue.value == variation_item.variation_value
                    })
                });
                if (filtered.length == attributes.length) {
                    return true;
                }
                false;
            });
            if (variation) {
                window.location = `{{ url('product-detail') }}?id={{ $data->id }}&variation_id=${variation.id}`;
            } else {
                Toastify({
                    text: "Specific variation does not exist",
                    className: "error",
                    close: true,
                    style: {
                        background: "red",
                    }
                }).showToast();
            }
        }
    }
</script>
<script>
    function addWishlist(id, ref) {
        console.log(id);
        @if (session()->get('token'))
            var token = "{{ session()->get('token') }}";
            $.ajax({
                url: '{{ config('global.api') }}/addtowishlist',
                type: 'POST',
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token);
                },
                data: {
                    product_id: id
                },
                success: function(response) {
                    if (response.status == 1) {
                        $("#wishlist_act").addClass("active");
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
@endsection
