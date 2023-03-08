@extends('layouts.app')


   @section('content')  


      

    <!-- Start Profile Authentication Area -->
    <div class="profile-authentication-area ptb-100">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-12 col-md-12">
                    <div class="login-form">
                        <h2></h2>
                        <form action="{{url('return-post')}}" method="POST">
                            @csrf
                         <input type="hidden" name="orderid" value="{{$productid}}">
                            <div class="form-group">
                                <label>Return Reason</label>
                                <textarea type="text" name="return_reason" class="form-control" placeholder="" required></textarea>
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