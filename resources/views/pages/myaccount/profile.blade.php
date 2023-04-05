@extends('layouts.app')
@section('content')
@php
    $footerbanner=topOfferCommon('my_account_bottom');
@endphp
<style>
    @import url("https://fonts.googleapis.com/css?family=PT+Sans");
    @import url("https://fonts.googleapis.com/css?family=Oswald");

    h1 {
        font-family: "Oswald";
        text-transform: uppercase;
        color: #798796;
        font-size: 2.5rem;
    }

    h5 {
        font-family: "Oswald";
        text-transform: uppercase;
        color: #798796;
        font-size: 1.563rem;
    }

    .fullwidth {
        max-width: 100%;
        height: auto;
    }

    .-spacing-a {
        margin-top: 3.125rem;
    }

    .-spacing-b {
        margin-top: 1.875rem;
    }

    .-typo-copy {
        margin-bottom: 1.875rem;
        color: #595556;
        font-size: 1rem;
        font-family: "PT Sans";
    }

    .-typo-copy--blue {
        color: #798796;
    }

    .profile-image {
        overflow: hidden;
    }

    .profile-image:hover .edit-profile-image {
        opacity: 1;
    }

    .edit-profile-image {
        width: auto;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0.9375rem;
        right: 0.9375rem;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0.625rem;
        cursor: pointer;
        opacity: 0;
        background: linear-gradient(to bottom, rgba(231, 211, 116, 0.7) 0%, rgba(8, 184, 184, 0.7) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#b3e7d374", endColorstr="#b308b8b8", GradientType=0);
        transition: all 0.2s ease-in-out;
    }

    .edit-profile-image__information {
        color: #FFF;
        font-size: 2rem;
    }

    .edit-profile-image__label {
        margin-left: 0.5rem;
        display: inline-block;
        font-family: "PT Sans";
    }

    .btn {
        border: none;
        background: #FFF;
        border-radius: 0;
        padding: 0.875rem 0.625rem;
        cursor: pointer;
    }

    .btn__label {
        font-family: "PT Sans";
        margin-left: 0.5rem;
    }

    .btn--green {
        background: #08b8b8;
        color: #FFF;
    }
</style>
<section class="main-container col2-left-layout">
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
                            <div class="col-md-4">
                                <div class="profile-image">
                                    <img src="{{$data['data']['profile_pic']}}" class="fullwidth" />
                                    <div class="edit-profile-image">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
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
                                        <a href="{{url('edit-profile')}}" style="text-decoration: none;"> <button
                                                class="btn btn--green">
                                                <span class="btn__icon fa fa-pencil"></span>
                                                <span class="btn__label">Edit Profile</span>
                                            </button></a>

                                    </div>
                                    <button type="button" data-toggle="modal"
                                        onclick="$('#myModalChangePassword').modal('show');" class="btn btn--green">
                                        <span>Change Password</span></button>
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
</section>

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
                        <input type="password" id="old_password" name="old_password" class="form-control"
                            placeholder="Password" required>
                    </div>
                    <div class="mmc5c">
                        <label>password</label>
                        <input type="password" id="new_password" name="new_password" class="form-control"
                            placeholder="Password" required>
                        <span><i class="fa fa-eye-slash"></i></span>
                    </div>
                    <div class="mmc5c">
                        <label>conform password</label>
                        <input type="password" id="conform_password" name="conform_password" class="form-control"
                            placeholder="conform Password" required>
                        <span><i class="fa fa-eye-slash"></i></span>
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
@endsection