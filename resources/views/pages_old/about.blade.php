@extends('layouts.app')

@section('content')  
   
   <!-- Start Page Title Area -->
   <div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>About</h1>
            <ul>
                <li><a href="/">Home</a></li>
                <li>About</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Privacy Policy Area -->
<div class="privacy-policy-area ptb-100">
    <div class="container">
        <div class="privacy-policy-content">
            <h5>About</h5>
            <p>{{$about}}</p>
            
        </div>
    </div>
</div>
<!-- End Privacy Policy Area -->

@endsection
