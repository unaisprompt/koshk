@extends('layouts.app')

@section('content')
    <style>
        #place_order:disabled,
        #place_order[disabled] {
            background-color: #ccc;
        }
    </style>
    <section class="main-container col2-left-layout">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-sm-push-3">
                    <article class="col-main">
                        <div class="page-title">
                            <h2>Checkout</h2>
                        </div>
                        <div class="panel-group accordion-faq" id="faq-accordion">
                            <div class="panel">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#faq-accordion" href="#question1"
                                        id="billing_info">
                                        <span class="arrow-down">+</span>
                                        <span class="arrow-up">&#8211;</span> Checkout Method
                                    </a>
                                </div>


                                <div id="question1" class="panel-collapse collapse in">
                                    <div class="panel-body">

                                        <button type="button" data-toggle="modal" data-target="#myModalAddAddress"
                                            class="button continue mb-7">Add Address</button>
                                        <form id="co-billing-form" action="">
                                            <fieldset class="group-select">
                                                <ul>
                                                    <li>
                                                        <label for="billing-address-select">Select a shipping address from
                                                            your address
                                                            book or enter a new address.</label>
                                                        <br />
    @if (!empty($finalData['address']['data']))
        <select name="shipping_address" id="shipping_address" class="form-control">
                                                                {{-- <option value="">Select Address</option> --}}
        @foreach ($finalData['address']['data'] as $address_data)
            <option value="{{ $address_data['id'] }}"
                @if ($address_data['primary'] == 1) selected @endif
                    data-first_name={{ $address_data['first_name'] }}
                    data-last_name={{ $address_data['last_name'] }}
                    data-street_address={{ $address_data['street_address'] }}
                    data-landmark={{ $address_data['landmark'] }}
                    data-mobile={{ $address_data['mobile'] }}
                    data-city={{ $address_data['city'] }}
                    data-email={{ $address_data['email'] }}
                    @if (isset($address_data['region'])) data-shipping_cost="{{ $address_data['region']['shipping_coast'] }}" @endif>
                    {{ $address_data['first_name'] }}
                    {{ $address_data['last_name'] }}
                    {{ $address_data['street_address'] }}
                    {{ $address_data['city'] }}</option>
                      @endforeach
            </select>
                @endif
        </li>
        </ul>
                                                <p class="require">
                                                    <em class="required">* </em>Required Fields
                                                </p>
                                                <button type="button" class="button continue"
                                                    onclick="$('#shipping_info').click()">
                                                    <span>Continue</span>
                                                </button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" id="shipping_info" data-parent="#faq-accordion"
                                        href="#question3" class="collapsed">
                                        <span class="arrow-down">+</span>
                                        <span class="arrow-up">&#8211;</span> Shipping
                                        Information</a>
                                </div>
                                <div id="question3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <button type="button" data-toggle="modal" data-target="#myModalAddAddress"
                                            class="button continue mb-7">Add Address</button>
                                        <form action="" id="co-shipping-form">
                                            <fieldset class="group-select">
                                                <ul>
                                                    <li>
                                                        <label for="shipping-address-select">Select a billing address from
                                                            your address
                                                            book or enter a new address.</label>
                                                        <br />
                                                        @if (!empty($finalData['address']['data']))
                                                            <select name="billing_address" id="billing_address"
                                                                class="form-control">
                                                                @foreach ($finalData['address']['data'] as $address_data_shipping)
                                                                    <option value="{{ $address_data_shipping['id'] }}"
                                                                        @if ($address_data_shipping['primary'] == 1) selected @endif
                                                                        data-first_name_shipping={{ $address_data_shipping['first_name'] }}
                                                                        data-last_name_shipping={{ $address_data_shipping['last_name'] }}
                                                                        data-street_address_shipping={{ $address_data_shipping['street_address'] }}
                                                                        data-landmark_shipping={{ $address_data_shipping['landmark'] }}
                                                                        data-mobile_shipping={{ $address_data_shipping['mobile'] }}
                                                                        data-city_shipping={{ $address_data_shipping['city'] }}
                                                                        data-email_shipping={{ $address_data_shipping['email'] }}>
                                                                        {{ $address_data_shipping['first_name'] }}
                                                                        {{ $address_data_shipping['last_name'] }}
                                                                        {{ $address_data_shipping['street_address'] }}
                                                                        {{ $address_data_shipping['city'] }}</option>
                                                                @endforeach
                                                            </select>
                                                        @endif
                                                    </li>

                                                </ul>
                                                <p class="require">
                                                    <em class="required">* </em>Required Fields
                                                </p>
                                                <div class="buttons-set1" id="shipping-buttons-container">
                                                    <button type="button" class="button"
                                                        onclick="$('#order_review').click()">
                                                        <span>Continue</span>
                                                    </button>
                                                    <a href="#" onclick="$('#billing_info').click();"
                                                        class="back-link">«
                                                        Back</a>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="panel">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#faq-accordion" id="order_review"
                                        href="#question4" class="collapsed">
                                        <span class="arrow-down">+</span>
                                        <span class="arrow-up">&#8211;</span> Order Review</a>
                                </div>
                                <div id="question4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="order-review" id="checkout-review-load"></div>
                                        <div class="buttons-set13" id="review-buttons-container">
                                            <div class="row">
                                                <div class="col-sm-8 col-lg-8">
                                                    @php
                                                        $total = 0;
                                                        $shipping = 0;
                                                        $total_discount = 0;
                                                        $loyality_discount = 0;
                                                        $total_tax = 0;
                                                    @endphp

                                                    @if ($data)
                                                        @foreach ($data as $item)
                                                            <div class="uthssk">
                                                                <div class="pous">
                                                                    <img src="{{ $item['image_url'] }}" alt="">
                                                                </div>
                                                                <div class="pous1">
                                                                    {{-- <h3>Brand</h3> --}}
                                                                    <h4>{{ $item['product_name'] }}</h4>

                                                                    {{-- @if (isset($item['created_at']))
                                                                        <small>Ordered
                                                                            {{ \Carbon\Carbon::parse($item['created_at'])->diffForHumans(\Carbon\Carbon::now()) }}</small>
                                                                    @endif --}}
                                                                    {{-- @if (isset($item['est_shipping_days']))
                                                                        <small><b>
                                                                                @if (!($item['shipping_cost'] > 0))
                                                                                    Free
                                                                                @endif delivery by
                                                                                {{ \Carbon\Carbon::now()->addDays($item['est_shipping_days'])->format('l, F jS, Y') }}
                                                                            </b></small>
                                                                    @endif --}}
                                                                    {{-- <h5>Sold by <b>koshk</b></h5> --}}

                                                                </div>
                                                                <div class="pous2">
                                                                    <p>AED
                                                                        {{ number_format((float) $item['price'] * $item['qty'], 2, '.', '') }}
                                                                    </p>
                                                                    @php
                                                                        $total += $item['price'] * $item['qty'];
                                                                        $total_discount += $item['discount_amount'] ?? 0;
                                                                        $shipping += $item['shipping_cost'];
                                                                        $total_tax += $item['tax'];
                                                                        $loyality_discount += $item['loyality_discount'];
                                                                    @endphp

                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif

                                                    <div class="buttons-set1" id="shipping-buttons-container">
                                                        <button type="button" class="button"
                                                            onclick="$('#payment_info').click()">
                                                            <span>Continue</span>
                                                        </button>
                                                        <a href="#" onclick="$('#shipping_info').click();"
                                                            class="back-link">«
                                                            Back</a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-lg-4">
                                                    <div class="hcbyIU">
                                                        <h1>Order Summary</h1>
                                                        @if (Session::has('user_id'))
                                                            <div class="coupon thm-coupon-cart">
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
                                                                    <h5>-AED
                                                                        {{ number_format($total_discount + $loyality_discount, 2) }}
                                                                    </h5>
                                                                    {{--  <h5>+AED {{ number_format($shipping, 2) }}</h5> --}}
                                                                    <h5>+AED {{ number_format($total_tax, 2) }}</h5>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="d-flex justify-content-between">
                                                                @php
                                                                    $net_amount = $total - $total_discount + $shipping - $loyality_discount + $total_tax;
                                                                @endphp
                                                                <div class="cilop">
                                                                    <h5>Net Amount</h5>
                                                                </div>
                                                                <div class="cilop1">
                                                                    <h5>AED
                                                                        {{ number_format($net_amount, 2) }}
                                                                    </h5>
                                                                </div>
                                                                @php
                                                                    $token = session()->get('token');
                                                                    $gtotal = number_format($net_amount, 2);
                                                                @endphp
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="cilop">
                                                                    <h5>Delivery Charge</h5>
                                                                </div>
                                                                <div class="cilop1">
                                                                    <h5 id="delivery_charge"
                                                                        data-net_amount="{{ $net_amount }}"></h5>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="cilop">
                                                                    <h5>Sub Total</h5>
                                                                </div>
                                                                <div class="cilop1">
                                                                    <h5 id="sub_total">{{ $net_amount }}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#faq-accordion" id="payment_info"
                                        href="#question5" class="collapsed">
                                        <span class="arrow-down">+</span>
                                        <span class="arrow-up">&#8211;</span> Payment
                                        Information</a>
                                </div>
                                <div id="question5" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        <p class="require">
                                            <em class="required">* </em> <a href="#" data-toggle="modal"
                                                onclick="$('#myModalTerms').modal('show');">Click to Agree terms and
                                                conditions</a>
                                        </p>

                                        <form action="" id="co-payment-form">
                                            <dl id="checkout-payment-method-load">
                                                <dt>
                                                    <input type="radio" id="check_cash" name="payment"
                                                        title="Check / Money order" class="radio" value="1" />
                                                    <label for="check_cash">cash on delivery</label>
                                                </dt>

                                                {{-- <dt>
                                                    <input type="radio" id="check_strip" name="payment"
                                                        title="Check / Money order" class="radio" value="2" />
                                                    <label for="check_strip">online payment</label><br>
                                                    <img src="{{ asset('assets/images/stripe.png') }}" alt="stripe">

                                                </dt> --}}
                                                <dd>
                                                    <fieldset class="form-list"></fieldset>
                                                </dd>

                                            </dl>
                                            <input type="hidden" value="" name="transaction_id"
                                                id="transaction_id">
                                        </form>
                                        {{-- <p class="require">
                                            <em class="required">* </em>Required Fields
                                        </p> --}}

                                        <div class="buttons-set1" id="payment-buttons-container">
                                            <button type="button" class="button" id="place_order"
                                                onclick="checkoutOrder()">
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
                    <div class="modal fade" id="myModalTerms" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header v5c">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <form method="post" id="register_form">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="yhd0d">
                                            <h2>Terms And Conditions</h2>
                                        </div>

                                        @if (isset(CmsPage()['termsconditions']))
                                            {!! CmsPage()['termsconditions'] !!}
                                        @endif
                                        <br>
                                        <em class="required">* </em><input type="checkbox" value="1" id="consent"
                                            name="consent" onclick="$('#myModalTerms').modal('hide');"> <a>I Agree terms
                                            and conditions</a>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--	///*///======    End article  ========= //*/// -->


                    <!-- Stripe -->
                    <div class="modal fade" id="stripeModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Stripe</h5>
                                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> --}}
                                </div>
                                <div class="modal-body">
                                    <div class='form-row row'>

                                        <div class='col-xs-12 col-md-12 form-group required'>
                                            <label class='control-label'>Card Number</label>
                                            <input autocomplete='off' class='form-control card-number' id="card_number"
                                                placeholder='card number' min="1" size='20' type='number'>
                                        </div>
                                    </div>
                                    <div class='form-row row'>
                                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                                            <label class='control-label'>CVV</label>
                                            <input autocomplete='off' class='form-control card-cvc' id="cvv"
                                                placeholder='ex. 311' min="1" size='4' type='number'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Exp Month</label>
                                            <input class='form-control card-expiry-month' placeholder='MM' id="exp_month"
                                                size='2' min="1" type='number'>
                                        </div>
                                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                                            <label class='control-label'>Exp Year</label>
                                            <select class="form-control card-expiry-year" id="exp_year" name="year">
                                                @foreach (range(date('Y'), date('Y') + 20) as $year)
                                                    <option value="{{ $year }}">{{ $year }}</option>
                                                @endforeach
                                            </select>
                                            {{-- <input class='form-control card-expiry-year' placeholder='YYYY' id="exp_year" size='4' type='number'> --}}
                                        </div>
                                    </div>
                                    <div class='form-row row'>
                                        <p id="stripe_alert"></p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="strpe_pay" class="btn btn-primary">Continue</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    @php
                        $footerbanner = topOfferCommon('checkout_bottom');
                    @endphp
                    @if (isset($footerbanner))
                        <section class="banner-row irf">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-12 col-md-12">
                                        <div class="position-relative">
                                            <!-- Background -->
                                            <img class="img-fluid hover-zoom" src="{{ $footerbanner->image }}"
                                                onclick="window.location='{{ $footerbanner->btn_link }}'"
                                                alt="" />
                                            <!-- Body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif
                </div>

                <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                    <div class="block block-progress">
                        <div class="block-title">Your Checkout</div>
                        <div class="block-content">
                            <dl>
                                <dt class="complete">
                                    Billing Address <span class="separator">|</span>

                                </dt>
                                <dd class=check_payment_idra"complete">
                                    <address>
                                        <span id="first_name_shipping_show"></span><br>
                                        <span id="last_name_shipping_show"></span><br>
                                        <span id="email_shipping_show"></span><br>
                                        <span id="mobile_shipping_show"></span><br>
                                        <span id="street_address_shipping_show"></span><br>
                                        <span id="landmark_shipping_show"></span><br>
                                        <span id="city_shipping_show"></span><br>
                                        <span id="address_emirate"></span><br>
                                        <span id="address_region"></span><br>
                                      
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
                                        <span id="billing_address_emirate"></span><br>
                                        <span id="billing_address_region"></span><br>

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
                    @php
                        $sidebanner = topOfferCommon('checkout_left_bottom');
                    @endphp
                    @if (isset($sidebanner))
                        <div class="featured-add-box">
                            <div class="featured-add-inner">
                                <a href="{{ $sidebanner->btn_link }}">
                                    <img src="{{ $sidebanner->image }}" alt="f-img" /></a>
                                <!-- <div class="banner-content">
                                                                                                                                                                                                                                                                            <div class="banner-text">Clearance Sale</div>
                                                                                                                                                                                                                                                                            <div class="banner-text1">Hot <span>Sale</span></div>
                                                                                                                                                                                                                                                                            <p>save upto 20%</p>
                                                                                                                                                                                                                                                                        </div> -->
                            </div>
                        </div>
                    @endif
                </aside>
            </div>
        </div>
    </section>
    {{-- modal --}}
    <div class="modal fade in" id="myModalAddAddress" role="dialog" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header v5c"><button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <form id="address_add_form">
                        @csrf

                        <fieldset class="group-select">

                            <ul>

                                <li>
                                    <div class="customer-name">
                                        <div class="input-box name-firstname"><label for="billing:firstname">
                                                First Name <span class="required">*</span>
                                            </label><br><input type="text" id="first_name_billing" name="first_name"
                                                title="First Name" class="input-text required-entry" value="">
                                        </div>
                                        <div class="input-box name-lastname"><label for="billing_lastname">
                                                Last
                                                Name <span class="required">*</span>
                                            </label><br><input type="text" id="last_name_billing" name="last_name"
                                                title="Last Name" class="input-text required-entry" value="">
                                        </div>
                                    </div>
                                </li>
                                <li><label for="billing_street1">Street Address <span
                                            class="required">*</span></label><br><input type="text"
                                        title="Street Address" name="street_address" id="street_address_billing"
                                        class="input-text required-entry" value=""></li>
                                <li>
                                    <div class="input-box"><label for="billing_postcode">City</label><br><input
                                            type="text" title="City" name="city" id="city_billing"
                                            class="input-text required-entry" value=""></div>
                                </li>
                                <li>
                                    <div class="input-box"><label for="billing_telephone">Telephone
                                            <span class="required">*</span></label><br>
                                        <input type="text" name="mobile" title="Telephone"
                                            class="input-text required-entry" id="mobile_billing" value="">
                                    </div>
                                    <div class="input-box"><label for="Email">Email <span
                                                class="required">*</span></label><br>
                                        <input type="text" name="email" title="Email" class="input-text"
                                            id="email_billing" value="">
                                    </div>
                                </li>
                                <li><label for="billing_street1">Landmark</label><br><input type="text"
                                        title="Street Address" name="landmark" id="landmark_billing"
                                        class="input-text required-entry" value=""></li>
                                <div class="input-box">
                                    <label for="billing_street1">Emirates<span class="required">*</span></label><br>
                                    <select style="width:100%" name="emirate_id" id="emirate_id"
                                        onchange="setRegions($(this).find('option:selected').data('regions'))">
                                        <option value="0" data-regions="">Select Emirates
                                        </option>
                                        @foreach ($emirate_list['data'] as $row)
                                            <option value="{{ $row['id'] }}"
                                                data-regions="{{ json_encode($row['regions']) }}">
                                                {{ $row['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-box">
                                    <label for="billing_street1">Regions<span class="required">*</span></label><br>
                                    <select style="width:100%" name="region_id" id="region_id">
                                        <option value="0">Select Regions</option>
                                    </select>
                                </div>
                                </li>
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


    <script>
        /*   $('#check_strip').click(function() {
                                                    $('#stripeModal').modal('show');
                                                    $('#place_order').prop('disabled', true);
                                                }); */

        $('#check_cash').click(function() {
            $('#place_order').prop('disabled', false);
        });

        function checkoutOrder() {
            var shipping_address = $("#shipping_address").val();
            if (!$("#shipping_address").find('option:selected').data('shipping_cost')) {
                Swal.fire("Error!", "In Address region is missing", "error");
                return;
            }
            var billing_address = $("#billing_address").val();
            var check_payment_id = $('input[name="payment"]:checked').val();
            if (!(check_payment_id > 0)) {
                Swal.fire("Error!", "Please select Payment type", "error");
                return;
            }
            if (!$('#consent').prop('checked')) {
                Swal.fire("Error!", "Please check the payment terms and condition", "error");
                return;
            }
            if (check_payment_id == 2) {
                $('#stripeModal').modal('show');
                return;
            }
            var transaction_id = $("#transaction_id").val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ config('global.api') }}/order",
                type: 'post',
                headers: {
                    "Authorization": 'Bearer ' + '{{ session()->get('token') }}'
                },
                data: {
                    user_id: {{ session()->get('user_id') }},
                    payment_type: 1,
                    shipping_address_id: shipping_address,
                    billing_address_id: billing_address
                },
                dataType: 'json',
                success: function(response) {
                    // $(".preloader").hide();
                    if (response.status == 1) {
                        Swal.fire("Success!", response.message, "success").then(() => {
                            window.location.href = "{{ url('thankYou') }}/" + response.order_id;
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
                    url: '{{ url('address-data-get') }}',
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
                         //   console.log(response);
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
                    url: '{{ url('address-data-get') }}',
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
                           // console.log(response);
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
            let emirate_id = $('#emirate_id').val();
            let region_id = $('#region_id').val();
            $.ajax({
                url: "{{ url('address-post') }}",
                type: 'post',
                data: {
                    first_name: first_name,
                    last_name: last_name,
                    street_address: street_address,
                    city: city,
                    mobile: mobile,
                    email: email,
                    landmark: landmark,
                    emirate_id: emirate_id,
                    region_id: region_id
                },
                dataType: 'json',
                success: function(response) {
                  //  console.log(response);
                    $(".preloader").hide();
                    if (response.status == 1) {
                        Swal.fire("Success!", response.message, "success").then(() => {
                            $('#myModalAddAddress').modal('hide');
                            $('#shipping_address').append(
                                `<option 
                                value="${response.data.data.id}"
                                data-shipping_cost="${response.data.data.region.shipping_coast}"
                                >${response.data.data.first_name} ${response.data.data.last_name} ${response.data.data.street_address} ${response.data.data.city}</option>`
                            );
                            $('#billing_address').append(
                                `<option value="${response.data.data.id}">${response.data.data.first_name} ${response.data.data.last_name} ${response.data.data.street_address} ${response.data.data.city}</option>`
                            );
                            $('#shipping_address').val(response.data.data.id);
                            $('#billing_address').val(response.data.data.id);

                            $("#first_name_shipping_show").html(response.data.data.first_name);
                            $("#last_name_shipping_show").html(response.data.data.last_name);
                            $("#street_address_shipping_show").html(response.data.data.street_address);
                            $("#mobile_shipping_show").html(response.data.data.mobile);
                            $("#email_shipping_show").html(response.data.data.email);
                            $("#landmark_shipping_show").html(response.data.data.landmark);
                            $("#city_shipping_show").html(response.data.data.city);
                            $("#address_emirate").html(response.data.data.city);
                            $("#address_region").html(response.data.data.city);



                            $("#first_name_billing_show").html(response.data.data.first_name);
                            $("#last_name_billing_show").html(response.data.data.last_name);
                            $("#street_address_billing_show").html(response.data.data.street_address);
                            $("#mobile_billing_show").html(response.data.data.mobile);
                            $("#email_billing_show").html(response.data.data.email);
                            $("#landmark_billing_show").html(response.data.data.landmark);
                            $("#city_billing_show").html(response.data.data.city);
                            // $('myModalforgetotp').modal('hide');
                            // location.reload();
                            window.location.reload();
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

        function getFloatVal(input) {
            var output = parseFloat(input);
            if (!isNaN(output)) {
                return output;
            }
            return 0;
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
            
            var shipping_cost = $(this).find('option:selected').data('shipping_cost');
           // console.log(shipping_cost);
            $("#delivery_charge").html(`${shipping_cost} AED`);
            var net_amount = $("#delivery_charge").data('net_amount');
            $("#sub_total").html(`${getFloatVal(net_amount)+getFloatVal(shipping_cost)} AED`);
            $("#sub_total").data('value', getFloatVal(net_amount) + getFloatVal(shipping_cost));
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
        $(document).ready(() => {
            $('#shipping_address').change();
            $('#billing_address').change();
            /*     const checkbox = $("#consent");
                 const button = $("#place_order");
                 checkbox.change(function() {
                     if (checkbox.prop("checked")) {
                         button.prop("disabled", false);
                         $('.radio').prop("disabled", false);
                     } else {
                         button.prop("disabled", true);
                         $('.radio').prop("disabled", true);

                     }
                 }); */
        })

        $("#strpe_pay").click(function() {
            $('strpe_pay').prop('disabled', true);
            var form = $("#order_form");
            if (!$("#shipping_address").find('option:selected').data('shipping_cost')) {
                Swal.fire("Error!", "In Address region is missing", "error");
                return;
            }
            var amount = $('#sub_total').data('value');
            var token = '{{ $token }}';
            var cardNumber = $("#card_number").val();
            var month = $("#exp_month").val();
            var year = $("#exp_year").val();
            var cvv = $("#cvv").val();

            var shipping_address_id = $("#shipping_address").val();
            var billing_address_id = $("#billing_address").val();
            var check_payment_id = $('input[name="payment"]:checked').val();
            var transaction_id = $("#transaction_id").val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Authorization': `Bearer  ${token}`
                }
            });
            $.ajax({
                type: "POST",
                url: '{{ config('global.api') }}/stripe_payment',
                data: {
                    amount: amount,
                    cardNumber: cardNumber,
                    month: month,
                    year: year,
                    cvv: cvv,

                    shipping_address_id: shipping_address_id,
                    billing_address_id: billing_address_id,
                    check_payment_id: check_payment_id,
                    transaction_id: transaction_id,
                },
                cache: false,
                success: function(response) {
                    // $(".preloader").hide();
                    if (response.status == 1) {

                        Swal.fire("Success!", response.message);
                        window.location.href = "{{ url('thankYou') }}/" + response.order_id;
                        $('#stripeModal').modal('hide');

                        $('#transaction_id').val(response.payment_id);
                        // form.append("<input type='hidden' name='payment_id' value='" + response.payment_id + "'/>");

                        setTimeout(function() {
                            checkoutOrder();
                        }, 2000);

                        // $('.pre-loader').removeClass("hidded");

                    } else {
                        Swal.fire("Failed!", response.message, "error");
                        $('strpe_pay').prop('disabled', false);

                    }
                },
                error: function(xhr) {
                    // $(".preloader").hide();
                    console.log(xhr
                        .responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
            });
        });
    </script>
    <script>
        function setRegions(list) {
            if (list) {
                $('#region_id').html('<option value="0">Select Regions</option>');
                list.forEach(item => {
                    $('#region_id').append(`<option value="${item.id}">${item.region}</option>`);
                })
            }
        }
    </script>
@endsection
