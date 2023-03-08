<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- Link of CSS files -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/rangeSlider.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/countrySelect.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/define.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <title>Feather And Fins</title>

        <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
        @yield('style')

      
    </head>
    <body>
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

        <div class="pre-loader">
            <div id="logo-loader"></div>
    </div>

		@include('layouts.header')

        @yield('content')

        @include('layouts.footer')

         <!-- Link of JS files -->
         <script src="{{asset('assets/js/jquery.min.js')}}"></script>
         <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
         <script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
         <script src="{{asset('assets/js/meanmenu.min.js')}}"></script>
         <script src="{{asset('assets/js/appear.min.js')}}"></script>
         <script src="{{asset('assets/js/countrySelect.min.js')}}"></script>
         <script src="{{asset('assets/js/odometer.min.js')}}"></script>
         <script src="{{asset('assets/js/loopcounter.js')}}"></script>
         <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
         <script src="{{asset('assets/js/rangeSlider.min.js')}}"></script>
         <script src="{{asset('assets/js/slick.min.js')}}"></script>
         <script src="{{asset('assets/js/form-validator.min.js')}}"></script>
         <script src="{{asset('assets/js/contact-form-script.js')}}"></script>
         <script src="{{asset('assets/js/ajaxchimp.min.js')}}"></script>
         <script src="{{asset('assets/js/main.js')}}"></script>
         <script src="{{asset('assets/js/define.js')}}"></script>

         <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

       <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/63d91194474251287910a54b/1go3upc0o';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
       <!--End of Tawk.to Script-->
                
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
         @yield('script')
     </body>
 </html>