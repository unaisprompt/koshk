@extends('layouts.app')

@section('style')
@endsection
@section('content')

    <style>
        .modal-body {
            color: black;
        }
    </style>
    <div class="container bootstrap snippets bootdey">
        <div class="row">
            @include('pages.myaccount.sidebar')
            <div class="col-sm-9 ">
                <div class="page-title">
                    <h2>@lang('label.Orders')</h2>
                </div>
                @php $total=1;@endphp
                @if (!empty($data))
                    @foreach ($data['order_data'] as $value)
                        <div class="col-sm-8 col-lg-8 order-box-wid">
                            <div class="">
                                <div class="cart-table table-responsive" style="overflow-x: hidden;">
                                    <div class="row">
                                        <div class="col-sm-12 mb-2">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">order Number :
                                                        {{ $data['order_info']['order_number'] }}</h5>
                                                    <img src="{{ $value['image_url'] }}" style="width:50px;height:50px;">
                                                    <p class="card-title">Product Name : {{ $value['product_name'] }}</p>
                                                    <p class="card-title">Qty : {{ $value['qty'] }}</p>
                                                    <p class="card-title">Status : {{ $value['status'] }}</p>
                                                    <p class="card-title">Shipping Cost : {{ $value['shipping_cost'] }}</p>
                                                    <p class="card-title">Loyality Point: {{ $value['loyality_discount'] }}
                                                        AED</p>
                                                    <p class="card-title">Tax : {{ $value['tax'] }}</p>
                                                    <p class="card-title">Status : {{ $value['status'] }}</p><br>

                                                    <div class="d-flex" style="justify-content: space-between;">
                                                        @if (
                                                            $value['status'] != 'Return request raised' ||
                                                                $value['status'] != 'Return in progress' ||
                                                                $value['status'] != 'Return in completed' ||
                                                                $value['status'] != 'Return request rejected')
                                                            @if ($value['status'] != 'cancelled')
                                                                @if ($value['return_number'] == null)
                                                                    @if ($value['status'] == 'Order Delivered' && $value['isreturn'] != 0)
                                                                        <a href="{{ url('return/' . encrypt($data['order_info']['order_number']) . '/' . encrypt($value['id'])) }}"
                                                                            class="btn btn-primary">Return</a>
                                                                        {{-- @else
                                <span style="color: blue; padding:10px;"> Return Not Available This Product </span> --}}
                                                                    @endif
                                                                @else
                                                                    <span style="color: blue; padding:10px;"> Returned
                                                                    </span>
                                                                @endif
                                                                @if ($value['status'] == 'Order Placed' || $value['status'] == 'Order Confirmed' || $value['status'] == 'Order Shipped')
                                                                    {{-- <button type="button" class="btn btn-primary" onclick="cancelOder({{$value['id']}})">Cancel Order</button> --}}
                                                                    <a href="#" class="btn btn-primary"
                                                                        data-toggle="modal"
                                                                        onclick="$('#myModalCancel').modal('show');"
                                                                        style=" margin: 9px;">Cancel Order</a>
                                                                @endif
                                                            @else
                                                                <span style="color: blue;padding: 21px;"> Order Cancelled
                                                                </span>
                                                            @endif
                                                        @else
                                                            <span style="color: blue">{{ $value['status'] }}</span>
                                                        @endif
                                                        <button type="button" class="btn btn-success"
                                                            style="padding: 10px;margin: 9px;"><a
                                                                href="{{ url('order-tracking/' . encrypt($value['id'])) }}"
                                                                style="text-decoration: none;color:#fff;">Track Your
                                                                Order</a></button> <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--	///*///======    End article  ========= //*/// -->
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModalCancel" role="dialog" style="z-index:1000">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header v5c">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form method="post" id="register_form">
                    @csrf
                    <div class="modal-body">
                        <div class="yhd0d">
                            <h2>I Cancel Order Terms And
                                Conditions</h2>
                        </div>
                        @if (isset(CmsPage()['cancellation']['cancellation_content']))
                            {{ CmsPage()['cancellation']['cancellation_content'] }}
                        @endif
                        <br><br>
                        <input type="checkbox" value="1" id="consent" name="consent">
                        <span id="modalConstant">Agree terms
                            and conditions</span>
                        <button type="button" class="btn btn-primary" id="place_order" onclick="cancelOrder()">Cancel
                            Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModalCancelReason" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header v5c">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form method="post" id="register_form">
                    @csrf
                    <div class="modal-body">
                        <div class="yhd0d">
                            <textarea name="cancel_reason" id="cancel_reason" placeholder="Cancel Reason" row="5" class="form-control"></textarea>
                        </div>
                        <br>
                        <button type="button" class="btn btn-primary" id="place_order"
                            onclick="cancelOder({{ $value['id'] }})">Cancel
                            Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Cart Area -->
    <script>
        function cancelOrder() {
            if ($('#consent').prop('checked')) {
                $('#myModalCancelReason').modal('show');
                $('#myModalCancel').modal('hide');
            } else {
                Swal.fire("Error!", "Please accept the terms and condition", "error");
            }
        }
    </script>
    <script>
        function cancelOder(id) {
            $('.pre-loader').removeClass("hidded");
            let reason = $('#cancel_reason').val();
            $.ajax({
                type: "POST",
                url: '{{ url('order-cancel') }}',
                data: {
                    id: id,
                    reason: reason,
                },
                success: function(response) {
                    $(".pre-loader").delay(2000).addClass("hidded");
                    if (response.status == 1) {
                        Swal.fire("Success!", response.message, "success").then(() => {
                            $('#myModalCancel').modal('hide');
                            window.location = "{{ url('order-history') }}";
                        });
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

        const checkbox = $("#consent");
        const button = $("#place_order");

        checkbox.change(function() {
            if (checkbox.prop("checked")) {
                button.prop("disabled", false);
            } else {
                button.prop("disabled", true);
            }
        });
    </script>
@endsection
