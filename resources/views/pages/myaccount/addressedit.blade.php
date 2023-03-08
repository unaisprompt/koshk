@extends('layouts.app')
  
   @section('style')
   @endsection

   @section('content')  
 <!-- Start Profile Authentication Area -->
    <div class="profile-authentication-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <img src="{{asset('assets/img/register.jpg')}}" class="img-fluid" alt="Responsive image">

                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="register-form">
                        <h2>Create An Address</h2>
                        <form method="POST" action="{{url('address-update')}}">
                            @csrf
                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                 <input type="hidden" class="form-control" name="address_id" placeholder="address_id" value="{{$data['data']['id']}}" required>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" value="{{$data['data']['email']}}" required>
                            </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Street Address</label>
                                <textarea class="form-control" name="street_address" placeholder="street address" required> {{$data['data']['street_address']}}</textarea>
                            </div>
                            </div>
                             <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Land Mark</label>
                                <textarea class="form-control" name="landmark" placeholder="Land mark" required> {{$data['data']['landmark']}}</textarea>
                            </div>
                            </div> 
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{$data['data']['first_name']}}" required>
                            </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Last name" value="{{$data['data']['last_name']}}" required>
                            </div>
                            </div>
                           <div class="col-lg-3 col-md-3 col-sm-4">
                                <div class="form-group ">
                                    <label>Code</label>
                                    <select name="code" id="" class="form-control">
                                        <option value="+971">UAE +971</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-8">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="number" name="mobile" class="form-control" min="0" id="phone_number" required placeholder="Phone number" value="{{$data['data']['mobile']}}" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control" name="city"  placeholder="city" value="{{$data['data']['city']}}" required> 
                            </div>
                            </div>
                        </div>

                            <button type="submit">Update</button>
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