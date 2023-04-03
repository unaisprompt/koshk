@extends('layouts.app')

@section('content')
<!-- Main Container -->
<section class="main-container col2-left-layout">

    <div class="container">
        <div class="row">

            <div class="col-sm-9 col-sm-push-3">
                <div class="page-title">
                    <h2>Address</h2>
                </div>
                @foreach($data['data'] as $item)
                <div class="col-sm-8 col-lg-8">
                    <div class="uthssk">
                        <div class="pous1">
                            <h2>{{$item['first_name']}} {{$item['last_name']}}</h2>
                            <h4>{{$item['street_address']}}</h4>
                            <h4>City : {{$item['city']}}</h4>
                            <h4>Phone number : {{$item['mobile']}}</h4>
                            <h4>E-mail : {{$item['email']}}</h4>
                            <h4>Land mark : {{$item['landmark']}}</h4>
                            <!-- <small><b>Free delivery by Tomorrow, Dec 28</b></small>  
                                <h5><b>noon Fashion</b></h5>   -->
                        </div>
<div style="display:flex">
<div>
                             <a data-toggle="modal" data-toggle="tooltip"  data-id="{{ $item['id'] }}" data-first_name="{{ $item['first_name'] }}" data-last_name="{{ $item['last_name'] }}"
                         data-street_address="{{  $item['street_address'] }}" data-city="{{ $item['city']}}" data-mobile="{{$item['mobile']}}" data-email="{{$item['email']}}" 
                         data-landmark="{{$item['landmark']}}" onclick="$('#myModalAddAddressEdit').modal('show');" class=" edit-button" style="color:#000;"><i class="fa fa-edit"></i> Edit</a>
                        
                        </div>
                        <div style="padding: 3px; margin-left: 8px;">
                                                      <a onclick="Addressdelete($(this))" id="delete" class="remove" data-address_id="{{$item['id'] }}"><i class='fa fa-trash'></i></a> 

                        </div>
                         <div style="padding: 3px; margin-left: 8px;">
                            @if($item['primary']!= 1)
                                                      <a onclick="SetPrimaryAddress($(this))" data-address_id="{{$item['id'] }}"><i class="fa fa-check-circle" aria-hidden="true" style="color:#000;"></i></a> 
                              @else
                              <i class="fa fa-check-circle" aria-hidden="true" style="color:green;"></i>
                              @endif
                        </div>
</div>
                        
                       
                         {{-- <i class="fa fa-edit" onclick="AddressEdit({{$item['id']}})"aria-hidden="true"></i> --}}
                        <!-- ----------------modal------------------- -->
                    </div>
                </div>
                
                @endforeach
                <div class="modal fade in" id="myModalAddAddress" role="dialog" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header v5c"><button type="button" class="close"
                                    data-dismiss="modal">×</button></div>
                            <div class="modal-body">
                                <form id="address_add_form">
                                    @csrf

                                    <fieldset class="group-select">

                                        <ul>
                                            
                                            <li>
                                                <div class="customer-name">
                                                    <div class="input-box name-firstname"><label
                                                            for="billing:firstname">
                                                            First Name <span class="required">*</span>
                                                        </label><br><input type="text" id="first_name_billing" name="first_name"
                                                            title="First Name" class="input-text required-entry"
                                                            value="">
                                                    </div>
                                                    <div class="input-box name-lastname"><label for="billing_lastname">
                                                            Last
                                                            Name <span class="required">*</span> </label><br><input
                                                            type="text" id="last_name_billing" name="last_name"
                                                            title="Last Name" class="input-text required-entry"
                                                            value="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li><label for="billing_street1">Street Address <span
                                                        class="required">*</span></label><br><input type="text"
                                                    title="Street Address" name="street_address" id="street_address_billing"
                                                    class="input-text required-entry" value=""></li>
                                            <li>
                                                <div class="input-box"><label
                                                        for="billing_postcode">City</label><br><input type="text"
                                                        title="City" name="city" id="city_billing"
                                                        class="input-text required-entry" value=""></div>
                                            </li>
                                            <li>
                                                <div class="input-box"><label for="billing_telephone">Telephone
                                                        <span class="required">*</span></label><br>
                                                    <input type="text" name="mobile" title="Telephone"
                                                        class="input-text required-entry" id="mobile_billing" value="">
                                                </div>
                                                <div class="input-box"><label for="Email">Email <span
                                                            class="required">*</span></label><br>
                                                    <input type="text" name="email" title="Email" class="input-text"
                                                        id="email_billing" value=""></div>
                                            </li>
                                            <li><label for="billing_street1">Landmark</label><br><input type="text"
                                                    title="Street Address" name="landmark" id="landmark_billing"
                                                    class="input-text required-entry" value=""></li>
                                        </ul>
                                        <p class="require"><em class="required">* </em>Required Fields</p>
                                        <button type="button" class="button continue"
                                            onclick="addAddress()"><span>Save</span></button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade in" id="myModalAddAddressEdit" role="dialog" style="display: none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header v5c"><button type="button" class="close"
                                    data-dismiss="modal">×</button></div>
                            <div class="modal-body">
                                <form id="address_edit_form">
                                    @csrf

                                    <fieldset class="group-select">

                                        <ul>
                                            
                                            <li>
                                                <div class="customer-name">
                                                    <div class="input-box name-firstname"><label
                                                            for="billing:firstname">
                                                            First Name <span class="required">*</span>
                                                        </label><br><input type="text" id="first_name_billing_edit" name="first_name"
                                                            title="First Name" class="input-text required-entry"
                                                            value="">
                                                    </div>
                                                    <div class="input-box name-lastname"><label for="billing_lastname">
                                                            Last
                                                            Name <span class="required">*</span> </label><br><input
                                                            type="text" id="last_name_billing_edit" name="last_name"
                                                            title="Last Name" class="input-text required-entry"
                                                            value="">
                                                    </div>
                                                </div>
                                            </li>
                                            <li><label for="billing_street1">Street Address <span
                                                        class="required">*</span></label><br><input type="text"
                                                    title="Street Address" name="street_address" id="street_address_billing_edit"
                                                    class="input-text required-entry" value=""></li>
                                            <li>
                                                <div class="input-box"><label
                                                        for="billing_postcode">City</label><br><input type="text"
                                                        title="City" name="city" id="city_billing_edit"
                                                        class="input-text required-entry" value=""></div>
                                            </li>
                                            <li>
                                                <div class="input-box"><label for="billing_telephone">Telephone
                                                        <span class="required">*</span></label><br>
                                                    <input type="text" name="mobile" title="Telephone"
                                                        class="input-text required-entry" id="mobile_billing_edit" value="">
                                                </div>
                                                <div class="input-box"><label for="Email">Email <span
                                                            class="required">*</span></label><br>
                                                    <input type="text" name="email" title="Email" class="input-text"
                                                        id="email_billing_edit" value=""></div>
                                            </li>
                                            <input type="hidden" name="address_id_billing" id="address_id_billing">
                                            <li><label for="billing_street1">Landmark</label><br><input type="text"
                                                    title="Street Address" name="landmark" id="landmark_billing_edit"
                                                    class="input-text required-entry" value=""></li>
                                        </ul>
                                        <p class="require"><em class="required">* </em>Required Fields</p>
                                        <button type="button" class="button continue"
                                            onclick="updateAddress()"><span>Update</span></button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-lg-8 mt-2">
                    <div class="gcvYcJ">
                        <button type="button" data-toggle="modal" data-target="#myModalAddAddress"
                            class="button continue">Add Address</button>
                    </div>
                </div>
                <!--	///*///======    End article  ========= //*/// -->

            </div>

            @include('pages.myaccount.sidebar')

        </div>
    </div>
</section>
<!-- Main Container End -->
<script>
    function addAddress() {
        let first_name = $('#first_name_billing').val();
        let last_name = $('#last_name_billing').val();
        let street_address = $('#street_address_billing').val();
        let city = $('#city_billing').val();
        let mobile = $('#mobile_billing').val();
        let email = $('#email_billing').val();
        let landmark = $('#landmark_billing').val();
        $.ajax({
            url: "{{url('address-post')}}",
            type: 'post',
            data: {
                    first_name: first_name,
                    last_name : last_name,
                    street_address : street_address,
                    city :city,
                    mobile :mobile,
                    email :email,
                    landmark :landmark
            },
            dataType: 'json',
            success: function(response) {
                $(".preloader").hide();
                if (response.status == 1) {
                    Swal.fire("Success!", response.message, "success").then(() => {
                        $('#myModalAddAddress').modal('hide');
                        // $('myModalforgetotp').modal('hide');
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
                $(".preloader").hide();
                console.log(xhr.responseText); // this line will save you tons of hours while debugging
                // do something here because of error
            }
        });
    }
</script>

<script>
    function updateAddress() {
        let first_name = $('#first_name_billing_edit').val();
        let last_name = $('#last_name_billing_edit').val();
        let street_address = $('#street_address_billing_edit').val();
        let city = $('#city_billing_edit').val();
        let mobile = $('#mobile_billing_edit').val();
        let email = $('#email_billing_edit').val();
        let landmark = $('#landmark_billing_edit').val();
        let address_id = $('#address_id_billing').val();
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{url('address-update')}}",
            type: 'post',
            data: {
                    first_name: first_name,
                    last_name : last_name,
                    street_address : street_address,
                    city :city,
                    mobile :mobile,
                    email :email,
                    landmark :landmark,
                    address_id:address_id
            },
            dataType: 'json',
            success: function(response) {
                $(".preloader").hide();
                if (response.status == 1) {
                    Swal.fire("Success!", response.message, "success").then(() => {
                        $('#myModalAddAddressEdit').modal('hide');
                        // $('myModalforgetotp').modal('hide');
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
                $(".preloader").hide();
                console.log(xhr.responseText); // this line will save you tons of hours while debugging
                // do something here because of error
            }
        });
    }
</script>

 <script>
        function AddressEdit(id)
   {
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    $.ajax({
        url:"{{route('edit-address')}}",
        type:'post',
         data: {
                    id: id,
            },
        dataType:'json',
        success: function (response) {
                    $(".preloader").hide();
                    if (response.status == 1) {
                        $('#myModalAddAddressEdit').modal('show');
                        console.log(response.data)
                        $("#first_name_billing_edit").val(response.data.first_name);
                        $("#last_name_billing_edit").val(response.data.last_name);
                        $("#street_address_billing_edit").val(response.data.street_address);
                        $("#mobile_billing_edit").val(response.data.mobile);
                        $("#email_billing_edit").val(response.data.email);
                        $("#landmark_billing_edit").val(response.data.landmark);
                        $("#city_billing_edit").val(response.data.city);
                        
                    //     Swal.fire("Success!", response.message, "success").then(() => {
                    //          $('#myModalsignin').modal('show');
                    //         $('#myModalsigninotp').modal('hide');
                    //        $('#myModalsignup').modal('hide');

                    //  location.reload();
                    //     });
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

   $('.edit-button').on('click', function() {
   $("#address_id_billing").val($(this).data('id'))
  $("#first_name_billing_edit").val($(this).data('first_name'))
  $("#last_name_billing_edit").val($(this).data('last_name'))
  $("#street_address_billing_edit").val($(this).data('street_address'))
  $("#mobile_billing_edit").val($(this).data('mobile'))
  $("#email_billing_edit").val($(this).data('email'))
  $("#landmark_billing_edit").val($(this).data('landmark'))
  $("#city_billing_edit").val($(this).data('city'))
})

function SetPrimaryAddress(ref) {
    
     var address_id = ref.data('address_id');  
     console.log(address_id);
     $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
 });
     $.ajax({
     type: "POST",
     url: '{{ url("address-primary")}}',
     data: {
         address_id : address_id ,
         // qty: qty,
     },
     cache: false,
   success: function (response) {
                    $(".preloader").hide();
                    if (response.status == 1) {
                        Swal.fire("Success!", response.message, "success").then(() => {
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
     };

function Addressdelete(ref) {
    
    var address_id = ref.data('address_id');  
     console.log(address_id);
     $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
 });
     $.ajax({
     type: "POST",
     url: '{{ url("address-delete")}}',
     data: {
         address_id : address_id ,
         // qty: qty,
     },
     cache: false,
   success: function (response) {
                    $(".preloader").hide();
                    if (response.status == 1) {
                        Swal.fire("Success!", response.message, "success").then(() => {
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
     };
     </script>
       
@endsection