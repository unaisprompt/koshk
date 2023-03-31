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
                                <a data-toggle="collapse" data-parent="#faq-accordion" href="#question1">
                                    <span class="arrow-down">+</span>
                                    <span class="arrow-up">&#8211;</span> Checkout Method
                                </a>
                            </div>
                           
                            {{-- modal --}}
                            <div class="modal fade in" id="myModalAddAddress" role="dialog" style="display: none;">
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
                            <div id="question1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <form id="co-billing-form" action="">
                                        <fieldset class="group-select">
                                            <ul>
                                                <li>
                                                    <label for="billing-address-select">Select a billing address from
                                                        your address
                                                        book or enter a new address.</label>
                                                    <br />
                                                    @if(!empty($finalData['address']['data']))
                                                <select name="shipping_address" id="shipping_address"  class="form-control">
                                                    {{-- <option value="">Select Address</option> --}}
                                                @foreach($finalData['address']['data'] as $address_data) 
                                                <option value="{{$address_data['id']}}" @if($loop->iteration == 1) selected @endif>{{$address_data['street_address']}}</option>
                                                @endforeach   
                                                </select>
                                                @endif   
                                                </li>
                                            </ul>
                                            <p class="require">
                                                <em class="required">* </em>Required Fields
                                            </p>
                                            <button type="button" class="button continue" onclick="billing.save()">
                                                <span>Continue</span>
                                            </button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#faq-accordion" href="#question3"
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
                                                    <label for="shipping-address-select">Select a shipping address from
                                                        your address
                                                        book or enter a new address.</label>
                                                    <br />
                                                     @if(!empty($finalData['address']['data']))
                                                    <select name="billing_address" id="billing_address"  class="form-control">
                                                 @foreach($finalData['address']['data'] as $address_data) 
                                                <option value="{{$address_data['id']}}" @if($loop->iteration == 1) selected @endif>{{$address_data['first_name']}} {{$address_data['last_name']}} {{$address_data['street_address']}} {{$address_data['city']}}</option>
                                                @endforeach   
                                                </select>
                                                @endif   
                                                </li>
                                              
                                            </ul>
                                            <p class="require">
                                                <em class="required">* </em>Required Fields
                                            </p>
                                            <div class="buttons-set1" id="shipping-buttons-container">
                                                <button type="button" class="button" onclick="shipping.save()">
                                                    <span>Continue</span>
                                                </button>
                                                <a href="#" onclick="checkout.back(); return false;" class="back-link">«
                                                    Back</a>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
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
                        </div>

                        <div class="panel">
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
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#faq-accordion" href="#question5"
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
                                                <input type="radio" id="p_method_checkmo" value="checkmo"
                                                    name="payment[method]" title="Check / Money order"
                                                    onclick="payment.switchMethod('checkmo')" class="radio" />
                                                <label for="p_method_checkmo">Check / Money order</label>
                                            </dt>
                                            <dd>
                                                <fieldset class="form-list"></fieldset>
                                            </dd>
                                            <dt>
                                                <input type="radio" id="p_method_ccsave" value="ccsave"
                                                    name="payment[method]" title="Credit Card (saved)"
                                                    onclick="payment.switchMethod('ccsave')" class="radio" />
                                                <label for="p_method_ccsave">Credit Card (saved)</label>
                                            </dt>
                                            <dd>
                                                <fieldset class="form-list">
                                                    <ul id="payment_form_ccsave" style="display: none">
                                                        <li>
                                                            <div class="input-box">
                                                                <label for="ccsave_cc_owner">Name on Card
                                                                    <span class="required">*</span></label>
                                                                <br />
                                                                <input type="text" disabled="" title="Name on Card"
                                                                    class="input-text required-entry"
                                                                    id="ccsave_cc_owner" name="payment[cc_owner]"
                                                                    value="" />
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="input-box">
                                                                <label for="ccsave_cc_type">Credit Card Type
                                                                    <span class="required">*</span></label>
                                                                <br />
                                                                <select disabled="" id="ccsave_cc_type"
                                                                    name="payment[cc_type]"
                                                                    class="required-entry validate-cc-type-select">
                                                                    <option value="">
                                                                        --Please Select--
                                                                    </option>
                                                                    <option value="AE">
                                                                        American Express
                                                                    </option>
                                                                    <option value="VI">Visa</option>
                                                                    <option value="MC">MasterCard</option>
                                                                    <option value="DI">Discover</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="input-box">
                                                                <label for="ccsave_cc_number">Credit Card Number
                                                                    <span class="required">*</span></label>
                                                                <br />
                                                                <input type="text" disabled="" id="ccsave_cc_number"
                                                                    name="payment[cc_number]" title="Credit Card Number"
                                                                    class="input-text validate-cc-number validate-cc-type"
                                                                    value="" />
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="input-box">
                                                                <label for="ccsave_expiration">Expiration Date
                                                                    <span class="required">*</span></label>
                                                                <br />
                                                                <div class="v-fix">
                                                                    <select disabled="" id="ccsave_expiration"
                                                                        style="width: 140px"
                                                                        name="payment[cc_exp_month]"
                                                                        class="required-entry">
                                                                        <option value="" selected="selected">
                                                                            Month
                                                                        </option>
                                                                        <option value="1">
                                                                            01 - January
                                                                        </option>
                                                                        <option value="2">
                                                                            02 - February
                                                                        </option>
                                                                        <option value="3">03 - March</option>
                                                                        <option value="4">04 - April</option>
                                                                        <option value="5">05 - May</option>
                                                                        <option value="6">06 - June</option>
                                                                        <option value="7">07 - July</option>
                                                                        <option value="8">08 - August</option>
                                                                        <option value="9">
                                                                            09 - September
                                                                        </option>
                                                                        <option value="10">
                                                                            10 - October
                                                                        </option>
                                                                        <option value="11">
                                                                            11 - November
                                                                        </option>
                                                                        <option value="12">
                                                                            12 - December
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="v-fix">
                                                                    <select disabled="" id="ccsave_expiration_yr"
                                                                        style="width: 103px" name="payment[cc_exp_year]"
                                                                        class="required-entry">
                                                                        <option value="" selected="selected">
                                                                            Year
                                                                        </option>
                                                                        <option value="2011">2011</option>
                                                                        <option value="2012">2012</option>
                                                                        <option value="2013">2013</option>
                                                                        <option value="2014">2014</option>
                                                                        <option value="2015">2015</option>
                                                                        <option value="2016">2016</option>
                                                                        <option value="2017">2017</option>
                                                                        <option value="2018">2018</option>
                                                                        <option value="2019">2019</option>
                                                                        <option value="2020">2020</option>
                                                                        <option value="2021">2021</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="input-box">
                                                                <label for="ccsave_cc_cid">Card Verification Number
                                                                    <span class="required">*</span></label>
                                                                <br />
                                                                <div class="v-fix">
                                                                    <input type="text" disabled=""
                                                                        title="Card Verification Number"
                                                                        class="input-text required-entry validate-cc-cvn"
                                                                        id="ccsave_cc_cid" name="payment[cc_cid]"
                                                                        style="width: 3em" value="" />
                                                                </div>
                                                                <a href="#" class="cvv-what-is-this">What is this?</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </fieldset>
                                            </dd>
                                        </dl>
                                    </form>
                                    <p class="require">
                                        <em class="required">* </em>Required Fields
                                    </p>
                                    <div class="buttons-set1" id="payment-buttons-container">
                                        <button type="button" class="button" onclick="payment.save()">
                                            <span>Continue</span>
                                        </button>
                                        <a href="#" onclick="checkout.back(); return false;" class="back-link">«
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
                                    <img class="img-fluid hover-zoom" src="images/popup.jpeg" alt="" />
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
                                <a onclick="checkout.gotoSection('billing'); return false;" href="#billing">Change</a>
                            </dt>
                            <dd class="complete">
                                <address>
                                    John Doe<br />
                                    Abc Company<br />
                                    23 North Main Stree<br />
                                    Windsor<br />
                                    Holtsville, New York, 00501<br />
                                    United States<br />
                                    T: 5465465 <br />
                                    F: 466523
                                </address>
                            </dd>
                            <dt class="complete">
                                Shipping Address <span class="separator">|</span>
                                <a onclick="checkout.gotoSection('shipping');return false;" href="#payment">Change</a>
                            </dt>
                            <dd class="complete">
                                <address>
                                    John Doe<br />
                                    Abc Company<br />
                                    23 North Main Stree<br />
                                    Windsor<br />
                                    Holtsville, New York, 00501<br />
                                    United States<br />
                                    T: 5465465 <br />
                                    F: 466523
                                </address>
                            </dd>
                            <dt class="complete">
                                Shipping Method <span class="separator">|</span>
                                <a onclick="checkout.gotoSection('shipping_method'); return false;"
                                    href="#shipping_method">Change</a>
                            </dt>
                            <dd class="complete">
                                Flat Rate - Fixed <br />
                                <span class="price">AED 15.00</span>
                            </dd>
                            <dt>Payment Method</dt>
                        </dl>
                    </div>
                    anel-heading
                </div>
                <div class="featured-add-box">
                    <div class="featured-add-inner">
                        <a href="#">
                            <img src="images\hot-trends-banner.jpg" alt="f-img" /></a>
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
</script>
@endsection