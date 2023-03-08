@extends('layouts.app')

@section('content')  
   
   <!-- Start Page Title Area -->
   <div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Terms And Conditions</h1>
            <ul>
                <li><a href="/">Home</a></li>
                <li>Terms And Conditions</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Privacy Policy Area -->
<div class="privacy-policy-area ptb-100">
    <div class="container">
        <div class="privacy-policy-content">
            <h5>Terms And Conditions</h5>
            <p>{{$data}}</p>
         
        </div>
    </div>
</div>
<!-- End Privacy Policy Area -->

@endsection
