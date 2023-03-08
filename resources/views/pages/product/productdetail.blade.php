 
 @extends('layouts.app')

 @section('content')  

<!-- Start Page Title Area -->
 <div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Products Details</h1>
            {{-- <ul>
                <li><a href="index.html">Home</a></li>
                <li>Products Details</li>
            </ul> --}}
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Products Details Area -->
<div class="products-details-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="products-details-thumbs-image">
                   

                    <ul class="products-details-thumbs-image-slides">
                        @foreach($data['productimages'] as $img)
                        <li><img src="{{$img['image_url']}}" alt="image"></li>
                      
                        @endforeach
                    </ul>
                    <div class="slick-thumbs">
                        <ul>
                              @foreach($data['productimages'] as $img_thumb)
                            <li><img src="{{$img_thumb['image_url']}}" alt="image"></li>
                           
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="products-details-desc">
                    <h3>{{$data['product_name']}}</h3>
                    <input type="hidden" value="{{$data['product_name']}}" name="pro_name" id="pro_name">
                    <input type="hidden" value="{{$data['productimage']['image_url']}}" name="pro_img" id="pro_img">
                    {{-- {{dd($data['data'])}} --}}
                    <div class="price">
                        <span class="new-price">AED {{$data['discounted_price']}}</span>
                        <input type="hidden" value="{{$data['discounted_price']}}" name="price" id="pro_price">

                        @if($data['product_price']!=0) <span class="old-price">{{$data['product_price']}}</span>@endif
                    </div>
                    @if(count($data['rattings'])!=0)
                    <div class="rating">
                        @if(!empty($data['rattings']))
                        <i class='bx bxs-star'  style="@if($data['rattings'][0]['avg_ratting']>=1) color:#facb11; @else color: #afada8;  @endif"  ></i>
                        <i class='bx bxs-star' style="@if($data['rattings'][0]['avg_ratting']>=2) color:#facb11; @else color: #afada8;  @endif"></i>
                        <i class='bx bxs-star' style="@if($data['rattings'][0]['avg_ratting']>=3) color:#facb11; @else color: #afada8;  @endif"></i>
                        <i class='bx bxs-star' style="@if($data['rattings'][0]['avg_ratting']>=4) color:#facb11; @else color: #afada8;  @endif"></i>
                        <i class='bx bxs-star' style="@if($data['rattings'][0]['avg_ratting']>=5) color:#facb11; @else color: #afada8;  @endif"></i>
                   @endif
                    </div>
                    {{-- @else
                    <div class="rating">
                        <i class='bx bxs-star'  style=" color: #afada8; "></i>
                        <i class='bx bxs-star'  style=" color: #afada8; "></i>
                        <i class='bx bxs-star'  style=" color: #afada8; "></i>
                        <i class='bx bxs-star'  style=" color: #afada8; "></i>
                        <i class='bx bxs-star'  style=" color: #afada8; "></i>

                    </div> --}}
                    @endif
                    
                    <p>{{$data['description']}}</p>
                     {{-- {{dd($data)}} --}}
                    @if($data['is_variation']==1)
                    <input type="hidden" class="is_variation" id="is_variation" name="is_variation" value="1">
                    <input type="hidden" value="" name="variation_id" id="variation_id">
                    <input type="hidden" value="" name="variation_name" id="variation_name">


                    <div>
                        @foreach($data['variation_attribute_item'] as $atribute)
                        <p>{{$atribute['attribute_name']}}</p>
                        <input type="hidden" value="{{$atribute['attribute_id']}}" name="attribute_id" id="attribute_id">
                        <input type="hidden" value="{{$atribute['attribute_name']}}" name="attribute_name" id="attribute_name">

                        @foreach($atribute['items'] as $variation)
                        <input type="radio" class="btn-check variation-btn" name="rdVariation" id="danger-outlined{{$loop->iteration}}" value="{{$variation['variation_value']}}" >
                        <label class="btn btn-outline-info" for="danger-outlined{{$loop->iteration}}">{{$variation['variation_value']}}</label>
                        @endforeach

                        @endforeach
                      </div>
                      @else
                      <input type="hidden" class="is_variation" name="is_variation" id="is_variation" value="0">
                    @endif
                    <div class="products-add-to-cart">
                       
                        
                        <div class="input-counter">
                            <span class="minus-btn"><i class='bx bx-minus'></i></span>
                            <input type="text" value="1" name="pro_qty" id="pro_qty">
                            <span class="plus-btn"><i class='bx bx-plus'></i></span>
                        </div>
                        <button type="submit" id="cart_button" class="default-btn" value="{{$data['id']}}"><span>Add to Cart</span></button>
                       
                    </div>
                
                    @if(Session::has('user_id') && Session::has('token'))
                     <a class="add-to-wishlist"><i id="my_btn_heart" class='fa fa-heart' @if($data['is_wishlist']==1) style="color:red;" @endif></i> </a>
                    @endif
                    <ul class="products-info">
                        <li><span>Categories:</span> <a href="#">{{$data['category_name']}}</a></li>
                        <li><span>Tax:</span>{{$data['tax']}}@if($data['tax_type']=='percent') % @else AED @endif</li>
                        @php $tax=0; if($data['tax_type']=='percent') $tax=$data['discounted_price']/100*$data['tax']; else $tax=$data['tax'];  @endphp
                        <input type="hidden" value="{{$tax}}" name="pro_tax" id="pro_tax">
                        <input type="hidden" value="{{$data['shipping_cost']}}" name="pro_shipping" id="pro_shipping">

                        <li><span>Shipping Days:</span> {{$data['est_shipping_days']}}</li>
                        <li><span>Shipping Cost:</span> {{$data['shipping_cost']}} AED</li>

                    </ul>
                    <div class="products-share">
                        <ul class="social">
                            <li><span>Share:</span></li>
                            <li><a href="#" class="facebook" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="#" class="twitter" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="#" class="linkedin" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                            <li><a href="#" class="instagram" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="products-details-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="false">Description</button>
                        </li>
                       
                        <li class="nav-item">
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                            <p>{!!$data['detail_description']!!}</p>
                            <ul>
                                {{-- <li>Instant <strong>Patoi</strong> bestseller</li>
                                <li>Translated into 18 languages</li>
                                <li>#1 Most Recommended Book of the year.</li>
                                <li>A neglected project, widely dismissed, its champion written off as unhinged.</li>
                                <li>Yields a negative result in an experiment because of a flaw in the design of the experiment.</li>
                                <li>An Amazon, Bloomberg, Financial Times, Forbes, Inc., Newsweek, Strategy + Business, Tech Crunch, Washington Post Best Business Book of the year</li>
                            </ul>
                            <p><i>This story, dazzling in its powerful simplicity and soul-stirring wisdom, is about an Andalusian shepherd boy named Santiago who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids. Lorem ipsum dolor sit.</i></p> --}}
                        </div>
                      
                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                            <div class="products-review-comments">
                                @foreach($data['reviews'] as $review)

                                <div class="user-review">
                                    <img src="{{asset('assets/img/user/user1.png')}}" alt="image">
                                    <div class="review-rating">
                                        <div class="review-stars">
                                          
                                            <i class='bx bxs-star @if($review['ratting']>=1) checked  @endif'></i>
                                            <i class='bx bxs-star @if($review['ratting']>=2) checked  @endif'></i>
                                            <i class='bx bxs-star @if($review['ratting']>=3) checked  @endif'></i>
                                            <i class='bx bxs-star  @if($review['ratting']>=4) checked  @endif'></i>
                                            <i class='bx bxs-star  @if($review['ratting']>=5) checked  @endif'></i>
                                          
                                        </div>
                                    </div>
                                    <span class="d-block sub-name">{{$review['users']['name']}}</span>
                                    <p>{{$review['comment']}}</p>
                                </div>
                               
                              @endforeach
                                
                            </div>
                            <div class="review-form-wrapper">
                                <h3>Add a review</h3>
                                <form id="reviewForm" method="POST" action="{{url('product/review/add')}}">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$data['id']}}" id="product_id">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="rating">
                                                <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                                                <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
                                                <input type="radio" id="star3" name="rating" value="3"  /><label for="star3"></label>
                                                <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
                                                <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name *">
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email *">
                                            </div>
                                        </div> --}}
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <textarea placeholder="Your review" name="review" id="review" class="form-control" cols="30" rows="6" required></textarea>
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-12 col-md-12">
                                            <p class="comment-form-cookies-consent">
                                                <input type="checkbox" id="test1">
                                                <label for="test1">Save my name, email, and website in this browser for the next time I comment.</label>
                                            </p>
                                        </div> --}}
                                        <div class="col-lg-12 col-md-12">
                                            <button type="button" id="review_button">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Products Details Area -->

<script>

$('#cart_button').click(function(e){
 
        e.preventDefault();
        var variation=$('#is_variation').val();
         

        if(variation==1){
            var radioValue = $("#variation_name").val();
          //  alert(radioValue);
        //    return false;
            if(radioValue==''){

                Toastify({
            text: 'Pleas select variation',
            className: "info",
            close: true,
            style: {
                background: "#e11414",
            }
            }).showToast();

                return false;

            }

            var setting={
           url:'{{url("/add-to-cart")}}',
            dataType:'json',
            type:'post',
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
            data: { 
                product_id: $(this).val(),
                product_name: $("#pro_name").val(),
                qty: $("#pro_qty").val(),
                price: $("#pro_price").val(),
                shipping_cost: $("#pro_shipping").val(),
                tax: $("#pro_tax").val(),
                image: $("#pro_img").val(),
                attribute: $("#attribute_name").val(),
                variation: radioValue,
                variationId: $("#variation_id").val()

            },
          
            success:function(response){
             // console.log(response);

             if(response.status==1){
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

        }
        else{

            var setting={
           url:'{{url("/add-to-cart")}}',
            dataType:'json',
            type:'post',
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
            data: { 
                product_id: $(this).val(),
                product_name: $("#pro_name").val(),
                qty: $("#pro_qty").val(),
                price: $("#pro_price").val(),
                shipping_cost: $("#pro_shipping").val(),
                tax: $("#pro_tax").val(),
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

        }

      
     
       
     
            $.ajax(setting);
    });

    $('#review_button').click(function(e){
    e.preventDefault();
    // $('#review_button').prop('disabled', true);

    var radioValue = $("input[name='rating']:checked").val();
        $.ajax({
        type: "POST",
        url: '{{url("product/review/add")}}',
        headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
        data: {
               product_id: $("#product_id").val(),
               rating: radioValue,
               review: $("#review").val()
             }, 
        success: function(response) {
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
             else{
                Toastify({
            text: 'Review already added',
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
               product_id: $("#product_id").val()
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


    $('.variation-btn').click(function(e){
    e.preventDefault();
   // alert($(this).val());
        $.ajax({
        type: "POST",
        url: '{{url("product/variation-price-change")}}',
        headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
        data: {
               product_id: $("#product_id").val(),
               variation:$(this).val()
             }, 
        success: function(response) {
            if(response.status==1){
              // alert(response);
            $(".new-price").text('AED '+response.price);
            $("#pro_price").val(response.price);
             $('#variation_id').val(response.variation);
             $('#variation_name').val(response.variation_name);
             }
             else{
                Toastify({
            text: 'Pleas select variation',
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

