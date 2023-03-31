@extends('layouts.app')

   @section('content')
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
  <section class="main-container col2-left-layout">
            <div class="container">
                <div class="row">



                    <div class="col-sm-9 col-sm-push-3">
                        <article class="col-main">
                            <div class="page-title">
                                <h2>My profile</h2>
                            </div>
                            <form method="POST" action="{{url('update-profile')}}" enctype="multipart/form-data">
                              @csrf
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
                            <div class="person-cont">
                            <div class="person-background">
                            <div class="person-info">
                                <div class="person-image">
                                    {{-- <div class="person-defaultImage">
                                          <img src="{{$data['data']['profile_pic']}}" >
                                           
                                    </div> --}}
                                </div>
                                <div class="person-infoHolder">
                                    <a class="person-editProfile" href="{{url('edit-profile')}}">Edit Profile </a>
                                    <div class="person-info">
                                        <div class="person-name">
                                          



                                          <div class="form-box">
                                          
                                            
                                                  <input type="hidden" class="form-control" name="id" placeholder="id" value="{{$data['data']['id']}}">
                                              <div class="form-group">
                                                <label for="name">Name</label>
                                                <input class="form-control" id="name" type="text" name="name" placeholder="Name" value="{{$data['data']['name']}}" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="email">Email</label>
                                                <input class="form-control" id="email" name="email" placeholder="Email" value="{{$data['data']['email']}}" readonly>
                                              </div>
                                              <div class="form-group">
                                                <label for="message">Message</label>
                                               <input type="text" class="form-control" name="mobile" placeholder="mobile" value="{{$data['data']['mobile']}}"required>
                                              </div>
                                              <input class="btn btn-primary" type="submit" value="Submit" />
                                              </div>

                                          </div>



                                        <div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                            </form>
                  </article>
                        <!--	///*///======    End article  ========= //*/// -->
                        <section class="banner-row irf">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-12 col-md-12">
                                        <div class="position-relative">
                                            <!-- Background -->
                                            <img class="img-fluid hover-zoom" src="{{asset('assets\images\popup.jpeg')}}" alt="">
                                            <!-- Body -->

                                        </div>
                                    </div>


                                </div>
                            </div>
                        </section>
                    </div>


@include('pages.myaccount.sidebar')
                

                </div>
            </div>
        </section>
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