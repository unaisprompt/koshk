@extends('layouts.app')


   @section('content')  


    

    <!-- Start Profile Authentication Area -->
    <div class="profile-authentication-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <img src="{{asset('assets/img/login.jpg')}}" class="img-fluid" alt="Responsive image">

                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="login-form">
                        <h2>Login</h2>
                        <form method="POST" action="{{url('login-post')}}">
                            @csrf
                            <div class="form-group">
                                <label>Username or email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required >
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 remember-me-wrap">
                                    <a href="{{url('register')}}" style="color: rgb(46, 46, 189)" class="lost-your-password">Sign Up</a>
                                </div> 
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 lost-your-password-wrap">
                                    <a href="{{url('user-forget')}}" class="lost-your-password" style="color: rgb(46, 46, 189)">Lost your password?</a>
                                </div>
                            </div>
                            <button type="submit">Log In</button>
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