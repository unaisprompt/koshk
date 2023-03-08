@extends('layouts.app')

 @section('content')  

 <!-- Start Page Title Area -->
 <div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>My Cart</h1>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Cart Area -->
<div class="cart-area ptb-100">
    <div class="container">
        <form>
            <div class="cart-table table-responsive">
                <table class="table table-bordered cart-table" id="cart-table">
                    <thead>
                        <tr>
                            <th scope="col" width="10%"></th>
                            <th scope="col" width="30%">Product</th>
                            <th scope="col" width="12%">Price</th>
                            <th scope="col" width="12%">Tax</th>
                            <th scope="col" width="12%">shipping Cost</th>
                            <th scope="col" width="12%">Quantity</th>
                            <th scope="col" width="12%">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total=0; $shipping=0;$total_discount=0; @endphp
                        {{-- {{dd($data)}} --}}
                        @if($data)
                        @foreach($data as $item)
                        <tr>
                            <td>
                                @if(Session::has('user_id'))<a href="{{url('delete-cart')}}/{{$item['id']}}" class="remove"><i class='bx bx-trash'></i></a>@else
                                <a href="{{url('delete-cart')}}/{{$item['product_id']}}" class="remove"><i class='bx bx-trash'></i></a> @endif
                            </td>
                            <td class="product-thumbnail">
                               @if(Session::has('user_id')) <a  href="{{url('product/detail')}}?product={{$item['id']}}&productname={{$item['product_name']}}">@endif
                                    <img src="{{$item['image_url']}}" alt="item" style="height: 73px;">
                                    <h3>{{ Str::limit($item['product_name'], 30)}}</h3>
                                    @if(Session::has('user_id'))
                                    @if(count($item['variations'])>0)
                                    <p>{{$item['variations'][0]['attribute']}}: {{$item['variations'][0]['variation']}}</p>
                                    @endif
                                    @if($item['coupon_name'])
                                    <p>
                                    <a href="{{url('coupon-remove')}}?cart_id={{$item['id']}}" style="color:red">Remove Coupon({{$item['coupon_name']}})</a>
                                    </p>
                                    @endif
                                    @else

                                    @if($item['variationId'])
                                    <p>{{$item['attribute']}}: {{$item['variation']}}</p>
                                    @endif

                                    @endif
                                </a>
                            </td>
                            <td>AED {{$item['price'] * $item['qty']}}</td>
                            <td>AED {{$item['tax'] * $item['qty']}}</td>
                            <td>AED {{$item['shipping_cost'] * $item['qty']}}</td>
                            <td class="product-quantity">
                                <div class="input-counter">
                                    <span class="minus-btn qtybtn"><i class='bx bx-minus'></i></span>
                                    <input type="text" class="qty" value="{{$item['qty']}}" min="1">
                                    <input type="hidden" value="{{$item['qty']}}" class="qtycount">
                                    <span class="plus-btn qtybtn"><i class='bx bx-plus'></i></span>
                                </div>
                                <input type="hidden" class="cart_id" value="@if(Session::has('user_id')){{$item['id']}}@else{{$item['product_id']}}@endif" id="cart_id">

                            </td>
                            @php 
                            if(Session::has('user_id')){
                              $discount = $item['discount_amount'];
                            }else{
                              $discount =   0;
                            }
                        
                        
                            @endphp
                            @php $total+=($item['price'] + $item['tax'] + $item['shipping_cost']) * $item['qty'] -  $discount;$shipping+= $item['shipping_cost'] * $item['qty']; $total_discount += $discount; @endphp
                            <td>AED {{ ($item['price'] + $item['tax'] + $item['shipping_cost']) * $item['qty'] - $discount}}</td>
                        </tr>
                        @endforeach
                        @endif
                       
                    </tbody>
                </table>
            </div>
            <div class="cart-buttons">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-sm-12 col-md-5">
                        <a href="{{url('products')}}" class="default-btn"><span>Continue to Shoping</span></a>

                    </div>
                    <div class="col-lg-7 col-sm-12 col-md-7 text-end ">
                        @if(Session::has('user_id'))
                         <div class="shopping-coupon-code">
                            <input type="text" class="form-control" placeholder="Coupon code" name="coupon-code" id="coupon-code">
                            <button type="button" id="apply-coupon">Apply Coupon</button>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="cart-totals">
                
                <ul>
                    {{-- <li>Subtotal <span>AED {{$total}}</span></li> --}}
                    <li>Discount <span>AED {{$total_discount}}</span></li>
                    <li>Total <span>AED {{$total}} </span></li>
                </ul>
                @if(Session::has('user_id'))
                <a href="{{url('checkout')}}" class="default-btn"><span>Proceed to Checkout</span></a>
                    @else
                <a class="default-btn" onclick="$('#exampleModalCenter').modal('show');" >
                            <span>Proceed to Checkout</span></a>
                        @endif
                        <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle" ><img style=" display: block; margin-left: 175px; margin-right: auto; width: 30%;" src="{{asset('assets/img/feather.png')}}" alt=""></h5>
                                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button> --}}
                                </div>

                                         <form method="post">
                                            <div class="modal-body">
                                                <label> Email </label>
                                              <input type="text" class="form-control" id="email" name="email" placeholder="email">
                                             <label> Password </label>
                                              <input type="password" class="form-control" id="password" name="password" placeholder="password">

                                           </div>
                                           
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary closemodal close"  data-dismiss="modal">Close</button>
                                              <button type="button" class="btn btn-primary" id="login">Login</button>
                                            </div>
                                      </form>

                                    
                                        <div class="row">
                                            {{-- <hr> --}}
                                            <p class="col-6 " style="float: left;color: rgb(46, 46, 189);padding-left: 25px;"><a href="{{url('register')}}" class="tooltip-test" title="Tooltip">Sign Up</a></p>
                                            <p class="col-6  pl-5" style="float: right;color: rgb(46, 46, 189);padding-left: 75px;"><a href="{{url('user-forget')}}" class="tooltip-test" title="Tooltip">Lost your password?</a> </p>

                                        </div>
                                     
                                          </div>
                                        </div>
                                      </div>
            </div>
        </form>
    </div>
</div>
<!-- End Cart Area -->

<script>

   $("#cart-table").on('click','.qtybtn',function(e){
      
            e.preventDefault();
        
           // var currentRow=$(this).closest("tr"); 
           var qty = $(this).closest("tr").find('.qtycount').val();
           var cartid = $(this).closest("tr").find('.cart_id').val();

           // alert(value);
        
           var setting={
               url:'{{url("/update-cart")}}',
                dataType:'json',
                type:'post',
                headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                data: { 
                    qty: qty,
                    cart_id: cartid
                },
              
                success:function(response){
                 // console.log(response);
    
                 if(response.status==1){
                    Toastify({
                text: "Cart Item Updated",
                className: "info",
                close: true,
                style: {
                    background: "#1cad6a",
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
        });

        $('#apply-coupon').click(function(e){
    e.preventDefault();
   // alert($(this).val());
        $.ajax({
        type: "POST",
        url: '{{url("coupon-add")}}',
        headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
        data: {
            coupon: $("#coupon-code").val()
             }, 
        success: function(response) {
           // alert(response);
            if(response.status==1){

                Toastify({
                text: "Coupon added",
                className: "info",
                close: true,
                style: {
                    background: "#1cad6a",
                }
                }).showToast();
                location.reload();

             }
                        
        }
    });
    });

      $(".close").click(function(){
            $(".modal").modal('hide');
        });

         $("#login").click(function() {

                var email = $("#email").val();
                 var password = $("#password").val();

            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

           
            $.ajax({
            type: "POST",
            dataType:'json',
            url: '{{ url("loginPop")}}',
             data: {
                    email: email,
                    password: password,
            },
            cache: false,
            success: function (response) {
                    $(".preloader").hide();
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
                error: function (xhr) {
                    $(".preloader").hide();
                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
            });
            });
    </script>

 @endsection