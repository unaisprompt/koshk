@extends('layouts.app')

 @section('content')  

 <!-- Start Page Title Area -->
 <div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Address List</h1>
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
                                <!-- <li><span><box-icon name='location-plus' ><i class='bx bx-location-plus' ></i></box-icon>&nbsp;</span><a href="shop-left-sidebar.html">Address book</a></li> -->

                                <!-- <li><span><box-icon type='solid' name='cog'><i class='bx bxs-cog'></i></box-icon>&nbsp;</span><a href="shop-left-sidebar.html">Account Settings</a></li> -->
                                <!-- <li><a href="shop-left-sidebar.html">Tips</a></li>
                                    <li><a href="shop-left-sidebar.html">Log in</a></li>
                                    <li><a href="shop-left-sidebar.html">Uncategorized</a></li> -->
                            </ul>
                        </div>

                    </aside>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="cart-area ptb-100">
    <div class="container">
          <div class="col-lg-12 col-sm-12 col-md-12 text-end">
                        <a href="{{url('address')}}" class="default-btn"><span>Add Address</span></a>
                    </div>
        <form>
            <div class="cart-table table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone number</th>
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
                               
                                    <h6>{{$item['first_name']}} {{$item['last_name']}}</h6>
                                        <p>Street Address : {{$item['street_address']}} </p>
                                         <p>Landmark :{{$item['landmark']}}</p>
                                     </h6>
                                
                            </td>
                            
                          <td>{{$item['mobile']}}</td>
                            <td><a onclick="Addressdelete($(this))" id="delete" class="remove" data-address_id="{{$item['id'] }}"><i class='bx bx-trash'></i></a>
                             <a href="{{url('edit-address/'.encrypt($item['id']))}}" class="edit"><i class='bx bx-edit'></i></a></td>
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
function Addressdelete(ref) {
    
    var address_id = ref.data('address_id');  
     console.log(address_id);
     $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
 });
     $.ajax({
     type: "POST",
     url: '{{ url("address-delete")}}',
     data: {
         address_id : address_id ,
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