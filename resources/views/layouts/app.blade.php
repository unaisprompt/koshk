<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <!-- Favicons Icon -->
    <link rel="icon" href="#" type="image/x-icon">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Gift City</title>
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/simple-line-icons.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.bxslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mobile-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/revslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/define.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/developer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/newstyle.css') }}">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
        rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="cms-index-index cms-home-page home">
    <div id="page">

        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')

    </div>

    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/revslider.js') }}"></script>
    <script src="{{ asset('assets/js/common.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mobile-menu.min.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/developer.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        jQuery(document).ready(function() {
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 1170,
                startheight: 310,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,

                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });

        function hasScrolled() {
            var st = $(this).scrollTop();

            // Make sure they scroll more than delta
            if (Math.abs(lastScrollTop - st) <= delta)
                return;

            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight) {
                // Scroll Down
                $('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if (st + $(window).height() < $(document).height()) {
                    $('header').removeClass('nav-up').addClass('nav-down');
                }
            }

            lastScrollTop = st;
        }





        jQuery(document).ready(($) => {
            $('.quantity').on('click', '.plus', function(e) {
                let $input = $(this).prev('input.qty');
                let val = parseInt($input.val());
                $input.val(val + 1).change();
            });

            $('.quantity').on('click', '.minus',
                function(e) {
                    let $input = $(this).next('input.qty');
                    var val = parseInt($input.val());
                    if (val > 0) {
                        $input.val(val - 1).change();
                    }
                });
        });




        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })



        // $(document).ready(function(){
        //   $(".openModal").click(function(){
        //     $("#myModal").show();
        //   });
        //   $(".close").click(function(){
        //     $("#myModal").hide();
        //   });
        // });





        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementsByClassName("openModal");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn[0].onclick = function() {
            modal.style.display = "block";
        };

        btn[1].onclick = function() {
            modal.style.display = "block";
        };

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        };

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };







        /*
        Credits:
        https://github.com/marcaube/bootstrap-magnify
        */


        ! function($) {

            "use strict"; // jshint ;_;


            /* MAGNIFY PUBLIC CLASS DEFINITION
             * =============================== */

            var Magnify = function(element, options) {
                this.init('magnify', element, options)
            }

            Magnify.prototype = {

                constructor: Magnify

                    ,
                init: function(type, element, options) {
                        var event = 'mousemove',
                            eventOut = 'mouseleave';

                        this.type = type
                        this.$element = $(element)
                        this.options = this.getOptions(options)
                        this.nativeWidth = 0
                        this.nativeHeight = 0

                        this.$element.wrap('<div class="magnify" \>');
                        this.$element.parent('.magnify').append('<div class="magnify-large" \>');
                        this.$element.siblings(".magnify-large").css("background", "url('" + this.$element.attr("src") +
                            "') no-repeat");

                        this.$element.parent('.magnify').on(event + '.' + this.type, $.proxy(this.check, this));
                        this.$element.parent('.magnify').on(eventOut + '.' + this.type, $.proxy(this.check, this));
                    }

                    ,
                getOptions: function(options) {
                        options = $.extend({}, $.fn[this.type].defaults, options, this.$element.data())

                        if (options.delay && typeof options.delay == 'number') {
                            options.delay = {
                                show: options.delay,
                                hide: options.delay
                            }
                        }

                        return options
                    }

                    ,
                check: function(e) {
                    var container = $(e.currentTarget);
                    var self = container.children('img');
                    var mag = container.children(".magnify-large");

                    // Get the native dimensions of the image
                    if (!this.nativeWidth && !this.nativeHeight) {
                        var image = new Image();
                        image.src = self.attr("src");

                        this.nativeWidth = image.width;
                        this.nativeHeight = image.height;

                    } else {

                        var magnifyOffset = container.offset();
                        var mx = e.pageX - magnifyOffset.left;
                        var my = e.pageY - magnifyOffset.top;

                        if (mx < container.width() && my < container.height() && mx > 0 && my > 0) {
                            mag.fadeIn(100);
                        } else {
                            mag.fadeOut(100);
                        }

                        if (mag.is(":visible")) {
                            var rx = Math.round(mx / container.width() * this.nativeWidth - mag.width() / 2) * -1;
                            var ry = Math.round(my / container.height() * this.nativeHeight - mag.height() / 2) * -
                                1;
                            var bgp = rx + "px " + ry + "px";

                            var px = mx - mag.width() / 2;
                            var py = my - mag.height() / 2;

                            mag.css({
                                left: px,
                                top: py,
                                backgroundPosition: bgp
                            });
                        }
                    }

                }
            }


            /* MAGNIFY PLUGIN DEFINITION
             * ========================= */

            $.fn.magnify = function(option) {
                return this.each(function() {
                    var $this = $(this),
                        data = $this.data('magnify'),
                        options = typeof option == 'object' && option
                    if (!data) $this.data('tooltip', (data = new Magnify(this, options)))
                    if (typeof option == 'string') data[option]()
                })
            }

            $.fn.magnify.Constructor = Magnify

            $.fn.magnify.defaults = {
                delay: 0
            }


            /* MAGNIFY DATA-API
             * ================ */

            $(window).on('load', function() {
                $('[data-toggle="magnify"]').each(function() {
                    var $mag = $(this);
                    $mag.magnify()
                })
            })

        }(window.jQuery);
    </script>



    <script type="text/javascript">
        $(document).ready(function() {
            //Fade in delay for the background overlay (control timing here)
            $("#bkgOverlay").delay(2800).fadeIn(400);
            //Fade in delay for the popup (control timing here)
            $("#delayedPopup").delay(3000).fadeIn(400);

            //Hide dialouge and background when the user clicks the close button
            $("#btnClose").click(function(e) {
                HideDialog();
                e.preventDefault();
            });
        });
        //Controls how the modal popup is closed with the close button
        function HideDialog() {
            $("#bkgOverlay").fadeOut(400);
            $("#delayedPopup").fadeOut(300);




            $(function() {
                $('[data-toggle="popover"]').popover({
                    trigger: "hover"
                })
            })
        }
    </script>
    <script>
        $(window).on('load', function() {
            $(".pre-loader").delay(2000).addClass("hidded");
        })
        //                   $( document ).ready(function() {
        // $(".pre-loader").delay(2000).addClass("hidded");
        //   });
        function newsLetter() {

            $('.pre-loader').removeClass("hidded");
            var email = $("#email_news").val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: '{{ url('addNewsLetter') }}',
                data: {
                    email: email,

                },
                cache: false,
                success: function(response) {
                    console.log(response);
                    $(".pre-loader").delay(2000).addClass("hidded");
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
                error: function(xhr) {
                    $(".pre-loader").delay(2000).addClass("hidded");
                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
            });
        };
    </script>
    <script>
        $(document).ready(function() {
            if (jQuery('.mega-menu-category').is(':visible')) {
                jQuery('.mega-menu-category').slideUp();
            }
        });
    </script>
    <script>
        function register() {
            $('.pre-loader').removeClass("hidded");
            let name = $('#name').val();
            let email = $('#email_reg').val();
            let password = $('#password_reg').val();
            let c_password = $('#c_password').val();
            let mobile = $('#mobile').val();
            $.ajax({
                url: "{{ url('register-post') }}",
                type: 'post',
                data: $('#register_form').serialize(),
                dataType: 'json',
                success: function(response) {
                    $(".pre-loader").delay(2000).addClass("hidded");
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
                error: function(xhr) {
                    $(".pre-loader").delay(2000).addClass("hidded");
                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
            });
        }
    </script>
    <script>
        function verifyOtp() {
            $('.pre-loader').removeClass("hidded");
            let otp = $('#otp_verify_otp').val();
            let email = $('#email_reg').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('email-verify') }}",
                type: 'post',
                data: {
                    otp: otp,
                    email: email
                },
                dataType: 'json',
                success: function(response) {
                    $(".pre-loader").delay(2000).addClass("hidded");
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
                error: function(xhr) {
                    $(".pre-loader").delay(2000).addClass("hidded");
                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
            });
        }
    </script>

    <script>
        function loginUser() {
            $('.pre-loader').removeClass("hidded");
            let email = $('#email_signup').val();
            let password = $('#password').val();
            $.ajax({
                url: "{{ url('login-post') }}",
                type: 'post',
                data: $('#login_form').serialize(),
                dataType: 'json',
                success: function(response) {
                    $(".pre-loader").delay(2000).addClass("hidded");
                    if (response.status == 1) {
                        console.log(response);
                        Swal.fire("Success!", response.message, "success").then(() => {
                            if (response.data == 1) {
                                $('#myModalsignin').modal('hide');
                                window.location.href = "{{ url('user-password-new') }}";
                            } else {
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
                error: function(xhr) {
                    $(".pre-loader").delay(2000).addClass("hidded");
                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
            });
        }
    </script>
    <script>
        function loginUserPopup() {
            $('.pre-loader').removeClass("hidded");
            let email = $('#email').val();
            let password = $('#password').val();
            $.ajax({
                url: "{{ url('login-post') }}",
                type: 'post',
                data: $('#first_popup').serialize(),
                dataType: 'json',
                success: function(response) {
                    $(".pre-loader").delay(2000).addClass("hidded");
                    if (response.status == 1) {
                        Swal.fire("Success!", response.message, "success").then(() => {
                            if (response.data == 1) {
                                $('#myModalsignin').modal('hide');
                                window.location.href = "{{ url('user-password-new') }}";
                            } else {
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
                error: function(xhr) {
                    $(".pre-loader").delay(2000).addClass("hidded");
                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
            });
        }
    </script>
    <script>
        function ForgetPassword() {
            $('.pre-loader').removeClass("hidded");
            let email = $('#otp_verify_otp').val();
            $.ajax({
                url: "{{ url('forget-post') }}",
                type: 'post',
                data: $('#forget_password').serialize(),
                dataType: 'json',
                success: function(response) {
                    $(".pre-loader").delay(2000).addClass("hidded");
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
                error: function(xhr) {
                    $(".pre-loader").delay(2000).addClass("hidded");
                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
            });
        }
    </script>
    <script>
        function ForgetOtp() {
            $('.pre-loader').removeClass("hidded");
            let otp = $('#otp_for').val();
            let email = $('#email').val();
            $.ajax({
                url: "{{ url('verify-otp') }}",
                type: 'post',
                data: $('#forget_otp').serialize(),
                dataType: 'json',
                success: function(response) {
                    $(".pre-loader").delay(2000).addClass("hidded");
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
                error: function(xhr) {
                    $(".pre-loader").delay(2000).addClass("hidded");
                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
            });
        }
    </script>
    <script>
        function newPassword() {
            $('.pre-loader').removeClass("hidded");
            let new_pass = $('#new_password').val();
            $.ajax({
                url: "{{ url('password-reset') }}",
                type: 'post',
                data: $('#change_password').serialize(),
                dataType: 'json',
                success: function(response) {
                    $(".pre-loader").delay(2000).addClass("hidded");
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
                error: function(xhr) {
                    $(".pre-loader").delay(2000).addClass("hidded");
                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
            });
        }
    </script>
    <script>
        $('.add-to-wishlist').click(function(e) {
            e.preventDefault();
            // $('#review_button').prop('disabled', true);
            $.ajax({
                type: "POST",
                url: '{{ url('wishlist-add') }}',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    product_id: $(this).data('cpidw')
                },
                success: function(response) {
                    if (response.status == 1) {
                        $("#my_btn_heart").css({
                            'color': 'red'
                        });
                        Toastify({
                            text: "Product Added",
                            className: "info",
                            close: true,
                            style: {
                                background: "#1cad6a",
                            }
                        }).showToast();
                    } else {
                        Toastify({
                            text: 'product already added',
                            className: "info",
                            close: true,
                            style: {
                                background: "#e11414",
                            }
                        }).showToast();
                    }
                }
            });
        });
    </script>

    @yield('script')
</body>

</html>
