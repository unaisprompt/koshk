 @extends('layouts.app')
 @section('content')
     <style>
         .hide {
             display: none !important;
         }

         .cstock {
             padding: 2px;
             margin-right: 20px;
             border-radius: 50px;

             .img-cart {
                 width: 100%;
                 height: 147px;
                 object-fit: contain;
             }
     </style>
     <!-- Main Container -->
     <section class="main-container col1-layout">
         <div class="container">
             <!-- Breadcrumbs -->
             <div class="breadcrumbs">
                 <ul>
                     <li class="home"> <a href="{{ url('') }}" title="Go to Home Page">Home</a> <span>/</span> </li>
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
                                     @php
                                         $total = 0;
                                         $shipping = 0;
                                         $total_discount = 0;
                                         $total_loyality_discount = 0;
                                         $total_tax = 0;
                                     @endphp

                                     @if ($data)
                                         @foreach ($data as $item)
                                             <a href="{{ url('product-detail?id=' . $item['product_id']) }}"
                                                 style="text-decoration:none;color:black;">
                                                 <div class="uthssk">
                                                     <div class="pous img-cart" style="width:auto">
                                                         <img src="{{ $item['image_url'] }}" alt="">
                                                     </div>
                                                     <div class="pous1">
                                                         {{-- <h3>Brand</h3> --}}
                                                         <h4>{{ $item['product_name'] }}</h4>

                                                         {{-- @if (isset($item['created_at']))
                                                         <small>Ordered
                                                             {{ \Carbon\Carbon::parse($item['created_at'])->diffForHumans(\Carbon\Carbon::now()) }}</small>
                                                     @endif --}}
                                                         @php
                                                             $stock = $item['stock'];
                                                         @endphp
                                                         <span class="cstock"
                                                             @if ($stock < 5) style="background:red;"@elseif($stock < 10)style="background:yellow;" @elseif($stock > 10)style="background:green;" @endif>
                                                             @if ($stock < 10)
                                                                 {{ $stock }}
                                                             @endif in stock
                                                         </span>
                                                     <small>
<br><br><b>Shipping cost will be calculate as per the Emirates</b><br></small>
                                                         <h5>Sold by <b>Gift City</b></h5>
                                                         @if (Session::has('user_id'))
                                                             <a href="{{ url('delete-cart') }}/{{ $item['id'] }}">
                                                                 <span><i class="fa fa-trash"></i> Remove</span> </a>
                                                             @if ($item['coupon_name'])
                                                                 <br />
                                                                 COUPON : {{ $item['coupon_name'] }} <button
                                                                     class="btn btn-danger btn-sm btn-rounded"
                                                                     onclick="removeCoupon({{ $item['id'] }})"><i
                                                                         class="fa fa-trash"></i></button>
                                                             @else
                                                                 <div>
                                                                     <input type="text"
                                                                         class="form-control unicase-form-control input-text coupon_code_ind"
                                                                         value="" placeholder="Coupon code">
                                                                     <button type="submit"
                                                                         class="btn btn-upper btn-primary"
                                                                         name="apply_coupon" value="Apply coupon"
                                                                         onclick="applyCouponInd($(this).closest('div').find('.coupon_code_ind').val(),{{ $item['id'] }})">Apply</button>
                                                                 </div>
                                                             @endif
                                                         @else
                                                             <a href="{{ url('delete-cart') }}/{{ $item['product_id'] }}">
                                                                 <span><i class="fa fa-trash"></i> Remove</span> </a>
                                                         @endif
                                                     </div>
                                                     <div class="pous2">
                                                         <p>AED {{ $item['price'] * $item['qty'] }}</p>
                                                         @php
                                                             $total += $item['price'] * $item['qty'];
                                                             $total_discount += $item['discount_amount'] ?? 0;
                                                             $shipping += $item['shipping_cost'];
                                                             $total_loyality_discount += isset($item['loyality_discount']) ? $item['loyality_discount'] : 0;
                                                             $total_tax += isset($item['tax']) ? $item['tax'] : 0;
                                                         @endphp
                                                         <div class="count-number">
                                                             <form id="myform" method="POST" class="quantity"
                                                                 action="#">
                                                                 <input type='button' value='-' class='qtyminus minus'
                                                                     field='quantity' />
                                                                 <input type='text' name='quantity'
                                                                     data-cart_id="{{ Session::has('user_id') ? $item['id'] : $item['product_id'] }}"
                                                                     data-stock="{{ $item['stock'] }}"
                                                                     value='{{ $item['qty'] }}' class='qty'
                                                                     onkeypress="qtyUpdate(event,$(this))" />
                                                                 <input type='button' value='+' class='qtyplus plus'
                                                                     field='quantity' />
                                                             </form>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </a>
                                         @endforeach
                                     @endif

                                     <div class="gcvYcJ">
                                         <a href="{{ url('/') }}"><button type="button">Continue
                                                 Shopping</button></a>
                                     </div>
                                 </div>
                                 <div class="col-sm-4 col-lg-4">
                                     <div class="hcbyIU">
                                         <h1>Order Summary</h1>
                                         @if (Session::has('user_id'))
                                             <div class="coupon thm-coupon-cart">
                                                 <input type="text" name="coupon_code"
                                                     class="form-control unicase-form-control input-text" id="coupon_code"
                                                     value="" placeholder="Coupon code">
                                                 <button type="submit" class="btn btn-upper btn-primary"
                                                     name="apply_coupon" value="Apply coupon"
                                                     onclick="applyCoupon()">Apply</button>
                                             </div>
                                         @endif
                                         <div class="po1s">
                                             <div class="d-flex justify-content-between">
                                                 <div class="cilop">
                                                     <h5>Total</h5>
                                                     <h5>Discount</h5>
                                                     {{-- <h5>Delivery charges</h5> --}}
                                                     <h5>Tax</h5>
                                                 </div>
                                                 <div class="cilop1">
                                                     <h5>AED {{ number_format($total, 2) }}</h5>
                                                     <h5>-AED {{ number_format($total_discount, 2) }}</h5>
                                                     {{--  <h5>+AED {{ number_format($shipping, 2) }}</h5> --}}
                                                     <h5>+AED {{ number_format($total_tax, 2) }}</h5>
                                                 </div>
                                             </div>
                                             <hr>
                                             <div class="d-flex justify-content-between">
                                                 <div class="cilop">
                                                     <h5>Net Amount</h5>
                                                     @php
                                                         $net_amount = $total - $total_discount + $shipping + $total_tax;
                                                     @endphp
                                                     @if (session()->get('token'))
                                                         @php
                                                             
                                                             try {
                                                                 $applicable_discount = ($net_amount * $loyality_discount_applicable) / 100;
                                                                 $points_to_discount = $loyality_points / $aed_to_loality;
                                                             } catch (Exception $e) {
                                                                 $points_to_discount = 0;
                                                                 $applicable_discount = 0;
                                                             }
                                                             $applied_discount = $points_to_discount;
                                                             if ($applicable_discount < $points_to_discount) {
                                                                 $applied_discount = $applicable_discount;
                                                             }
                                                             if ($total_loyality_discount > 0) {
                                                                 $applied_discount = $total_loyality_discount;
                                                             }
                                                             try {
                                                                if($applied_discount!=0 && $net_amount!=0){
                                                                    $percentage = ($applied_discount * 100) / $net_amount;
                                                                }
                                                                 else{
                                                                    $percentage = 0;
                                                                 }
                                                             } catch (\Exception $e) {
                                                                 $percentage = 0;
                                                             }
                                                         @endphp
                                                         <label><input type="checkbox" id="apply_coins"
                                                                 @if ($total_loyality_discount > 0) checked @endif
                                                                 onchange="applyCoins({{ round($percentage, 2) }})">&ensp;Apply
                                                             {{ $applied_discount * $aed_to_loality }} coins</label>
                                                     @endif

                                                 </div>
                                                 <div class="cilop1">
                                                     <h5>AED {{ number_format($net_amount, 2) }}</h5>
                                                 </div>
                                             </div>
                                             <hr>
                                             @if (session()->get('token'))
                                                 <div class="d-flex justify-content-between @if ($total_loyality_discount == 0) hide @endif"
                                                     id="coins_div">
                                                     <div class="cilop">
                                                         <!-- <h5>Total Loyality points</h5> -->
                                                         <!-- <h5>Applied loyality points</h5> -->
                                                         <h5>Loyality Discount amount</h5>
                                                         <h5><b>Subtotal</b></h5>
                                                     </div>
                                                     <div class="cilop1">
                                                         <!-- <h5>{{ $loyality_points }}</h5> -->
                                                         <!-- <h5>{{ $applied_discount * $aed_to_loality }}</h5> -->
                                                         <h5>AED {{ $applied_discount }}</h5>
                                                         <h5>AED
                                                             {{ $net_amount - $applied_discount }}
                                                         </h5>
                                                     </div>
                                                 </div>
                                             @endif
                                             <div class="ctllRv">
                                                 <button
                                                     @if (session()->get('user_id')) onclick="window.location='{{ url('checkout') }}'" @else  onclick="$('#myModalsignin').modal('show');" @endif>Checkout</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="bestsell-pro mt-0 mb-60">
                                 <div>

                                     {{-- <section class="banner-row irf">
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
      </section> --}}
                                     <div class="slider-items-products">
                                         <div class="bestsell-block">
                                             <div class="block-title">
                                                 <h2>You May also intrested</h2>
                                             </div>
                                             <div id="bestsell-slider" class="product-flexslider hidden-buttons">
                                                 <div class="slider-items slider-width-col4 products-grid block-content">
                                                     @foreach ($similar_products as $product)
                                                         <!-- Item -->
                                                         <div class="item">
                                                             <div class="item-inner">
                                                                 <div class="item-img">
                                                                     <div class="item-img-info"> <a class="product-image"
                                                                             title="{{ $product->product_name }}"
                                                                             href="{{ url('product-detail') }}?id={{ $product->id }}">
                                                                             <img alt=""
                                                                                 src="{{ $product->productimage->image_url }}">
                                                                         </a>
                                                                         <div class="box-hover">
                                                                             <ul class="add-to-links">
                                                                                 <li><a class="link-quickview openModal"
                                                                                         href="#"
                                                                                         data-details="{{ json_encode($product) }}"
                                                                                         onClick="setProductDetails($(this).data('details'))"></a>
                                                                                 </li>
                                                                                 <li><a class="link-wishlist @if ($product->is_wishlist) active @endif"
                                                                                         href="#"
                                                                                         onclick="event.preventDefault();addWishlist({{ $product->id }},$(this))"></a>
                                                                                 </li>
                                                                             </ul>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <div class="item-info">
                                                                     <div class="info-inner">
                                                                         <div class="item-title"> <a
                                                                                 title="{{ $product->product_name }}"
                                                                                 href="{{ url('product-detail') }}?id={{ $product->id }}">
                                                                                 {{ $product->product_name }} </a> </div>
                                                                         <div class="brand">
                                                                             {{ $product->brand ? $product->brand->brand_name : '' }}
                                                                         </div>
                                                                         <div class="item-content">
                                                                             <div class="star-rating">
                                                                                 <span
                                                                                     style="width:{{ count($product->rattings) > 0 ? $product->rattings[0]->avg_ratting * 2 * 10 : '0' }}%">Rated
                                                                                     <strong
                                                                                         class="rating">{{ count($product->rattings) > 0 ? $product->rattings[0]->avg_ratting : 0 }}</strong>
                                                                                     out of 5</span>
                                                                             </div>
                                                                             <div class="item-price">
                                                                                 <div class="price-box"> <span
                                                                                         class="regular-price"> <span
                                                                                             class="price">AED
                                                                                             {{ $product->discounted_price }}</span>
                                                                                     </span> </div>
                                                                             </div>
                                                                             <div class="action">
                                                                                 <button class="button btn-cart"
                                                                                     type="button" title=""
                                                                                     data-original-title="Add to Cart"
                                                                                     data-details="{{ json_encode($product) }}"
                                                                                     onclick="addCart($(this).data('details'))"><i
                                                                                         class="fa fa-shopping-basket"></i></button>
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
                     </article>
                     <!--	///*///======    End article  ========= //*/// -->
                 </div>

             </div>
         </div>
     </section>
     <!-- Main Container End -->
     <script>
         function addCart(product) {
             if (product.is_variation == 1) {
                 window.location = '{{ url('product-detail') }}?id=' + product.id;
                 return;
             }
             var tax = 0;
             if (product.tax_type == "amount") {
                 tax = product.tax;
             } else {
                 tax = product.discounted_price * product.tax / 100;
             }
             var setting = {
                 url: '{{ url('/add-to-cart') }}',
                 dataType: 'json',
                 type: 'post',
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
     </script>
     <script>
         $(document).ready(function() {
             if (jQuery('.mega-menu-category').is(':visible')) {
                 jQuery('.mega-menu-category').slideUp();
             }
         });

         function updateCart(qty, cartid) {
             var setting = {
                 url: '{{ url('/update-cart') }}',
                 dataType: 'json',
                 type: 'post',
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 },
                 data: {
                     qty: qty,
                     cart_id: cartid
                 },
                 success: function(response) {
                     if (response.status == 1) {
                         Toastify({
                             text: "Cart Item Updated",
                             className: "info",
                             close: true,
                             style: {
                                 background: "#1CAD6A",
                             }
                         }).showToast();
                         location.reload();
                     }
                 },
                 error: function(xhr) {
                     console.log(xhr.responseText); // this line will save you tons of hours while debugging
                     // do something here because of error
                 }
             };
             $.ajax(setting);
         }

         function applyCoupon() {
             if ($('#coupon_code').val() == '') {
                 return Toastify({
                     text: 'coupon code field is required',
                     className: "info",
                     close: true,
                     style: {
                         background: "red",
                     }
                 }).showToast();
             }
             $.ajax({
                 url: '{{ config('global.api') }}/checkout',
                 type: 'post',
                 beforeSend: function(xhr) {
                     xhr.setRequestHeader('Authorization', 'Bearer {{ session()->get('token') }}');
                 },
                 data: {
                     user_id: {{ session()->get('user_id') ?? 0 }},
                     coupon_name: $('#coupon_code').val()
                 },

                 dataType: 'json',
                 success: function(response) {
                     if (response.status == 1) {
                         Toastify({
                             text: response.message,
                             className: "info",
                             close: true,
                             style: {
                                 background: "#1CAD6A",
                             }
                         }).showToast();
                         location.reload();
                     } else {
                         Toastify({
                             text: response.message,
                             className: "info",
                             close: true,
                             style: {
                                 background: "red",
                             }
                         }).showToast();
                     }
                 }
             })
         }

         function applyCouponInd(couponCode, cart_id) {
             if (couponCode == '') {
                 return Toastify({
                     text: 'coupon code field is required',
                     className: "info",
                     close: true,
                     style: {
                         background: "red",
                     }
                 }).showToast();
             }
             $.ajax({
                 url: '{{ config('global.api') }}/apply_coupon',
                 type: 'post',
                 beforeSend: function(xhr) {
                     xhr.setRequestHeader('Authorization', 'Bearer {{ session()->get('token') }}');
                 },
                 data: {
                     cart_id: cart_id,
                     coupon_name: couponCode
                 },

                 dataType: 'json',
                 success: function(response) {
                     if (response.status == 1) {
                         Toastify({
                             text: response.message,
                             className: "info",
                             close: true,
                             style: {
                                 background: "#1CAD6A",
                             }
                         }).showToast();
                         location.reload();
                     } else {
                         Toastify({
                             text: response.message,
                             className: "info",
                             close: true,
                             style: {
                                 background: "red",
                             }
                         }).showToast();
                     }
                 }
             })
         }
     </script>

     <script>
         jQuery(document).ready(($) => {
             $('.quantity').on('click', '.plus', function(e) {
                 let $input = $(this).prev('input.qty');
                 let val = parseInt($input.val());
                 let qty = val + 1;
                 let stock = parseInt($input.data('stock'));
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
                 $input.val(qty).change();
                 updateCart(qty, $input.data('cart_id'));
             });

             $('.quantity').on('click', '.minus',
                 function(e) {
                     let $input = $(this).next('input.qty');
                     var val = parseInt($input.val());
                     let qty = val - 1;
                     let stock = parseInt($input.data('stock'));
                     if (qty > stock) {
                         Toastify({
                             text: "Please check stock",
                             className: "error",
                             close: true,
                             style: {
                                 background: "red",
                             }
                         }).showToast();
                         qty = stock;
                     }
                     if (val > 1) {
                         $input.val(qty).change();
                         updateCart(qty, $input.data('cart_id'));
                     }
                 });
         });
     </script>
     <script>
         function qtyUpdate(e, ref) {
             var key = e.which;
             if (key == 13) {
                 e.preventDefault();
                 let qty = parseInt(ref.val());
                 let stock = parseInt(ref.data('stock'));
                 if (qty > stock) {
                     Toastify({
                         text: "Please check stock",
                         className: "error",
                         close: true,
                         style: {
                             background: "red",
                         }
                     }).showToast();
                     qty = stock;
                 }
                 updateCart(qty, ref.data('cart_id'));

             }
         }
     </script>
     <script>
         function removeCoupon(cart_id) {
             $.ajax({
                 url: '{{ config('global.api') }}/remove_coupon',
                 type: 'post',
                 beforeSend: function(xhr) {
                     xhr.setRequestHeader('Authorization', 'Bearer {{ session()->get('token') }}');
                 },
                 data: {
                     cart_id
                 },
                 dataType: 'json',
                 success: function(response) {
                     if (response.status == 1) {
                         Toastify({
                             text: response.message,
                             className: "info",
                             close: true,
                             style: {
                                 background: "#1CAD6A",
                             }
                         }).showToast();
                         location.reload();
                     } else {
                         Toastify({
                             text: response.message,
                             className: "info",
                             close: true,
                             style: {
                                 background: "red",
                             }
                         }).showToast();
                     }
                 }
             })
         }

         function applyCoins(discount_percentage) {
             if (!$('#apply_coins').prop('checked')) {
                 discount_percentage = 0;
             }
             $.ajax({
                 url: '{{ config('global.api') }}/apply_loyality_points',
                 type: 'post',
                 beforeSend: function(xhr) {
                     xhr.setRequestHeader('Authorization', 'Bearer {{ session()->get('token') }}');
                 },
                 data: {
                     discount_percentage
                 },
                 success: function(response) {
                     if (response.status) {
                         if (discount_percentage > 0) {
                             $('#coins_div').removeClass('hide');
                         } else {
                             $('#coins_div').addClass('hide');
                         }
                     } else {
                         Toastify({
                             text: response.error,
                             className: "error",
                             close: true,
                             style: {
                                 background: "red",
                             }
                         }).showToast();
                     }
                 }
             })

         }

         function addWishlist(id, ref) {
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
