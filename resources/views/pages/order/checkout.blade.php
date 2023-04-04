@extends('layouts.app')

@section('content')

<section class="main-container col2-left-layout">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-sm-push-3">
                <article class="col-main">
                    <div class="page-title">
                        <h2>Checkout</h2>
                    </div>
                      <button type="button" data-toggle="modal" data-target="#myModalAddAddress" 
                            class="button continue mb-7" >Add Address</button>
                    <div class="panel-group accordion-faq" id="faq-accordion">
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#faq-accordion" href="#question1" id="billing_info">
                                    <span class="arrow-down">+</span>
                                    <span class="arrow-up">&#8211;</span> Checkout Method
                                </a>
                            </div>
                           
                            {{-- modal --}}
                            <div class="modal fade in" id="myModalAddAddress" role="dialog" style="display: none;" >
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header v5c"><button type="button" class="close"
                                                data-dismiss="modal">×</button></div>
                                        <div class="modal-body">
                                            <form id="address_add_form">
                                                @csrf

                                                <fieldset class="group-select">

                                                    <ul>

                                                        <li>
                                                            <div class="customer-name">
                                                                <div class="input-box name-firstname"><label
                                                                        for="billing:firstname">
                                                                        First Name <span class="required">*</span>
                                                                    </label><br><input type="text"
                                                                        id="first_name_billing" name="first_name"
                                                                        title="First Name"
                                                                        class="input-text required-entry" value="">
                                                                </div>
                                                                <div class="input-box name-lastname"><label
                                                                        for="billing_lastname">
                                                                        Last
                                                                        Name <span class="required">*</span>
                                                                    </label><br><input type="text"
                                                                        id="last_name_billing" name="last_name"
                                                                        title="Last Name"
                                                                        class="input-text required-entry" value="">
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li><label for="billing_street1">Street Address <span
                                                                    class="required">*</span></label><br><input
                                                                type="text" title="Street Address" name="street_address"
                                                                id="street_address_billing"
                                                                class="input-text required-entry" value=""></li>
                                                        <li>
                                                            <div class="input-box"><label
                                                                    for="billing_postcode">City</label><br><input
                                                                    type="text" title="City" name="city"
                                                                    id="city_billing" class="input-text required-entry"
                                                                    value=""></div>
                                                        </li>
                                                        <li>
                                                            <div class="input-box"><label
                                                                    for="billing_telephone">Telephone
                                                                    <span class="required">*</span></label><br>
                                                                <input type="text" name="mobile" title="Telephone"
                                                                    class="input-text required-entry"
                                                                    id="mobile_billing" value="">
                                                            </div>
                                                            <div class="input-box"><label for="Email">Email <span
                                                                        class="required">*</span></label><br>
                                                                <input type="text" name="email" title="Email"
                                                                    class="input-text" id="email_billing" value="">
                                                            </div>
                                                        </li>
                                                        <li><label for="billing_street1">Landmark</label><br><input
                                                                type="text" title="Street Address" name="landmark"
                                                                id="landmark_billing" class="input-text required-entry"
                                                                value=""></li>
                                                    </ul>
                                                    <p class="require"><em class="required">* </em>Required Fields</p>
                                                    <button type="button" class="button continue"
                                                        onclick="addAddress()"><span>Save</span></button>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- modal end --}}
                            <div id="question1" class="panel-collapse collapse in" >
                                <div class="panel-body">
                                    <form id="co-billing-form" action="">
                                        <fieldset class="group-select">
                                            <ul>
                                                <li>
                                                    <label for="billing-address-select">Select a shipping address from
                                                        your address
                                                        book or enter a new address.</label>
                                                    <br />
                                                    @if(!empty($finalData['address']['data']))
                                                <select name="shipping_address" id="shipping_address"  class="form-control">
                                                    {{-- <option value="">Select Address</option> --}}
                                                @foreach($finalData['address']['data'] as $address_data) 
                                                <option value="{{$address_data['id']}}" @if($address_data['primary']==1) selected @endif data-first_name={{$address_data['first_name']}} data-last_name={{$address_data['last_name']}}
                                                    data-street_address={{$address_data['street_address']}} data-landmark={{$address_data['landmark']}}
                                                    data-mobile={{$address_data['mobile']}} data-city={{$address_data['city']}} data-email={{$address_data['email']}}>{{$address_data['first_name']}} {{$address_data['last_name']}} {{$address_data['street_address']}} {{$address_data['city']}}</option>
                                                @endforeach   
                                                </select>
                                                @endif   
                                                </li>
                                            </ul>
                                            <p class="require">
                                                <em class="required">* </em>Required Fields
                                            </p>
                                            <button type="button" class="button continue" onclick="$('#shipping_info').click()">
                                                <span>Continue</span>
                                            </button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" id="shipping_info" data-parent="#faq-accordion" href="#question3"
                                    class="collapsed">
                                    <span class="arrow-down">+</span>
                                    <span class="arrow-up">&#8211;</span> Shipping
                                    Information</a>
                            </div>
                            <div id="question3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form action="" id="co-shipping-form">
                                        <fieldset class="group-select">
                                            <ul>
                                                <li>
                                                    <label for="shipping-address-select">Select a billing address from
                                                        your address
                                                        book or enter a new address.</label>
                                                    <br />
                                                     @if(!empty($finalData['address']['data']))
                                                    <select name="billing_address" id="billing_address"  class="form-control">
                                                 @foreach($finalData['address']['data'] as $address_data_shipping) 
                                                <option value="{{$address_data_shipping['id']}}"  @if($address_data_shipping['primary']==1) selected @endif data-first_name_shipping={{$address_data_shipping['first_name']}} data-last_name_shipping={{$address_data_shipping['last_name']}}
                                                    data-street_address_shipping={{$address_data_shipping['street_address']}} data-landmark_shipping={{$address_data_shipping['landmark']}}
                                                    data-mobile_shipping={{$address_data_shipping['mobile']}} data-city_shipping={{$address_data_shipping['city']}} data-email_shipping={{$address_data_shipping['email']}}>{{$address_data_shipping['first_name']}} {{$address_data_shipping['last_name']}} {{$address_data_shipping['street_address']}} {{$address_data_shipping['city']}}</option>
                                                @endforeach   
                                                </select>
                                                @endif   
                                                </li>
                                              
                                            </ul>
                                            <p class="require">
                                                <em class="required">* </em>Required Fields
                                            </p>
                                            <div class="buttons-set1" id="shipping-buttons-container">
                                                <button type="button" class="button" onclick="$('#payment_info').click()">
                                                    <span>Continue</span>
                                                </button>
                                                <a href="#"  onclick="$('#billing_info').click();" class="back-link">«
                                                    Back</a>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#faq-accordion" href="#question2"
                                    class="collapsed">
                                    <span class="arrow-down">+</span>
                                    <span class="arrow-up">&#8211;</span> Shipping Method</a>
                            </div>
                            <div id="question2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form id="co-shipping-method-form" action="">
                                        <fieldset>
                                            <div id="checkout-shipping-method-load">
                                                <dl class="shipping-methods">
                                                    <dt>Flat Rate</dt>
                                                    <dd>
                                                        <ul>
                                                            <li>
                                                                <input type="radio" name="shipping_method"
                                                                    value="flatrate_flatrate"
                                                                    id="s_method_flatrate_flatrate" checked="checked"
                                                                    class="radio" />
                                                                <label for="s_method_flatrate_flatrate">Fixed <span
                                                                        class="price">$35.00</span>
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </dd>
                                                </dl>
                                            </div>
                                            <div id="onepage-checkout-shipping-method-additional-load">
                                                <div class="add-gift-message">
                                                    <h4>
                                                        Do you have any gift items in your order?
                                                    </h4>
                                                    <p>
                                                        <input type="checkbox" name="allow_gift_messages"
                                                            id="allow_gift_messages" value="1"
                                                            onclick="toogleVisibilityOnObjects(this, ['allow-gift-message-container']);"
                                                            class="checkbox" />
                                                        <label for="allow_gift_messages">Check this checkbox if you want
                                                            to add gift
                                                            messages.</label>
                                                    </p>
                                                </div>
                                                <div style="display: none" class="gift-message-form"
                                                    id="allow-gift-message-container">
                                                    <div class="inner-box"></div>
                                                </div>
                                            </div>
                                            <div class="buttons-set1" id="shipping-method-buttons-container">
                                                <button type="button" class="button" onclick="shippingMethod.save()">
                                                    <span>Continue</span>
                                                </button>
                                                <a href="#" onclick="checkout.back(); return false;" class="back-link">«
                                                    Back</a>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#faq-accordion" href="#question4"
                                    class="collapsed">
                                    <span class="arrow-down">+</span>
                                    <span class="arrow-up">&#8211;</span> Order Review</a>
                            </div>
                            <div id="question4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="order-review" id="checkout-review-load"></div>
                                    <div class="buttons-set13" id="review-buttons-container">
                                        <p class="f-left">
                                            Forgot an Item? <a href="#cart/">Edit Your Cart</a>
                                        </p>
                                        <button type="submit" class="button" onclick="review.save();">
                                            <span>Place Order</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#faq-accordion" id="payment_info" href="#question5"
                                    class="collapsed">
                                    <span class="arrow-down">+</span>
                                    <span class="arrow-up">&#8211;</span> Payment
                                    Information</a>
                            </div>
                            <div id="question5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form action="" id="co-payment-form">
                                        <dl id="checkout-payment-method-load">
                                            <dt>
                                                <input type="radio" id="check_payment_id" 
                                                    name="payment[method]" title="Check / Money order"
                                                     class="radio" value="1"/>
                                                <label for="p_method_checkmo">cash on delivery</label>
                                            </dt>
                                            <dd>
                                                <fieldset class="form-list"></fieldset>
                                            </dd>
                                            {{-- <dt>
                                                <input type="radio" id="p_method_ccsave" value="ccsave"
                                                    name="payment[method]" title="Credit Card (saved)"
                                                    onclick="payment.switchMethod('ccsave')" class="radio" />
                                                <label for="p_method_ccsave">Credit Card (saved)</label>
                                            </dt> --}}
                                          
                                        </dl>
                                    </form>
                                    <p class="require">
                                        <em class="required">* </em>Required Fields
                                    </p>
                                    <div class="buttons-set1" id="payment-buttons-container">
                                        <button type="button" class="button" id="place_order" onclick="checkoutOrder()">
                                            <span>Place Order</span>
                                        </button>
                                        <a href="#" onclick="$('#shipping_info').click();" class="back-link">«
                                            Back</a>
                                    </div>
                                    <div style="clear: both"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <!--	///*///======    End article  ========= //*/// -->
                <section class="banner-row irf">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12 col-md-12">
                                <div class="position-relative">
                                    <!-- Background -->
                                    <img class="img-fluid hover-zoom" src="{{asset('assets/images/popup.jpeg')}}" alt="" />
                                    <!-- Body -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                <div class="block block-progress">
                    <div class="block-title">Your Checkout</div>
                    <div class="block-content">
                        <dl>
                            <dt class="complete">
                                Billing Address <span class="separator">|</span>
                               
                            </dt>
                            <dd class="complete">
                                  <address>
                                  <span id="first_name_shipping_show"></span><br>
                                    <span id="last_name_shipping_show"></span><br>
                                    <span id="email_shipping_show"></span><br>
                                    <span id="mobile_shipping_show"></span><br>
                                    <span id="street_address_shipping_show"></span><br>
                                    <span id="landmark_shipping_show"></span><br>
                                    <span id="city_shipping_show"></span><br>
                                </address>
                            </dd>
                            <dt class="complete">
                                Shipping Address <span class="separator"></span>                             
                            </dt>
                            <dd class="complete">
                                <address>
                                   <span id="first_name_billing_show"></span><br>
                                    <span id="last_name_billing_show"></span><br>
                                    <span id="email_billing_show"></span><br>
                                    <span id="mobile_billing_show"></span><br>
                                    <span id="street_address_billing_show"></span><br>
                                    <span id="landmark_billing_show"></span><br>
                                    <span id="city_billing_show"></span><br>

                                </address> 
                            </dd>
                            {{-- <dt class="complete">
                                Shipping Method <span class="separator">|</span>
                                <a onclick="checkout.gotoSection('shipping_method'); return false;"
                                    href="#shipping_method">Change</a>
                            </dt>
                            <dd class="complete">
                                Flat Rate - Fixed <br />
                                <span class="price">AED 15.00</span>
                            </dd>
                            <dt>Payment Method</dt> --}}
                        </dl>
                    </div>
                    
                </div>
                <div class="featured-add-box">
                    <div class="featured-add-inner">
                        <a href="#">
                            <img src="{{asset('assets\images\hot-trends-banner.jpg')}}" alt="f-img" /></a>
                        <div class="banner-content">
                            <div class="banner-text">Clearance Sale</div>
                            <div class="banner-text1">Hot <span>Sale</span></div>
                            <p>save upto 20%</p>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
<script>

        function checkoutOrder()
   {
            var shipping_address = $("#shipping_address").val();
            var billing_address = $("#billing_address").val();
            var check_payment_id = $("#check_payment_id").val();
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    $.ajax({
        url:"{{route('order')}}",
        type:'post',
         data: {
                    shipping_address: shipping_address,
                    billing_address : billing_address,
                    check_payment_id :check_payment_id
            },
        dataType:'json',
        success: function (response) {
                    $(".preloader").hide();
                    if (response.status == 1) {
                        Swal.fire("Success!", response.message, "success").then(() => {
                              window.location.href = "{{url('thankYou')}}";
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
   }


    $(document).ready(function() {
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
                success: function(response) {
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
                error: function(xhr) {
                    $(".preloader").hide();
                    console.log(xhr
                        .responseText
                        ); // this line will save you tons of hours while debugging
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
                success: function(response) {
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
                error: function(xhr) {
                    $(".preloader").hide();
                    console.log(xhr
                        .responseText
                        ); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
            });
        });
        $("#street_address").click();
        $("#shipping_address").click();
    });
</script>
<script>
    function addAddress() {
        let first_name = $('#first_name_billing').val();
        let last_name = $('#last_name_billing').val();
        let street_address = $('#street_address_billing').val();
        let city = $('#city_billing').val();
        let mobile = $('#mobile_billing').val();
        let email = $('#email_billing').val();
        let landmark = $('#landmark_billing').val();
        $.ajax({
            url: "{{url('address-post')}}",
            type: 'post',
            data: {
                    first_name: first_name,
                    last_name : last_name,
                    street_address : street_address,
                    city :city,
                    mobile :mobile,
                    email :email,
                    landmark :landmark
            },
            dataType: 'json',
            success: function(response) {
                console.log(response);
                $(".preloader").hide();
                if (response.status == 1) {
                    Swal.fire("Success!", response.message, "success").then(() => {
                        $('#myModalAddAddress').modal('hide');
                        $('#shipping_address').append(`<option value="${response.data.data.id}">${response.data.data.first_name} ${response.data.data.last_name} ${response.data.data.street_address} ${response.data.data.city}</option>`);
                        $('#billing_address').append(`<option value="${response.data.data.id}">${response.data.data.first_name} ${response.data.data.last_name} ${response.data.data.street_address} ${response.data.data.city}</option>`);
                        $('#shipping_address').val(response.data.data.id);
                        $('#billing_address').val(response.data.data.id);
                        // $('myModalforgetotp').modal('hide');
                        // location.reload();
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
                $(".preloader").hide();
                console.log(xhr.responseText); // this line will save you tons of hours while debugging
                // do something here because of error
            }
        });
    }
       $('#shipping_address').on('change', function() {
//    $("#address_id_billing").val($(this).data('id'))
// alert($(this).find('option:selected').data('first_name'));
  $("#first_name_shipping_show").html($(this).find('option:selected').data('first_name'))
  $("#last_name_shipping_show").html($(this).find('option:selected').data('last_name'))
  $("#street_address_shipping_show").html($(this).find('option:selected').data('street_address'))
  $("#mobile_shipping_show").html($(this).find('option:selected').data('mobile'))
  $("#email_shipping_show").html($(this).find('option:selected').data('email'))
  $("#landmark_shipping_show").html($(this).find('option:selected').data('landmark'))
  $("#city_shipping_show").html($(this).find('option:selected').data('city'))
})

       $('#billing_address').on('change', function() {
//    $("#address_id_billing").val($(this).data('id'))
// alert($(this).find('option:selected').data('first_name'));
  $("#first_name_billing_show").html($(this).find('option:selected').data('first_name_shipping'))
  $("#last_name_billing_show").html($(this).find('option:selected').data('last_name_shipping'))
  $("#street_address_billing_show").html($(this).find('option:selected').data('street_address_shipping'))
  $("#mobile_billing_show").html($(this).find('option:selected').data('mobile_shipping'))
  $("#email_billing_show").html($(this).find('option:selected').data('email_shipping'))
  $("#landmark_billing_show").html($(this).find('option:selected').data('landmark_shipping'))
  $("#city_billing_show").html($(this).find('option:selected').data('city_shipping'))
})
</script>
<script>
    $(document).ready(()=>{
        $('#shipping_address').change();
        $('#billing_address').change();
    })
</script>
@endsection