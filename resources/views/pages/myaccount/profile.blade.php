@extends('layouts.app')
@section('content')
@php
    $footerbanner=topOfferCommon('my_account_bottom');
@endphp
{{-- <section class="main-container col2-left-layout">
    <div class="container">
        <div class="row">

            <div class="col-sm-9 col-sm-push-3">
                <article class="col-main">
                    <div class="page-title">
                        <h2>My profile</h2>
                    </div>
                    <div class="container">
                        <div class="row -spacing-a">
                            <div class="col-md-12">
                                <h1>User Profile</h1>
                            </div>
                        </div>
                        <div class="row -spacing-a">
                            <div class="col-md-2">
                                <div class="profile-image">
                                     @php 
                                    $currentUrl = session()->get('profile_pic'); // Get the current URL
                                    $lastSegment = last(explode('/', $currentUrl)); // Get the last segment of the URL
                                    @endphp
                                    @if($lastSegment !='default.png')
                                    <img src="{{$data['data']['profile_pic']}}" class="fullwidth" />
                                    @else
                                    <img class="fullwidth" src="{{asset('assets\images\pic.jpg')}}" alt="Profile dp" >
                                    @endif

                                    <div class="edit-profile-image">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <h5>Profile Information</h5>
                                <div class="row -spacing-b">
                                    <div class="col-md-3">
                                        <p class="-typo-copy" style="font-size: 17px;">Name</p>
                                        <p class="-typo-copy" style="font-size: 17px;">Mobile</p>
                                        <p class="-typo-copy" style="font-size: 17px;">Email</p>
                                    </div>
                                    <div class="col-md-3">
                                        <b>
                                            <p class="-typo-copy -typo-copy--blue" style="font-size: 17px;">
                                                {{$data['data']['name']}}</p>
                                        </b>
                                        <b>
                                            <p class="-typo-copy -typo-copy--blue" style="font-size: 17px;">
                                                {{$data['data']['mobile']}}</p>
                                        </b>
                                        <b>
                                            <p class="-typo-copy -typo-copy--blue" style="font-size: 17px;">
                                                {{$data['data']['email']}}</p>
                                        </b>

                                        <div class="change-btns">
                                                     
                                            <div class="psbtn">
                                                <button type="button " data-toggle="modal"
                                        onclick="$('#myModalChangePassword').modal('show');" class="pswdbtn">
                                        <span>Change Password</span></button>
                                                </div>
                                                <div class="edit-btn">
                                                        <a href="{{url('edit-profile')}}" style="text-decoration: none;"> <button
                                                class="pswdbtn">
                                                <span class="btn__icon fa fa-pencil"></span>
                                                <span class="btn__label">Edit Profile</span>
                                            </button></a>
                                                </div>
                                         

                                        </div>
                                       
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <!--	///*///======    End article  ========= //*/// -->
                @if(isset($footerbanner))
                <section class="banner-row irf">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12 col-md-12">
                                <div class="position-relative">
                                    <!-- Background -->
                                    <img class="img-fluid hover-zoom" src="{{$footerbanner->image}}" onclick="window.location='{{$footerbanner->btn_link}}'"  alt="">
                                    <!-- Body -->

                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                @endif
            </div>

            @include('pages.myaccount.sidebar')

        </div>
    </div>
</section> --}}

<div class="container bootstrap snippets bootdey">
<div class="row">
 @include('pages.myaccount.sidebar')
  <div class="profile-info col-md-9">
     
      <div class="panel">
          <div class="panel-body bio-graph-info">
              <h1>Profile</h1>
              <div class="row">
                  <div class="bio-row">
                      <p><span>First Name </span>:{{$data['data']['name']}}</p>
                  </div>
              </div>

            
              <div class="row">     
                  <div class="bio-row">
                      <p><span>Email </span>:  {{$data['data']['email']}}</p>
                  </div>
              </div>
              <div class="row">  
                  <div class="bio-row">
                      <p><span>Mobile </span>: {{$data['data']['mobile']}}</p>
                  </div>
              </div>  
                    
              </div>
          </div>
      </div>
      <div>
      
      </div>
  </div>
</div>
</div>

<script>
    function ResetPass() {
         $('.pre-loader').removeClass("hidded");
        let old_password = $('#old_password').val();
        let new_password = $('#new_password').val();
        let conform_password = $('#conform_password').val();
        $.ajax({
            url: "{{url('change-password')}}",
            type: 'post',
            data: $('#password_change_form').serialize(),
            dataType: 'json',
            success: function(response) {
                 $(".pre-loader").delay(2000).addClass("hidded");
                if (response.status == 1) {
                    Swal.fire("Success!", response.message, "success").then(() => {
                        $('#myModalChangePassword').modal('hide');
                        // $('myModalforgetotp').modal('hide');
                        //  location.reload();
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
<script>
    function showPasswordOld() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $(".password_old");
  if (input.attr("type") === "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }

};
    </script>
    <script>
    function showPasswordNew() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $(".password_new");
  if (input.attr("type") === "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }

};
    </script>
    <script>
    function showPasswordConf() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $(".password_conf");
  if (input.attr("type") === "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }

};
    </script>
@endsection