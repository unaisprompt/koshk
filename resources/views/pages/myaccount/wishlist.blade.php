@extends('layouts.app')

@section('content')
<div class="container bootstrap snippets bootdey">
<div class="row">
 @include('pages.myaccount.sidebar')
      <div class="col-sm-9 ">
        <article class="col-main">
          <div class="page-title">
            <h2>Wishlist</h2>
          </div>
          <div class="bestsell-block">

            <div id="bestsell-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4 products-grid block-content">

                <!-- Item -->
                @if(!empty($data))
                  {{-- {{dd($data)}} --}}
                @foreach($data['data'] as $item)
              
                <div class="item" style="padding: 2;">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen"
                          href="product_detail.html"> <img alt="" src="{{$item['productimage']['image_url']}}"> </a>
                        <div class="new-label new-top-right"><i class="fa fa-times" onclick="WishListdelete($(this))"
                            data-product_id="{{$item['id'] }}" aria-hidden="true"></i></div>
                        <div class="box-hover">

                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen"
                            href="#">{{$item['product_name']}}</a> </div>

                        <div class="star-rating">
                          <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                        </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span
                                  class="price">{{$item['product_price']}}</span>
                              </span> <span class="old-price"><span
                                  class="price">{{$item['discounted_price']}}</span></span></div>
                          </div>

                          <div class="action">
                            {{-- <button class="button btn-cart cart-padding" type="button" title=""
                              data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button> --}}
                              <button class="button btn-cart" type="button" title=""
                                                             data-original-title="Add to Cart"
                                                             data-details="{{ json_encode($item) }}"
                                                           onclick="addCart($(this).data('details'))"><i
                                                                 class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                @endif

                <!-- End Item -->

              </div>
            </div>
          </div>
        </article>
        <!--	///*///======    End article  ========= //*/// -->
@php
    $footerbanner=topOfferCommon('my_account_bottom');
@endphp
@if(isset($footerbanner))
        <section class="banner-row irf">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-12 col-md-12">
                <div class="position-relative">
                  <!-- Background -->
                  <img class="img-fluid hover-zoom" src="{{$footerbanner->image}}" onclick="window.location='{{$footerbanner->btn_link}}'" alt="">
                  <!-- Body -->

                </div>
              </div>

            </div>
          </div>
        </section>
@endif
      </div>
</div>
</div>
     
<!-- Main Container End -->
<script>
  function WishListdelete(ref) {
     $('.pre-loader').removeClass("hidded");
    var product_id = ref.data('product_id');
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type: "POST",
      url: '{{ url("removefromwishlist")}}',
      data: {
        product_id: product_id,
        // qty: qty,
      },
      cache: false,
      success: function(response) {
         $(".pre-loader").delay(2000).addClass("hidded");
        if (response.status == 1) {
          Swal.fire("Success!", response.message, "success").then(() => {
            location.reload();
          });
          document.getElementById("form").reset();
          $('#refresh').click();
        } else {
          Swal.fire("Failed!", response.message, "error");
          if (response.hasOwnProperty('error_list')) {
            for (x in response.error_list) {
              $('#error_' + x).html(response.error_list[x])
            }
          }
        }
      },
      error: function(xhr) {
         $(".pre-loader").delay(2000).addClass("hidded");
        console.log(xhr.responseText); // this line will save you tons of hours while debugging
        // do something here because of error
      }
    });
  };
</script>

@endsection