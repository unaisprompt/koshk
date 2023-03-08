@extends('layouts.app')


   @section('content')  


      

    <!-- Start Profile Authentication Area -->
    <div class="profile-authentication-area ptb-100">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-12 col-md-12">
                    <div class="login-form">
                        <h2>Password Reset</h2>
                        <form action="{{url('password-reset')}}" method="POST">
                            @csrf
                            
                            <input type="hidden" name="user_id" value="{{$data['data']['id']}}">
                            
                            <div class="form-group">
                                <label>password</label>
                                <input type="password" name="new_pass" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="conform__pass" class="form-control" placeholder="Confirm Password" required>
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