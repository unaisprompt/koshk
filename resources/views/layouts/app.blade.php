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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

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
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <style>
        .box-hover .add-to-links li a.link-wishlist.active {
            background: #fdd922;
            border-radius: 100px;
            color: #333;
        }

        .box-hover .add-to-links li a.link-wishlist.active:after {
            background: #fdd922;
        }

        #myModalsignin {
            z-index: 2999;
        }

        .swal2-container {
            z-index: 3001 !important;
        }

        a:focus {
            outline: none !important;
        }
        .loading {
 --speed-of-animation: 0.9s;
 --gap: 6px;
 --first-color: #4c86f9;
 --second-color: #49a84c;
 --third-color: #f6bb02;
 --fourth-color: #f6bb02;
 --fifth-color: #2196f3;
 display: flex;
 justify-content: center;
 align-items: center;
 width: 100px;
 gap: 6px;
 height: 100px;
}

.loading span {
 width: 4px;
 height: 50px;
 background: var(--first-color);
 animation: scale var(--speed-of-animation) ease-in-out infinite;
}

.loading span:nth-child(2) {
 background: var(--second-color);
 animation-delay: -0.8s;
}

.loading span:nth-child(3) {
 background: var(--third-color);
 animation-delay: -0.7s;
}

.loading span:nth-child(4) {
 background: var(--fourth-color);
 animation-delay: -0.6s;
}

.loading span:nth-child(5) {
 background: var(--fifth-color);
 animation-delay: -0.5s;
}

@keyframes scale {
 0%, 40%, 100% {
  transform: scaleY(0.05);
 }

 20% {
  transform: scaleY(1);
 }
}
.pre-loader {
  position: fixed;
  display: flex;
  justify-content: center;
  align-items: center;
  left: 0;
  top: 0;
  background-color: rgba(255, 255, 255, 0.98);
  z-index: 101;
  height: 100%;
  width: 100%;
}
.pre-loader.hidded {
  display: none;
}

    .yellow-bg {
      background: yellow !important;
    }
    
    .red-bg {
      background: red !important;
    }
    
    .green-bg {
      background: green !important;
    }

    </style>
    <script>
        $(document).bind("contextmenu", function(e) {
            //  return false;
        });
    </script>
</head>

<body class="cms-index-index cms-home-page home">
    <div id="page">
        <div class="pre-loader hidded" style="z-index: 3002">
<div class="loading">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</div>
        </div>
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
        <div id="myModal" class="modal">
            <div class="modal-content modal-pad">
                <div class="button-close" onclick="$('#myModal').modal('hide');">
                    <span class="close">&times;</span>
                </div>
                <div class="product-view">
                    <div class="product-essential">
                        <form action="#" method="post" id="product_addtocart_form">
                            <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                            <div class="product-img-box col-lg-5 col-sm-5 col-xs-12">
                                <div class="new-label new-top-left"> New </div>
                                <div class="product-image">
                                    <div class="product-full mag"> <img data-toggle="magnify" src=""
                                            alt="product-image"> </div>

                                </div>
                                <!-- end: more-images -->

                                <div class="add-to-box">
                                    <div class="add-to-cart">
                                        <button onclick="addCart($(this).data('details'))" class="button btn-cart"
                                            title="Add to Cart" type="button" data-details=""
                                            id="modal-add-to-cart">Add to Cart</button>
                                        @if (session()->get('user_id'))
                                            <button data-details="" onclick="checkout($(this).data('details')); "
                                                class="button btn-buy" title="Add to Cart" type="button"
                                                id="modal-add-buy-now">Buy Now</button>
                                        @else
                                            <button data-details="" onclick="$('#myModalsignin').modal('show')"
                                                class="button btn-buy" title="Add to Cart" type="button"
                                                id="modal-add-buy-now">Buy Now</button>
                                        @endif

                                    </div>

                                </div>
                                <ul class="add-to-links">
                                    <li><a class="link-compare" href="#"
                                            onclick="$('#myModal').modal('hide');"><span>Continue Shopping</span></a>
                                    </li>
                                    @if (session()->get('user_id'))
                                        <li> <a class="link-wishlist" data-id="" href="#"
                                                onclick="addWishlist($(this).data('id'),$(this))"><span>Add to
                                                    Wishlist</span></a></li>
                                    @else
                                        <li> <a class="link-wishlist" data-id="" href="#"
                                                onclick="event.preventDefault();$('#myModalsignin').modal('show')"><span>Add
                                                    to
                                                    Wishlist</span></a></li>
                                    @endif
                                </ul>
                            </div>
                            <div class="product-shop col-lg- col-sm-7 col-xs-12">

                                <div class="brand"></div>
                                <div class="product-name">
                                    <h1></h1>
                                </div>
                                <div class="rating">
                                    <div class="star-rating">
                                        <span style="width:0%"></span>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <div class="price-box">
                                        <p class="availability in-stock"><span></span></p>
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span
                                                id="product-price-modal" class="price"> </span> </p>
                                        <p class="old-price"> <span class="price-label">Regular Price:</span>
                                            <span class="price" id="product-old-price-modal"></span>
                                        </p>

                                    </div>
                                </div>

                                <div class="list">
                                    <div class="heading">Highlights</div>
                                    <div class="points" id="modal-highlights">
                                    </div>
                                </div>
                                <div class="list">
                                    <div class="heading">Description</div>
                                    <div class="points" id="modal-description">
                                    </div>
                                    <div class="points" id="modal-detail-description">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                    <!-- similar products -->

                    <!-- End similar products -->

                </div>
            </div>
        </div>
    </div>


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
        function minicart() {
            var setting = {
                url: '{{ url('/cart_ajax') }}',
                dataType: 'json',
                type: 'get',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                success: function(response) {
                    $('#cart-sidebar').empty();
                    response.data.forEach((item) => {
                        let html = ` <li class="item first">
                                                                                    <div class="item-inner"> <a class="product-image" title="${item.product_name}" href="#">
                                                                                        <img alt="${item.product_name}" src="${item.image_url}"> </a>
                                                                                      <div class="product-details">
                                                                                        <div class="access">
                                                                                            @if (Session::has('user_id'))
                                                                                            <a class="btn-remove1" title="Remove This Item" href="{{ url('delete-cart') }}/${item.id}">Remove</a>
                                                                                            @else
                                                                                            <a class="btn-remove1" title="Remove This Item" href="{{ url('delete-cart') }}/${item.product_id}">Remove</a>
                                                                                            @endif
                                                                                        </div>
                                                                                        <p class="product-name"><a href="#">${item.product_name}</a>
                                                                                        </p>
                                                                                        <!-- <div class="count-number">
                                                                                          <form id='myform' method='POST' class='quantity' action='#'>
                                                                                            <input type='button' value='-' class='qtyminus minus' field='quantity' />
                                                                                            <input type='text' name='quantity' value='0' class='qty' />
                                                                                            <input type='button' value='+' class='qtyplus plus' field='quantity' />
                                                                                          </form>
                                                                                        </div> -->
                                                                                        ${item.qty} x <span class="price">AED ${item.price}</span>

                                                                                      </div>
                                                                                    </div>
                                                                                  </li>`;
                        $('#cart-sidebar').append(html);
                    });
                    // let totalqty = response.data.map(item => item.qty).reduce((partialSum, a) => parseInt(
                    //     partialSum) + parseInt(a), 0);
                    let totalqty = response.data.length;
                    $('#cart_count').html(totalqty);
                    localStorage.setItem("cartupdate", 0);
                },
                error: function(xhr) {

                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
            };
            $.ajax(setting);
        }
        $(document).ready(function() {
            minicart();
            setInterval(function() {
                if (localStorage.getItem('cartupdate') == 1) {
                    minicart();
                }
            }, 3000);
        })
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
        // $(window).on('load', function() {
        //     $(".pre-loader").delay(2000).addClass("hidded");
        // })
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
                            timeLeft = 30;
                            timerId = setInterval(countdowntime, 1000);
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
                       // console.log(response);
                        Swal.fire("Success!", response.message, "success").then(() => {
                             $('#myModalsignin').modal('hide');
                            if (response.data == 1) {
                                $('#myModalsignin').modal('hide');
                                window.location.href = "{{ url('user-password-new') }}";
                            } else {
                                location.reload();
                            }
                        });
                        document.getElementById("form").reset();
                        $('#refresh').click();
                    }else if(response.status == 2){
                        Swal.fire("Failed!", response.message, "error");
                        if (response.hasOwnProperty('error_list')) {
                            location.reload();
                            for (x in response.error_list) {
                                $('#error_' + x).html(response.error_list[x])
                            }
                        }
                        $('#email_reg').val()==response.email;
                        $('#myModalsigninotp').modal('show');
                        $('#myModalsignin').modal('hide');
                    }
                    else{
                      //  response.status == 0

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
                            timeLeft = 30;
                            timerId = setInterval(countdowntime, 1000);
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
        function ResendOtp() {
            $('.pre-loader').removeClass("hidded");

            $.ajax({
                url: "{{ url('resent-forget-otp') }}",
                type: 'post',
                // data: $('#change_password').serialize(),
                dataType: 'json',
                success: function(response) {
                    $(".pre-loader").delay(2000).addClass("hidded");
                    if (response.status == 1) {
                        Swal.fire("Success!", response.message, "success").then(() => {
                            timeLeft = 30;
                            timerId = setInterval(countdown, 1000);
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
        function ResendEmailOtp() {
            $('.pre-loader').removeClass("hidded");

            $.ajax({
                url: "{{ url('resent-email-otp') }}",
                type: 'post',
                data: $('#register_form').serialize(),
                dataType: 'json',
                success: function(response) {
                    $(".pre-loader").delay(2000).addClass("hidded");
                    if (response.status == 1) {
                        Swal.fire("Success!", response.message, "success").then(() => {
                            timeLeft = 30;
                            timerId = setInterval(countdowntime, 1000);
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
        /*   $('.add-to-wishlist').click(function(e) {
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
                                                                    }); */
    </script>

    <script>
        // function setProductDetails(data) {
        //     console.log(data);
        //     $('#myModal').modal('show');
        //     $('#myModal').find('img').attr('src', data.productimage.image_url);
        //     $('#myModal').find('.brand').html(data.brand_name);
        //     $('#myModal').find('.product-name').find('h1').html(data.product_name);
        //     var ratting = 0;
        //     if (data.avg_ratting > 0) {
        //         ratting = data.avg_ratting;
        //     }
        //     var totalStock = data.stocks.map((item) => item.quantity).reduce((a, b) => a + b, 0);
        //     $('#myModal').find('.star-rating').find('span').css('width', `${ratting*2*10}%`);
        //     $('#myModal').find('.star-rating').find('span').html(
        //         `Rated <strong class="rating">${ratting}</strong> out of 5`);
        //      $('#myModal').find('.in-stock').find('span').html(`${totalStock} in stock`);
        //     $('#myModal').find('#product-price-modal').html(`AED ${data.discounted_price}`);
        //     $('#myModal').find('#product-old-price-modal').html(`AED ${data.product_price}`);
        //     $('#myModal').find('#modal-description').html(data.description);
        //     $('#myModal').find('#modal-detail-description').html(data.detail_description);
        //     $('#myModal').find('#modal-highlights').html(data.highlights);
        //     $('#myModal').find('.link-wishlist').data('id', data.id);
        //     $('#modal-add-to-cart').data('details', data);
        //     $('#modal-add-buy-now').data('details', data);
        // }
      function setProductDetails(data) {
    console.log(data);
    $('#myModal').modal('show');
    $('#myModal').find('img').attr('src', data.productimage.image_url);
    $('#myModal').find('.brand').html(data.brand_name);
    $('#myModal').find('.product-name').find('h1').html(data.product_name);
    
    var rating = 0;
    if (data.avg_rating > 0) {
        rating = data.avg_rating;
    }
    
    var totalStock = data.stocks.map(item => item.quantity).reduce((a, b) => a + b, 0);
    var stockElement = $('#myModal').find('.in-stock').find('span');
    stockElement.html(`${totalStock} in stock`);
    
    if (totalStock < 5) {
        stockElement.addClass('red-bg');
    } else if (totalStock < 10) {
        stockElement.addClass('yellow-bg');
    } else {
        stockElement.addClass('green-bg');
    }
    
    $('#myModal').find('.star-rating').find('span').css('width', `${rating * 2 * 10}%`);
    $('#myModal').find('.star-rating').find('span').html(`Rated <strong class="rating">${rating}</strong> out of 5`);
    $('#myModal').find('#product-price-modal').html(`AED ${data.discounted_price}`);
    $('#myModal').find('#product-old-price-modal').html(`AED ${data.product_price}`);
    $('#myModal').find('#modal-description').html(data.description);
    $('#myModal').find('#modal-detail-description').html(data.detail_description);
    $('#myModal').find('#modal-highlights').html(data.highlights);
    $('#myModal').find('.link-wishlist').data('id', data.id);
    $('#modal-add-to-cart').data('details', data);
    $('#modal-add-buy-now').data('details', data);
}

    </script>
    <script>
        function addCart(product, qty = 1) {
            if (product.is_variation == 1) {
                window.location = '{{ url('product-detail') }}?id=' + product.id;
                return;
            }
            var tax = 0;
            if (product.tax_type == "amount") {
                tax = product.tax;
            } else {
                tax = product.discounted_price * product.tax / 100;
            }
            var stocks = product.stocks.map(item => item.quantity).reduce((a, b) => a + b, 0);
            if (!(stocks > 0)) {
                Toastify({
                    text: "Not enough stocks",
                    className: "info",
                    close: true,
                    style: {
                        background: "red",
                    }
                }).showToast();
                return;
            }
            var setting = {
                url: '{{ url('/add-to-cart') }}',
                dataType: 'json',
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    product_id: product.id,
                    product_name: product.product_name,
                    qty: qty,
                    price: product.discounted_price,
                    shipping_cost: product.shipping_cost,
                    tax: tax,
                    image: product.productimage.image_url
                },

                success: function(response) {
                    // console.log(response);

                    if (response.status == 1) {
                        Toastify({
                            text: "Cart Item Added",
                            className: "info",
                            close: true,
                            style: {
                                background: "#1cad6a",
                            }
                        }).showToast();
                        localStorage.setItem("cartupdate", 1);
                    }

                },
                error: function(xhr) {

                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
            };
            $.ajax(setting);
        }
    </script>
    <script>
        function checkout(product) {
            if (product.is_variation == 1) {
                window.location = '{{ url('product-detail') }}?id=' + product.id;
                return;
            }
            var tax = 0;
            if (product.tax_type == "amount") {
                tax = product.tax;
            } else {
                tax = product.discounted_price * product.tax / 100;
            }
            var setting = {
                url: '{{ url('/add-to-cart') }}',
                dataType: 'json',
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    product_id: product.id,
                    product_name: product.product_name,
                    qty: 1,
                    price: product.discounted_price,
                    shipping_cost: product.shipping_cost,
                    tax: tax,
                    image: product.productimage.image_url
                },

                success: function(response) {
                    // console.log(response);

                    if (response.status == 1) {
                        Toastify({
                            text: "Cart Item Added",
                            className: "info",
                            close: true,
                            style: {
                                background: "#1cad6a",
                            }
                        }).showToast();
                        localStorage.setItem("cartupdate", 1);
                        window.location = "{{ url('checkout') }}";
                    }

                },
                error: function(xhr) {

                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
            };
            $.ajax(setting);
        }
    </script>
    <script>
        var timeLeft = 0;
        var elem = document.getElementById('some_div');
        var timerId = setInterval(countdown, 1000);

        function countdown() {
            if (timeLeft == -1) {
                clearTimeout(timerId);
                $('#resend_btn_otp').show();
            } else {
                elem.innerHTML = timeLeft + ' seconds remaining';
                timeLeft--;
                $('#resend_btn_otp').hide();
            }
        }

        // function doSomething() {
        //     alert("Hi");
        // }
    </script>

    <script>
        var timeLeft = 0;
        var elem = document.getElementById('some_div_time');
        var timerId = setInterval(countdowntime, 1000);

        function countdowntime() {
            if (timeLeft == -1) {
                clearTimeout(timerId);
                $('#resend_btn').show();
            } else {
                elem.innerHTML = timeLeft + ' seconds remaining';
                timeLeft--;
                $('#resend_btn').hide();
            }
        }

        // function doSomething() {
        //     alert("Hi");
        // }
    </script>
    @yield('script')
</body>

</html>
