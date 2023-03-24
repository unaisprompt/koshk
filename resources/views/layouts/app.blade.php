
<html lang="en">

<head>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

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
     <!-- <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
    rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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
        <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/revslider.js')}}"></script>
        <script src="{{asset('assets/js/common.js')}}"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.mobile-menu.min.js')}}"></script>
        <script src="{{asset('assets/js/countdown.js')}}"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

         @yield('script')                
            <script> 
function newsLetter() {
            var email = $("#email").val();
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
         @yield('script')
     </body>
 </html>