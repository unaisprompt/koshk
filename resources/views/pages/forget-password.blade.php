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
                        <h2>Forget Password</h2>
                        <form method="POST" action="{{url('forget-post')}}">
                            @csrf
                            <div class="form-group">
                                <label>Username or email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required >
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