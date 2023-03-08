@extends('layouts.app')
  
   @section('style')
 @endsection
<style>
.profile-pic {
  color: transparent;
  transition: all 0.3s ease;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  transition: all 0.3s ease;
}
.profile-pic input {
  display: none;
}
.profile-pic img {
  position: absolute;
  object-fit: cover;
  width: 165px;
  height: 165px;
  box-shadow: 0 0 10px 0 rgba(255, 255, 255, 0.35);
  border-radius: 100px;
  z-index: 0;
}
.profile-pic .-label {
  cursor: pointer;
  height: 165px;
  width: 165px;
}
.profile-pic:hover .-label {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: rgba(0, 0, 0, 0.8);
  z-index: 10000;
  color: #fafafa;
  transition: background-color 0.2s ease-in-out;
  border-radius: 100px;
  margin-bottom: 0;
}
.profile-pic span {
  display: inline-flex;
  padding: 0.2em;
  height: 2em;
}

/* body {
  height: 100vh;
  background-color: #191815;
  display: flex;
  justify-content: center;
  align-items: center;
}
body a:hover {
  text-decoration: none;
} */
    </style>
   @section('content')  
 <!-- Start Profile Authentication Area -->
    <div class="profile-authentication-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <img src="{{asset('assets/img/register.jpg')}}" class="img-fluid" alt="Responsive image">
                </div>
               <div class="col-lg-6 col-md-12">
                    <div class="register-form">
                        <h2>Edit Profile </h2>
                        <form method="POST" action="{{url('update-profile')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                {{-- profile picture --}}
                            <div class="profile-pic">
                            <label class="-label" for="file">
                                <span class="glyphicon glyphicon-camera"></span>
                                <span>Change Image</span>
                            </label>
                            <input id="file" type="file" name="image" onchange="loadFile(event)"/>
                            <img src="{{$data['data']['profile_pic']}}" id="output" width="200" accept="image/*" />
                            </div>

                                {{-- profile picture end --}}
                                  <input type="hidden" class="form-control" name="id" placeholder="id" value="{{$data['data']['id']}}">
                                 <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Name" value="{{$data['data']['name']}}"required>
                            </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" value="{{$data['data']['email']}}" readonly>
                            </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>mobile</label>
                                <input type="text" class="form-control" name="mobile" placeholder="mobile" value="{{$data['data']['mobile']}}"required>
                            </div>
                            </div>
                           
                            <button type="submit">Update Profile</button>
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
var loadFile = function (event) {
  var image = document.getElementById("output");
  image.src = URL.createObjectURL(event.target.files[0]);
};

   </script>
  
   @endsection