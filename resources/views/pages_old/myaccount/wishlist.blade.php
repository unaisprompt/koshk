@extends('layouts.app')

 @section('content')  

 <!-- Start Page Title Area -->
 <div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Wish List</h1>
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
                            <h3 class="widget-title"><span>My WishList</span></h3>
                            <ul>
                               
                                <li><span>
                                        <box-icon name='user'><i class='bx bx-lock'></i></box-icon>&nbsp;
                                    </span> <a href="{{url('user-password-change')}}">Password Reset</a></li>
                                    <li><span>
                                        <box-icon name='user'><i class='bx bx-lock'></i></box-icon>&nbsp;
                                    </span> <a href="{{url('wishlist')}}">WishList</a></li>
                                    <li><span>
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
        <form>
            <div class="cart-table table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Wish list</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total=1;@endphp
                     @if(!empty($data))
                        @foreach($data['data'] as $item)
                        <tr>
                           
                         <td>@php echo $total; $total++; @endphp</td>
                            <td class="product-thumbnail">
                                <a href="{{url('product/detail?product='.$item['id'].'&productname='.$item['product_name'])}}">
                               <img src="{{$item['productimage']['image_url']}}" width="50px;" height="50px;">
                                    <h6>{{$item['product_name']}}</h6>
                                        <p>Product Price : {{$item['product_price']}} </p>
                                         <p>Discount Price :{{$item['discounted_price']}}</p>
                                         <p> Sku : {{$item['sku']}}</p>
                                        
                                     </h6>
                                </a>
                            </td>
                            <td><a onclick="WishListdelete($(this))" id="delete" class="remove" data-product_id="{{$item['id'] }}"><i class='bx bx-trash'></i></a>
                            
                            </tr>
                         @endforeach
                       @endif
                    </tbody>
                </table>
            </div>
            
       
        </form>
    </div>
</div>
 </div>
            </div>
        </div>
      </div>
<!-- End Cart Area -->
<script>
function WishListdelete(ref) {
    
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
         product_id : product_id ,
         // qty: qty,
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
     };
     </script>
 @endsection