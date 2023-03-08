@extends('layouts.app')
 @section('content')  
<!-- Start Profile Authentication Area -->
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
                                    </span> <a href="{{url('wishlist')}}">WishList</a></li><li><span>
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
                    <div class="login-form">
                        <h2>Password Reset</h2>
                        <form action="{{url('change-password')}}" method="POST">
                            @csrf
                            
                            <input type="hidden" name="user_id" value="">
                            <div class="form-group">
                                <label>Old password</label>
                                <input type="password" name="old_password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label>password</label>
                                <input type="password" name="new_password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label>conform password</label>
                                <input type="password" name="conform_password" class="form-control" placeholder="conform Password" required>
                            </div>
                            <button type="submit">Submit</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
     </div>
    <!-- End Profile Authentication Area -->

   @endsection


   
   @section('script')

   <script>
        @if(Session::has('error'))
        Toastify({
            text: "{{ Session::get('error') }}",
            className: "info",
            close: true,
            style: {
                background: "#ef0808",
            }
            }).showToast();
        @endif

   </script>
  
   @endsection