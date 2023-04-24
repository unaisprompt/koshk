@php
    $sidebanner=topOfferCommon('my_account_left_bottom');
@endphp
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
          </div>

          <ul class="nav nav-pills nav-stacked">
              <li class="active"><a href="{{url('my-account')}}"> <i class="fa fa-user"></i> Profile</a></li>
                <li><a href="{{url('order-history')}}"><i class="fa fa-shopping-cart"></i> Orders <span class="label label-warning pull-right r-activity">9</span></a></li>
                <li><a href="{{url('wishlist')}}"> <i class="fa fa-heart"></i> Wishlist <span class="label label-success pull-right r-activity">9</span></a></li>
                <li><a href="{{url('address-list')}}"> <i class="fa fa-map-marker"></i> Address</a></li>           
              <li><a href="{{url('edit-profile')}}"> <i class="fa fa-edit"></i> Edit Profile</a></li>
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
                        <label>Conform password</label>
                        <input type="password" id="conform_password" name="conform_password"  class="password_conf"
                            placeholder="conform Password" required>
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