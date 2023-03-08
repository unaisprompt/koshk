@extends('layouts.app')


   @section('content')  


      

    <!-- Start Profile Authentication Area -->
    <div class="profile-authentication-area ptb-100">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-12 col-md-12">
                    <div class="login-form">
                        <h2>Verify Email</h2>
                        <form action="{{url('email-verify')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label> email</label>
                                <input type="hidden" name="email" value="{{$data['email']}}">
                                <input type="email" class="form-control" placeholder="Email" value="{{$data['email']}}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Otp</label>
                                <input type="text" name="otp" class="form-control" placeholder="Otp" required>
                            </div>
                           
                            <button type="submit">Verify</button>
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