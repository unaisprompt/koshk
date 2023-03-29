@extends('layouts.app')
@section('content') 
<style>
  .form-gap {
    padding-top: 70px;
}
  </style>
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> --}}
<div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Reset Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
    
                    <form >
                        @csrf
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="password_reset" name="password_reset" placeholder="please enter your password" class="form-control"  type="password">
                        </div>
                      </div>
                        <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="conf_password" name="conf_password" placeholder="please enter your conform password" class="form-control"  type="password">
                        </div>
                      </div>
                      <div class="form-group">
                        <button type="button" name="recover-submit" class="btn btn-lg btn-primary btn-block" onclick="ResetPassword()" >Reset Password</button>
                      </div>
                      
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>

            <script>
        function ResetPassword()
   {
    let password =$('#password_reset').val();
     let conf_password =$('#conf_password').val();
       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    $.ajax({
        url:"{{url('already-user-pass')}}",
        type:'post',
         data: {
                    password: password,
                    conf_password:conf_password
            },
        dataType:'json',
        success: function (response) {
                    $(".preloader").hide();
                    if (response.status == 1) {
                        Swal.fire("Success!", response.message, "success").then(() => {
                            window.location.href = "{{url('/')}}";

                    //  location.reload();
                        });
                        document.getElementById("form").reset();
                        $('#refresh').click();
                    } else {
                        Swal.fire("Failed!", response.message, "error");
                        if (response.hasOwnProperty('error_list')) {
                            location.reload();
                            for (x in response.error_list) {
                                $('#error_' + x).html(response.error_list[x])
                            }
                        }
                    }
                },
                error: function (xhr) {
                    $(".preloader").hide();
                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
    });
   }
        </script>
        @endsection