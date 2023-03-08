@extends('layouts.app')

 @section('content')  

 <!-- Start Page Title Area -->
 <div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Order Details</h1>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Cart Area -->

      <div class="products-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area">
                        <div class="widget widget_categories">
                            <h3 class="widget-title"><span>My Account</span></h3>
                            <ul>
                               
                                <li><span>
                                        <box-icon name='user'><i class='bx bx-lock'></i></box-icon>&nbsp;
                                    </span> <a href="{{url('user-password-change')}}">Password Reset</a></li>
                                        <li><span>
                                        <box-icon name='user'><i class='bx bx-lock'></i></box-icon>&nbsp;
                                    </span> <a href="{{url('wishlist')}}">WishList</a></li> <li><span>
                                        <box-icon name='user'><i class='bx bx-map'></i></box-icon>&nbsp;
                                    </span> <a href="{{url('address-list')}}">Address List</a>  </li>
                                   <li><span>
                                        <box-icon name='shopping-bag'><i class='bx bx-shopping-bag'></i></box-icon>
                                        &nbsp;
                                    </span><a href="{{url('order-history')}}">Orders</a></li>
                                      <li><span>
                                        <box-icon name='user'><i class='bx bx-cog'></i></box-icon>&nbsp;
                                    </span>  <a href="{{url('logout')}}">logout</a></li>
                             
                            </ul>
                        </div>

                    </aside>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="cart-area ptb-100">
    <div class="container">
            <div class="cart-table table-responsive">
                
                     @if(!empty($data))
                     @foreach($data['order_data'] as $value) 
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
                              <button type="button" class="btn btn-success" style="padding: 10px;"><a href="{{url('order-tracking/'.encrypt($value['id']))}}">Track Your Order</a></button> <br>  
                           </div>
                            </div>
                    </div>
                </div>
                </div> 
                 @endforeach                    
                       
              
                       @endif
                    

            </div>
            
      
       
    </div>
</div>
 </div>
            </div>
        </div>
      </div>
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
            success: function (response) {
                    $(".preloader").hide();
                    if (response.status == 1) {
                        Swal.fire("Success!", response.message, "success").then(() => {
                        //   location.reload();
                     window.location = '{{url('order-history')}}';
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
                error: function (xhr) {
                    $(".preloader").hide();
                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
            });
            };
     </script>
 @endsection