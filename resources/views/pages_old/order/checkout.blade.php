@extends('layouts.app')

@section('content')  
   
   <!-- Start Page Title Area -->
   <div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Checkout</h1>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Checkout Area -->
<div class="checkout-area ptb-100">
    <div class="container">
        <div class="user-actions">
            <span>Back to cart? <a href="{{url('cart')}}">Click</a></span>
        </div>
        <div class="user-actions">
            <span>Add New Address? <a href="{{url('address')}}">Click</a></span>
        </div>
        {{-- <a href="{{url('address')}}"><button class="bt btn-primary"  style="text-decoration: none; color:white;">Add Address</button></a> --}}
        <form method="POST" action="{{url('order')}}">
            @csrf
            <div class="row">
                {{-- <div class="col-lg-6 col-md-12">
                    <div class="billing-details">
                        <h3><span>Billing details</span></h3>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                     @if(!empty($finalData['address']['data']))
                                    <select name="street_address" id="street_address"  class="form-control">
                                      @foreach($finalData['address']['data'] as $address_data) 
                                      <option value="{{$address_data['id']}}"  @if($loop->iteration == 1) selected @endif>{{$address_data['street_address']}}</option>
                                     @endforeach   
                                    </select>
                                           @endif
                                    </div>
                            </div>
                           <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>First name <span class="required">*</span></label>
                                    <input type="text" name="first_name" id="first_name" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Last name <span class="required">*</span></label>
                                    <input type="text" name="last_name" id="last_name" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>mobile phone</label>
                                    <input type="text" name="mobile" id="mobile" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Email <span class="required">*</span></label>
                                    <input id="email" name="email" type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Landmark <span class="required">*</span></label>
                                    <input type="text" name="landmark" id="landmark" class="form-control" placeholder="House number and street name" readonly>
                                </div>
                            </div>
                         <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>City <span class="required">*</span></label>
                                    <input type="text"name="city" id="city" class="form-control" readonly>
                                </div>
                          </div>
                         </div>
                    </div>
                </div> --}}
                <div class="col-lg-6 col-md-12">
                    <div class="billing-details">
                        <h3><span>Shipping address?</span></h3>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                        <label>Select Address <span class="required">*</span></label>
                             @if(!empty($finalData['address']['data']))
                                    <select name="shipping_address" id="shipping_address"  class="form-control">
                                        {{-- <option value="">Select Address</option> --}}
                                      @foreach($finalData['address']['data'] as $address_data) 
                                      <option value="{{$address_data['id']}}" @if($loop->iteration == 1) selected @endif>{{$address_data['street_address']}}</option>
                                     @endforeach   
                                    </select>
                                           @endif
                            </div>
                            </div>
                                <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>First name <span class="required">*</span></label>
                                    <input type="text" name="first_name_shipping" id="first_name_shipping" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Last name <span class="required">*</span></label>
                                    <input type="text" name="last_name_shipping" id="last_name_shipping" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>mobile phone</label>
                                    <input type="text" name="mobile_shipping" id="mobile_shipping" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Email <span class="required">*</span></label>
                                    <input id="email_shipping" name="email_shipping" type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Landmark <span class="required">*</span></label>
                                    <input type="text" name="landmark_shipping" id="landmark_shipping" class="form-control" placeholder="House number and street name" readonly>
                                </div>
                            </div>
                         <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>City <span class="required">*</span></label>
                                    <input type="text"name="city_shipping" id="city_shipping" class="form-control" readonly>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="order-details">
                        <h3>Order Summery</h3>
                        <div class="order-table table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    {{-- {{dd($finalData)}} --}}
                                   @php $subtotal=0; 
                                   $shiping = 0;
                                   $tax = 0;
                                   @endphp
                                   @foreach($finalData['data'] as $value)
                                   @php
                                    $subtotal += $value['price'] * $value['qty']-$value['discount_amount'];
                                    $shiping += $value['shipping_cost'] * $value['qty'];
                                    $tax += $value['tax'] * $value['qty'];
                                    @endphp
                                    
                                   @endforeach
                                    <tr>
                                        <td class="order-subtotal"><span>Subtotal</span></td>
                                        <td class="order-subtotal-price">
                                            <span class="order-subtotal-amount">AED {{$subtotal}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="order-shipping"><span> Shipping</span></td>
                                        <td class="shipping-price">
                                            <span>AED {{$shiping}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="order-shipping"><span>Tax</span></td>
                                        <td class="shipping-price">
                                            <span>{{$tax}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="total-price"><span>Order Total</span></td>
                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">AED {{$subtotal+$shiping+$tax}}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="payment-box">
                            <div class="payment-method">
                              
                                {{-- <p>
                                    <input type="radio" id="paypal" name="radio-group">
                                    <label for="paypal">PayPal</label>
                                    <img src="assets/img/paypal.png" alt="paypal">
                                    Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="privacy-policy.html">privacy policy</a>.
                                </p> --}}
                                <p>
                                    <input type="radio" id="cash-on-delivery" name="payment_type" value="1" checked="checked">
                                    <label for="cash-on-delivery">Cash on delivery</label>
                                    Pay with cash upon delivery.
                                </p>
                            </div>
                            <button type="submit" class="default-btn"><span>Place Order</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End Checkout Area -->
<script>
 $(document).ready(function () {
            $("#street_address").click(function() {
            var address_id = $("#street_address").val();
          
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
            $.ajax({
            type: "POST",
            url: '{{ url("address-data-get")}}',
            data: {
                    address_id: address_id,
            },
            cache: false,
            success: function (response) {
                    $(".preloader").hide();
                    if (response.status == 1) {
                        // Swal.fire("Success!", response.message, "success").then(() => {
                     $("#landmark").val(response.data.landmark);     
                     $("#email").val(response.data.email);     
                     $("#first_name").val(response.data.first_name);      
                     $("#mobile").val(response.data.mobile);     
                     $("#last_name").val(response.data.last_name);     
                     $("#city").val(response.data.city);         
                      console.log(response);
                        // });
                        // document.getElementById("form").reset();
                        // $('#refresh').click();
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
             //Billing data
            $("#shipping_address").click(function() {
            var address_id = $("#shipping_address").val();
          
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
            $.ajax({
            type: "POST",
            url: '{{ url("address-data-get")}}',
            data: {
                    address_id: address_id,
            },
            cache: false,
            success: function (response) {
                    $(".preloader").hide();
                    if (response.status == 1) {
                        // Swal.fire("Success!", response.message, "success").then(() => {
                     $("#landmark_shipping").val(response.data.landmark);     
                     $("#email_shipping").val(response.data.email);     
                     $("#first_name_shipping").val(response.data.first_name);      
                     $("#mobile_shipping").val(response.data.mobile);     
                     $("#last_name_shipping").val(response.data.last_name);     
                     $("#city_shipping").val(response.data.city);         
                      console.log(response);
                        // });
                        // document.getElementById("form").reset();
                        // $('#refresh').click();
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
             $("#street_address").click();
             $("#shipping_address").click();
        });
    </script>

@endsection