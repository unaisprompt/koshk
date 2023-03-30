@extends('layouts.app')

@section('content')

<!-- Start Page Title Area -->

<!-- End Page Title Area -->

<!-- Start Cart Area -->

@extends('layouts.app')
@section('style')
@endsection
@section('content')
<section class="main-container col2-left-layout">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-sm-push-3">
                <div class="page-title">
                    <h2>Orders</h2>
                </div>
                @php $total=1;@endphp
                @if(!empty($data))
                @foreach($data['order_data'] as $value)
                <div class="col-sm-8 col-lg-8 order-box-wid">
                    <div class="uthssk">
                        <div class="cart-table table-responsive" style="overflow-x: hidden;">
                            <div class="row">
                                <div class="col-sm-12 mb-2">
                                    <div class="card">
                                        <div class="card-body">
                                          <h5 class="card-title">order Number : {{$data['order_info']['order_number']}}</h5>
                       <img src="{{$value['image_url']}}" style="width:50px;height:50px;">
                            <p class="card-title">Product Name : {{$value['product_name']}}</p>
                            <p class="card-title">qty : {{$value['qty']}}</p>
                            <p class="card-title">status : {{$value['status']}}</p>
                            <p class="card-title">Shipping Cost : {{$value['shipping_cost']}}</p>
                            <p class="card-title">tax : {{$value['tax']}}</p>
                           <p class="card-title">Status : {{$value['status']}}</p><br>
                           <div class="d-flex" style="justify-content: space-between;">
                            @if($value['status'] != 'Return request raised' || $value['status'] != 'Return in progress'|| $value['status'] != 'Return in completed'|| $value['status'] != 'Return request rejected' )
                            @if($value['status'] != 'cancelled')
                             @if($value['return_number'] == NULL)
                          
                             @if( $value['status']=='Order Delivered')
                            <a href="{{url('return/'.encrypt($data['order_info']['order_number']).'/'.encrypt($value['id']))}}" class="btn btn-primary">Return</a> 
                            @else
                                <span style="color: blue; padding:10px;"> Return Not Available </span>
                            @endif
                            @else
                            <span style="color: blue; padding:10px;"> Return Available </span>
                            @endif
                            @if($value['status']=='Order Placed'||$value['status']=='Order Confirmed'||$value['status']=='Order Shipped')
                           <button type="button" class="btn btn-primary" onclick="CancelOder({{$value['id']}})">Cancel Order</button>
                                
                            @endif
                            @else
                            <span style="color: blue"> Order Cancelled </span>
                                @endif
                                @else
                                <span style="color: blue">{{$value['status']}}</span>
                                @endif
                              <button type="button" class="btn btn-success" style="padding: 10px;"><a href="{{url('order-tracking/'.encrypt($value['id']))}}" style="text-decoration: none;color:#fff;">Track Your Order</a></button> <br>  
                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                <!--	///*///======    End article  ========= //*/// -->
            </div>
            @include('pages.myaccount.sidebar')
        </div>
        <section class="banner-row irf mt-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        {{-- <div class="position-relative">
                            <!-- Background -->
                            <img class="img-fluid hover-zoom" src="{{asset('assets\images\popup.jpeg')}}" alt="">
                            <!-- Body -->
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
@endsection
<!-- End Cart Area -->
<script>
    function CancelOder(id) {
        var id = id;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: '{{ url("order-cancel")}}',
            data: {
                id: id,
            },
            cache: false,
            success: function(response) {
                $(".preloader").hide();
                if (response.status == 1) {
                    Swal.fire("Success!", response.message, "success").then(() => {
                        //   location.reload();
                        window.location = '{{url('
                        order - history ')}}';
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
                $(".preloader").hide();
                console.log(xhr.responseText); // this line will save you tons of hours while debugging
                // do something here because of error
            }
        });
    };
</script>
@endsection