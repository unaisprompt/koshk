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
                        <h2>Create An Account </h2>
                        <form method="POST" action="{{url('register-post')}}">
                            @csrf
                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{old('email')}}" required>
                            </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="{{old('password')}}" required>
                            </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="name" id="frist_name" placeholder="First Name" value="{{old('name')}}" required>
                            </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="last_name"  id="last_name" placeholder="Last name" value="{{old('last_name')}}"  required>
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
                                    <input type="number" name="phone" class="form-control" id="phone_number" value="{{old('phone')}}" required placeholder="Phone number" required>
                                </div>
                            </div>
                        </div>

                            <button type="submit" id="register">Create An Account</button>
                        </form>

                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 remember-me-wrap">
                                Already have an account? <a href="{{url('login')}}" style="color: rgb(46, 46, 189)" class="lost-your-password"> Sign In</a>
                            </div> 
                         
                        </div>
                        
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