
<html lang="en">

<head>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons Icon -->
  <link rel="icon" href="#" type="image/x-icon">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>Gift City</title>
  <!-- Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- CSS Style -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/simple-line-icons.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.theme.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.bxslider.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.mobile-menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" media="all">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/revslider.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/developer.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/newstyle.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/define.css')}}">
  {{-- please dont add/modify script link . if you facing any problem please contact --}}
     {{-- <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script> --}}
  {{-- please dont add/modify script link . if you facing any problem please contact --}}

  {{-- please dont add/modify script link . if you facing any problem please contact --}}
  {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}

  <!-- Google Fonts -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
    integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
   crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
    integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
    rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
   {{-- please dont add/modify script link . if you facing any problem please contact --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}

    <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/revslider.js')}}"></script>
    <!-- <script src="{{asset('assets/js/common.js')}}"></script> -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.mobile-menu.min.js')}}"></script>
    <script src="{{asset('assets/js/countdown.js')}}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="cms-index-index cms-home-page home">
    <div id="page">
        {{-- <div class="pre-loader">
            <svg class="gegga">
                <defs>
                    <filter id="gegga">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 20 -10"
                            result="inreGegga" />
                        <feComposite in="SourceGraphic" in2="inreGegga" operator="atop" />
                    </filter>
                </defs>
            </svg>
            <svg class="snurra" width="200" height="200" viewBox="0 0 0 0">
                <defs>
                    <linearGradient id="linjärGradient">
                        <stop class="stopp1" offset="0" />
                        <stop class="stopp2" offset="1" />
                    </linearGradient>
                    <linearGradient y2="160" x2="160" y1="40" x1="40" gradientUnits="userSpaceOnUse" id="gradient"
                        xlink:href="#linjärGradient" />
                </defs>
                <path class="halvan"
                    d="m 164,100 c 0,-35.346224 -28.65378,-64 -64,-64 -35.346224,0 -64,28.653776 -64,64 0,35.34622 28.653776,64 64,64 35.34622,0 64,-26.21502 64,-64 0,-37.784981 -26.92058,-64 -64,-64 -37.079421,0 -65.267479,26.922736 -64,64 1.267479,37.07726 26.703171,65.05317 64,64 37.29683,-1.05317 64,-64 64,-64" />
                <circle class="strecken" cx="100" cy="100" r="64" />
            </svg>
            <svg class="skugga" width="200" height="200" viewBox="0 0 200 200">
                <path class="halvan"
                    d="m 164,100 c 0,-35.346224 -28.65378,-64 -64,-64 -35.346224,0 -64,28.653776 -64,64 0,35.34622 28.653776,64 64,64 35.34622,0 64,-26.21502 64,-64 0,-37.784981 -26.92058,-64 -64,-64 -37.079421,0 -65.267479,26.922736 -64,64 1.267479,37.07726 26.703171,65.05317 64,64 37.29683,-1.05317 64,-64 64,-64" />
                <circle class="strecken" cx="100" cy="100" r="64" />
            </svg>
        </div> --}}



		@include('layouts.header')

        @yield('content')

        @include('layouts.footer')
    </div>
         <!-- Link of JS files -->

    <script src="{{asset('assets/js/common.js')}}"></script>

         @yield('script')
            <script>
function newsLetter() {
            var email = $("#email_news").val();
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
            $.ajax({
            type: "POST",
            url: '{{ url("addNewsLetter")}}',
            data: {
                    email: email,

            },
            cache: false,
            success: function (response) {
                console.log(response);
                    $(".preloader").hide();
                    if (response.status == 1) {
                        Swal.fire("Success!", response.message, "success").then(() => {


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
                error: function (xhr) {
                    $(".preloader").hide();
                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
            });
            };
</script>
<script>
        $(document).ready(function () {
          if (jQuery('.mega-menu-category').is(':visible')) {
            jQuery('.mega-menu-category').slideUp();
        }
           });
    </script>
    <script>
 function register()
   {
    let name=$('#name').val();
    let email=$('#email_reg').val();
    let password=$('#password_reg').val();
    let c_password=$('#c_password').val();
    let mobile = $('#mobile').val();
    $.ajax({
        url:"{{url('register-post')}}",
        type:'post',
        data:$('#register_form').serialize(),
        dataType:'json',
        success: function (response) {
                    $(".preloader").hide();
                    if (response.status == 1) {
                        Swal.fire("Success!", response.message, "success").then(() => {
                            $('#myModalsigninotp').modal('show');
                           $('#myModalsignup').modal('hide');
                           $('#myModalsignin').modal('hide');

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
                error: function (xhr) {
                    $(".preloader").hide();
                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
    });
   }
    </script>
    <script>
        function verifyOtp()
   {
    let otp=$('#otp_verify_otp').val();
    let email =$('#email_reg').val();
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    $.ajax({
        url:"{{route('email-verify')}}",
        type:'post',
         data: {
                    otp: otp,
                    email: email
            },
        dataType:'json',
        success: function (response) {
                    $(".preloader").hide();
                    if (response.status == 1) {
                        Swal.fire("Success!", response.message, "success").then(() => {
                             $('#myModalsignin').modal('show');
                            $('#myModalsigninotp').modal('hide');
                           $('#myModalsignup').modal('hide');

                     location.reload();
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
                error: function (xhr) {
                    $(".preloader").hide();
                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
    });
   }
        </script>

        <script>
        function loginUser()
   {
    let email=$('#email_signup').val();
    let password =$('#password').val();
    $.ajax({
        url:"{{url('login-post')}}",
        type:'post',
        data:$('#login_form').serialize(),
        dataType:'json',
        success: function (response) {
                    $(".preloader").hide();
                    if (response.status == 1) {
                        console.log(response);
                        Swal.fire("Success!", response.message, "success").then(() => {
                            if(response.data == 1){
                                $('#myModalsignin').modal('hide');
                         window.location.href = "{{url('user-password-new')}}";
                            }else{
                                location.reload();
                            }
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
            <script>
        function loginUserPopup()
   {
    let email=$('#email').val();
    let password =$('#password').val();
    $.ajax({
        url:"{{url('login-post')}}",
        type:'post',
        data:$('#first_popup').serialize(),
        dataType:'json',
        success: function (response) {
                    $(".preloader").hide();
                    if (response.status == 1) {
                        Swal.fire("Success!", response.message, "success").then(() => {
                        if(response.data == 1){
                                $('#myModalsignin').modal('hide');
                         window.location.href = "{{url('user-password-new')}}";
                            }else{
                                location.reload();
                            }
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
         <script>
function ForgetPassword()
   {
    let email=$('#otp_verify_otp').val();
    $.ajax({
        url:"{{url('forget-post')}}",
        type:'post',
        data:$('#forget_password').serialize(),
        dataType:'json',
        success: function (response) {
                    $(".preloader").hide();
                    if (response.status == 1) {
                        Swal.fire("Success!", response.message, "success").then(() => {
                        $('#myModalforgot').modal('hide');
                         $('#myModalsignin').modal('hide');
                         $('#myModalforgetotp').modal('show');
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
                 <script>
function ForgetOtp()
   {
     let otp=$('#otp_for').val();
    let email =$('#email').val();
    $.ajax({
        url:"{{url('verify-otp')}}",
        type:'post',
        data:$('#forget_otp').serialize(),
        dataType:'json',
        success: function (response) {
                    $(".preloader").hide();
                    if (response.status == 1) {
                        Swal.fire("Success!", response.message, "success").then(() => {
                        $('#myModalforgot').modal('hide');
                        $('#myModalchangepass').modal('show');
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
                error: function (xhr) {
                    $(".preloader").hide();
                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
    });
   }
        </script>
                  <script>
function newPassword()
   {
     let new_pass=$('#new_password').val();
    $.ajax({
        url:"{{url('password-reset')}}",
        type:'post',
        data:$('#change_password').serialize(),
        dataType:'json',
        success: function (response) {
                    $(".preloader").hide();
                    if (response.status == 1) {
                        Swal.fire("Success!", response.message, "success").then(() => {
                        $('#myModalchangepass').modal('hide');
                        $('myModalforgetotp').modal('hide');
                         location.reload();
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
                error: function (xhr) {
                    $(".preloader").hide();
                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
    });
   }
        </script>
        <script>
            jQuery(document).ready(($) => {
                    $('.quantity').on('click', '.plus', function(e) {
                        let $input = $(this).prev('input.qty');
                        let val = parseInt($input.val());
                        $input.val( val+1 ).change();
                    });
            
                    $('.quantity').on('click', '.minus', 
                        function(e) {
                        let $input = $(this).next('input.qty');
                        var val = parseInt($input.val());
                        if (val > 0) {
                            $input.val( val-1 ).change();
                        } 
                    });
                });
        </script>

         @yield('script')
     </body>
 </html>
