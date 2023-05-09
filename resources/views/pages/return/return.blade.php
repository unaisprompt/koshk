@extends('layouts.app')


   @section('content')  


      

    <!-- Start Profile Authentication Area -->
    <div class="profile-authentication-area ptb-100">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-12 col-md-12">
                    <div class="login-form">
                        <h2></h2>
                        <form id="retrun_review" method="POST">
                            @csrf
                         <input type="hidden" name="orderid" value="{{$productid}}">
                            <div class="form-group">
                                <label style="align-items: center;">Return Reason</label>
                                <textarea type="text" name="return_reason" class="form-control" row="7" placeholder="Please enter return Reason" required></textarea>
                            </div>
                           
                            <button type="button" class="btn btn-primary" onclick="ReturnReview()">Submit</button>
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
   <script>
    function ReturnReview() {
            $('.pre-loader').removeClass("hidded");

            $.ajax({
                url: "{{ url('return-post') }}",
                type: 'post',
                data: $('#retrun_review').serialize(),
                dataType: 'json',
                success: function(response) {
                    $(".pre-loader").delay(2000).addClass("hidded");
                    if (response.status == 1) {
                        Swal.fire("Success!", response.message, "success").then(() => {
                         window.location.href ="{{url('order-history')}}";
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
                error: function(xhr) {
                    $(".pre-loader").delay(2000).addClass("hidded");
                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
            });
        }
    </script>
  
   @endsection