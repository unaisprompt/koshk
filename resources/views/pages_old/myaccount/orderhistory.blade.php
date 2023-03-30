@extends('layouts.app')

 @section('content')  

 <!-- Start Page Title Area -->
 <div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Order History</h1>
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
                
                        @php $total=1;@endphp
                     @if(!empty($data))
  

                     
                        @foreach($data['data'] as $item)
                                        <div class="row">
                <div class="col-sm-12 mb-2">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">order Number : {{$item['order_number']}}</h5>
                        <p class="card-text">date :{{$item['date']}}</p>
                    <p class="card-text">Amount: AED {{$item['grand_total']}}</p>
                        <a href="{{url('order-detail/'.encrypt($item['order_number']))}}" class="btn btn-primary">order details</a>
                    
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

     </script>
 @endsection