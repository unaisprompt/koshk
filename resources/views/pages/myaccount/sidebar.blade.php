@php
    $sidebanner=topOfferCommon('my_account_left_bottom');
@endphp

<style>
    /*----------------------------*/
/* GENERAL */
/*----------------------------*/

*,
*::before,
*::after {
  box-sizing: border-box;
}

@import url("https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&display=swap");

html {
  background: #1a1b3a;
  font-size: 16px;
  font-family: "Roboto Condensed", sans-serif;
}

body {
  color: white;
}

/*----------------------------*/
/* SPINNING OBJECTS */
/*----------------------------*/

@keyframes brightness {
  0%,
  50%,
  100% {
    filter: blur(0px) brightness(120%)
      drop-shadow(0 0 2.5px rgba(255, 255, 255, 0.1))
      drop-shadow(0 0 5px rgba(255, 255, 255, 0.075))
      drop-shadow(0 0 7.5px rgba(255, 255, 255, 0.045))
      drop-shadow(0 0 10px rgba(255, 255, 255, 0.025));
  }
  25%,
  75% {
    filter: blur(1px) brightness(50%)
      drop-shadow(0 0 2.5px rgba(255, 255, 255, 0.1))
      drop-shadow(0 0 5px rgba(255, 255, 255, 0.075))
      drop-shadow(0 0 7.5px rgba(255, 255, 255, 0.045))
      drop-shadow(0 0 10px rgba(255, 255, 255, 0.025));
  }
}

@keyframes spin {
  0% {
    transform: rotateY(-180deg);
  }
  100% {
    transform: rotateY(180deg);
  }
}
.spinningasset {
  text-align: left;
  transition: all 0.4s ease-out;
  cursor: pointer;
  animation: brightness 2.5s infinite linear;
  &::after {
    content: "";
    position: absolute;
    z-index: 1;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    border-radius: 8px;
    width: 11px;
    margin: auto;
    background-size: 100px 400%;
    background-position: center;
  }
  > div {
    position: relative;
    z-index: 2;
    perspective: 10000px;
    transform-style: preserve-3d;
    transform-origin: center;
    animation: spin 2.5s infinite linear;
    > * {
      width: 100%;
      height: 100%;
      position: absolute;
      backface-visibility: inherit;
      background-size: cover;
    }

    > div:first-child {
      transform: translateZ(-6px);
    }
    > div:last-child {
      transform: translateZ(6px);
      background-image: url(https://res.cloudinary.com/gloot/image/upload/v1632752594/Marketing/202109_gloot2/Coins_side_front.svg);
    }
    em {
      filter: blur(0.5px);
      &:first-of-type {
        transform: translateZ(0px) rotateY(-6deg);
      }
      &:last-of-type {
        transform: translateZ(0px) rotateY(6deg);
      }
    }
    i {
      filter: blur(0.5px);
      &:nth-of-type(1) {
        transform: translateZ(-5px);
      }
      &:nth-of-type(2) {
        transform: translateZ(-4px);
      }
      &:nth-of-type(3) {
        transform: translateZ(-3px);
      }
      &:nth-of-type(4) {
        transform: translateZ(-2px);
      }
      &:nth-of-type(5) {
        transform: translateZ(-1px);
      }
      &:nth-of-type(6) {
        transform: translateZ(0px);
      }
      &:nth-of-type(7) {
        transform: translateZ(1px);
      }
      &:nth-of-type(8) {
        transform: translateZ(2px);
      }
      &:nth-of-type(9) {
        transform: translateZ(3px);
      }
      &:nth-of-type(10) {
        transform: translateZ(4px);
      }
      &:nth-of-type(11) {
        transform: translateZ(5px);
      }
    }
  }

  &.is-sm {
    width: 24px;
    height: 24px;
    transform: scale(0.24);
    transform-origin: left top;
    filter: none;
    &,
    > div {
    }
  }

  &.coin {
    > div {
      width: 100px;
      height: 100px;
      > div:first-child {
        background-image: url(https://res.cloudinary.com/gloot/image/upload/v1632752594/Marketing/202109_gloot2/Coins_side_back.svg);
      }
      > div:last-child,
      &::after,
      i,
      em {
        background-image: url(https://res.cloudinary.com/gloot/image/upload/v1632752594/Marketing/202109_gloot2/Coins_side_front.svg);
      }
    }
  }

  

 
}

/*----------------------------*/
/* CARD */
/*----------------------------*/

.card {
  background: radial-gradient(
    100% 100% at 50% 5%,
    rgba(255, 255, 255, 0.05) 0%,
    rgba(255, 255, 255, 0.03) 100%
  );
  border: 1px solid rgba(255, 255, 255, 0.05);
  border-radius: 1rem;
  padding: 0.5rem;
  backdrop-filter: blur(4px);
  > div {
    position: relative;
    z-index: 2;
    background: #2d2d59;
    border-radius: 0.5rem;
    padding: 1rem;
    backdrop-filter: blur(8px);
    box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.05),
      0 1.5px 1.1px rgba(0, 0, 0, 0.034), 0 3.6px 2.5px rgba(0, 0, 0, 0.048),
      0 6.8px 4.8px rgba(0, 0, 0, 0.06), 0 12.1px 8.5px rgba(0, 0, 0, 0.072),
      0 22.6px 15.9px rgba(0, 0, 0, 0.086), 0 54px 38px rgba(0, 0, 0, 0.12);
  }

  &.is-alt {
    background: transparent;
    border: none;
    > .card-content {
      background: #191a2f;
    }
    &::before,
    &::after {
      content: "";
      position: absolute;
      z-index: 1;
      top: 1.5rem;
      bottom: 1.5rem;
      width: 4rem;
      background: linear-gradient(to bottom, #00a6fb 0%, #00fddc 100%);
      border-radius: 0.25rem;
      transition: all 0.6s ease-out 0.22s;
    }
    &::before {
      left: 0;
      transform: translateX(1rem);
    }
    &::after {
      right: 0;
      transform: translateX(-1rem);
    }
  }
}
</style>
{{-- <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">

                        <div class="block block-progress">
                            <div class="block-title ">My Account</div>
                            <div class="block-content">

                                <div class=" col-md-12 profile-btm">
                                   @php 
                                    $currentUrl = session()->get('profile_pic'); // Get the current URL
                                    $lastSegment = last(explode('/', $currentUrl)); // Get the last segment of the URL
                                    @endphp
                                    @if($lastSegment !='default.png')
                                    <img class="profile-dp" src="{{session()->get('profile_pic')}}" alt="Profile dp" style="width:100px;height:100px;">
                                    @else
                                    <img class="profile-dp" src="{{asset('assets\images\pic.jpg')}}" alt="Profile dp" style="width:100px;height:100px;">
                                    @endif
                                    <div class="profile-name">
                                        <div class="user-name">{{session()->get('name')}}</div>
                                        <span><a href="{{url('logout')}}">Logout</span>
                                    </div>


                                </div>
                                <div class="col-md-12 account-tabs-section extr-margin-bottom">
                                    <ul class="nav flex-column account-tabs">
                                        <li class="nav-item"><a class="nav-link " href="{{url('my-account')}}">Profile</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{url('order-history')}}">Orders</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{url('wishlist')}}">Wishlist</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{url('address-list')}}">Address</a></li>
                                    </ul>
                                </div>



         
                            </div>
                        </div>
                        @if(isset($sidebanner))
                        <div class="featured-add-box">
                            <div class="featured-add-inner"> <a href="{{$sidebanner->btn_link}}"> <img src="{{$sidebanner->image}}"
                                        alt="f-img"></a>
                                <div class="banner-content">
                                    <!-- <div class="banner-text">Clearance Sale</div> -->
                                    <!-- <div class="banner-text1">Hot <span>Sale</span> </div>
                                    <p>save upto 20%</p> -->
                                </div>
                            </div>
                        </div>
                        @endif
</aside> --}}
  <div class="profile-nav col-md-3">
      <div class="panel">
          <div class="user-heading round">
              <a href="#">
                 @php 
                                    $currentUrl = session()->get('profile_pic'); // Get the current URL
                                    $lastSegment = last(explode('/', $currentUrl)); // Get the last segment of the URL
                                    @endphp
                                    @if($lastSegment !='default.png')
                                    <img  src="{{session()->get('profile_pic')}}" alt="Profile dp" >
                                    @else
                                    <img src="{{asset('assets\images\pic.jpg')}}" alt="Profile dp" >
                                    @endif
              </a>
              <h1>{{session()->get('name')}}</h1>
              <p>{{session()->get('email')}}</p>

              <div class="flex space-x-4">
              <div class="card">
                <div class="card-content p-0 flex">
                  <div class="spinningasset coin is-sm">
                    <div>
                      <div></div>
                      <i></i>
                      <i></i>
                      <i></i>
                      <i></i>
                      <i></i>
                      <i></i>
                      <i></i>
                      <i></i>
                      <i></i>
                      <i></i>
                      <i></i>
                      <em></em>
                      <em></em>
                      <div></div>
                    </div>
                  </div>
                  <div class="ml-2" style="color: white; position: absolute;left: 30%; bottom: 30%;">
                    0
                  </div>
                </div>
              </div>
              </div>


          </div>

          <ul class="nav nav-pills nav-stacked">
              <li class=@if(last(request()->segments()) == 'my-account') 'active' @endif><a href="{{url('my-account')}}"> <i class="fa fa-user"></i> Profile</a></li>
                <li class=@if(last(request()->segments()) == 'order-history') 'active' @endif><a href="{{url('order-history')}}"><i class="fa fa-shopping-cart"></i> Orders </a></li>
                <li class=@if(last(request()->segments()) == 'wishlist') 'active' @endif><a href="{{url('wishlist')}}"> <i class="fa fa-heart"></i> Wishlist</a></li>
                <li class=@if(last(request()->segments()) == 'address-list') 'active' @endif><a href="{{url('address-list')}}"> <i class="fa fa-map-marker"></i> Address</a></li>           
                <li class=@if(last(request()->segments()) == 'edit-profile') 'active' @endif><a href="{{url('edit-profile')}}"> <i class="fa fa-edit"></i> Edit Profile</a></li>
                <li><a href="#" onclick="$('#myModalChangePassword').modal('show');"> <i class="fa fa-lock"></i> Change Password</a></li>
          </ul>
      </div>
  </div>
  <div class="modal fade" id="myModalChangePassword" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header v5c">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="yhd0d">
                    <h3>Password Reset</h3>
                </div>
                <form id="password_change_form">
                    @csrf
                    <div class="mmc5c">
                        <label>Old password</label>
                        <input type="password" id="old_password" name="old_password" class="password_old"
                            placeholder="Password" required>
                            <span onclick="showPasswordOld()"><i class="fa fa-eye-slash"></i></span>
                    </div>
                    <div class="mmc5c">
                        <label>New password</label>
                        <input type="password" id="new_password" name="new_password" class="password_new"
                            placeholder="New Password" required>
                        <span onclick="showPasswordNew()"><i class="fa fa-eye-slash"></i></span>
                    </div>
                    <div class="mmc5c">
                        <label>Confirm password</label>
                        <input type="password" id="conform_password" name="conform_password"  class="password_conf"
                            placeholder="Confirm Password" required>
                        <span onclick="showPasswordConf()"><i class="fa fa-eye-slash"></i></span>
                    </div>
                    <button type="button" class="jcdgCW" id="login_btn" onclick="ResetPass()">Reset Password</button>
                </form>
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
    function showPasswordOld() 
{

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $(".password_old");
  if (input.attr("type") === "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }

}
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


<script>
$( document ).ready(function() {

      var setting = {
          url: '{{ url('/user-loyalit') }}',
          dataType: 'json',
          type: 'get',
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
         

          success: function(response) {
              // console.log(response);

              if (response.status == 1) {
                   alert(response.data);
              }

          },
          error: function(xhr) {

              console.log(xhr.responseText); // this line will save you tons of hours while debugging
              // do something here because of error
          }
      };
      $.ajax(setting);
    });

</script>