@extends('layouts.app')


   @section('content')  


      

    <!-- Start Profile Authentication Area -->
    <div class="profile-authentication-area ptb-100">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-12 col-md-12">
                    <div class="login-form">
                        <h2>Verify Email</h2>
                        <form action="{{url('verify-otp')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label> email</label>
                                <input type="hidden" name="email" value="{{$data}}" id="email">
                                <input type="email" class="form-control" placeholder="Email" value="{{$data}}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Otp</label>
                                <input type="text" name="otp" class="form-control" placeholder="Otp" required>
                            </div>
                           
                            <button type="submit">Verify</button>
                        </form>
                          <br>
                        <a id="getOtp" style="padding-top: 10px;"><button>Not get otp?</button></a>


                    </div>
                </div>

                
               
            </div>
        </div>
    </div>
    <!-- End Profile Authentication Area -->

   @endsection


   
   @section('script')

   <script>
      @if(!empty($error))
        Toastify({
            text: "{{ $error }}",
            className: "info",
            close: true,
            style: {
                background: "#ef0808",
            }
            }).showToast();
        @endif

        $('#getOtp').click(function(e){
            alert('djfhgh')
    e.preventDefault();
    // $('#review_button').prop('disabled', true);
        $.ajax({
        type: "POST",
        url: '{{url("resent-forget-otp")}}',
        headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
        data: {
            email: $('#email').val()
             }, 
        success: function(response) {
            if(response.status==1){
               
                Toastify({
            text: "Otp Sent Successfully",
            className: "info",
            close: true,
            style: {
                background: "#1cad6a",
            }
            }).showToast();
             }
             else{
                Toastify({
            text: 'error',
            className: "info",
            close: true,
            style: {
                background: "#e11414",
            }
            }).showToast();
             }
        }
    });
    });

   </script>
  
   @endsection