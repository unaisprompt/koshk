
@extends('layouts.app')

@section('content')  
<style>
@import url("https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600&display=swap");
*, *::after, *::before {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}



.main {
  color: #2c3e50;
  font-family: "Montserrat", sans-serif;
  width: 40rem;
  font-weight: 300;
  min-height: 100vh;
  position: relative;
  display: block;
  margin: 2rem auto;
}

h2, h4, h6 {
  margin: 0;
  padding: 0;
  display: inline-block;
}

.root {
  padding: 3rem 1.5rem;
  border-radius: 5px;
  box-shadow: 0 2rem 6rem rgba(0, 0, 0, 0.3);
}

figure {
  display: flex;
}
figure img {
  width: 8rem;
  height: 8rem;
  border-radius: 50%;
  border: 1px solid #f05a00;
  margin-right: 1.5rem;
}
figure figcaption {
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
}
figure figcaption h4 {
  font-size: 1.4rem;
  font-weight: 500;
}
figure figcaption h6 {
  font-size: 1rem;
  font-weight: 300;
}
figure figcaption h2 {
  font-size: 1.6rem;
  font-weight: 500;
}

.order-track {
  margin-top: 2rem;
  padding: 0 1rem;
  border-top: 1px dashed #2c3e50;
  padding-top: 2.5rem;
  display: flex;
  flex-direction: column;
}
.order-track-step {
  display: flex;
  height: 7rem;
}
.order-track-step:last-child {
  overflow: hidden;
  height: 4rem;
}
.order-track-step:last-child .order-track-status span:last-of-type {
  display: none;
}
.order-track-status {
  margin-right: 1.5rem;
  position: relative;
}
.order-track-status-dot {
  display: block;
  width: 2.2rem;
  height: 2.2rem;
  border-radius: 50%;
  background: #f05a00;
}
.order-track-status-line {
  display: block;
  margin: 0 auto;
  width: 2px;
  height: 7rem;
  background: #f05a00;
}
.order-track-text-stat {
  font-size: 1.3rem;
  font-weight: 500;
  margin-bottom: 3px;
}
.order-track-text-sub {
  font-size: 1rem;
  font-weight: 300;
}

.order-track {
  transition: all 0.3s height 0.3s;
  transform-origin: top center;
}
 </style>
 {{-- {{dd($data)}} --}}
<section class="root main">
  <figure>
     <a href="{{url('product/detail?product='.$data['order_info']['id'].'&productname='.$data['order_info']['product_name'])}}">
    <img src="{{$data['order_info']['image_url']}}" alt="">
     </a>
    <figcaption>
      {{-- {{dd($data)}} --}}
      <h6>{{$data['order_info']['order_number']}}</h6>
      <h6>Product Name : {{$data['order_info']['product_name']}}</h6>
      <h6>Tax :AED {{$data['order_info']['tax']}}</h6>
      <h6>Shipping Cost :AED {{$data['order_info']['shipping_cost']}}</h6>
     <h6>Discount Amount :AED {{$data['order_info']['discount_amount']}}</h6> 
       <h6>Qty :{{$data['order_info']['qty']}}</h6> 
      <h2>Total Amount : AED {{$data['order_info']['price']+$data['order_info']['tax']+$data['order_info']['shipping_cost']*$data['order_info']['qty']-$data['order_info']['discount_amount']}}</h2>
    </figcaption>
  </figure>
  <div class="order-track">
     @if($data['order_info']['status']==1||$data['order_info']['status']==2||$data['order_info']['status']==3||$data['order_info']['status']==4)
    <div class="order-track-step">
      <div class="order-track-status">
        <span class="@if($data['order_info']['status']!=11 ) order-track-status-dot @endif"></span>
        <span class="order-track-status-line"></span>
      </div>
      <div class="order-track-text">
        <p class="order-track-text-stat">Order Placed</p>
        <span class="order-track-text-sub">@if($data['order_info']['created_at'] !='') {{$data['order_info']['created_at']}}@endif</span>
      </div>
    </div>
    @if($data['order_info']['status']!=1 || $data['order_info']['status']==2 || $data['order_info']['status']==5||$data['order_info']['status']==6||$data['order_info']['status']==7 ||$data['order_info']['status']==8||$data['order_info']['status']==9  && $data['order_info']['confirmed_at'] !='')
    <div class="@if($data['order_info']['status']!=1 || $data['order_info']['status']==2 && $data['order_info']['confirmed_at'] !='') order-track-step @endif">
      <div class="order-track-status">
        <span class="order-track-status-dot"></span>
        <span class="order-track-status-line"></span>
      </div>
      <div class="order-track-text">
        <p class="order-track-text-stat">@if($data['order_info']['status']!=1|| $data['order_info']['status']==2)Order Processed @endif @if($data['order_info']['status']==5)Rejected @endif @if($data['order_info']['status']==6)cancelled @endif @if($data['order_info']['status']==7)Return request raised @endif @if($data['order_info']['status']==8)Return in progress @endif
        @if($data['order_info']['status']==9)Return in completed @endif @if($data['order_info']['status']==10)Return request rejected @endif</p>
        <span class="order-track-text-sub">@if($data['order_info']['status']!=1 ||$data['order_info']['status']==2)@if($data['order_info']['confirmed_at'] !='') {{$data['order_info']['confirmed_at']}}@endif @endif</span>
      </div>
    </div>
    @endif
    @if($data['order_info']['status']==3 && $data['order_info']['shipped_at'] !='')
   <div class="@if($data['order_info']['status']!=1 || $data['order_info']['status']!=2 || $data['order_info']['status']==3 && $data['order_info']['shipped_at'] !='') order-track-step @endif">
      <div class="order-track-status">
        <span class="order-track-status-dot"></span>
        <span class="order-track-status-line"></span>
      </div>
      <div class="order-track-text">
        <p class="order-track-text-stat">Order Shipped</p>
        <span class="order-track-text-sub">@if($data['order_info']['status']!=1 ||$data['order_info']['status']!=2 ||$data['order_info']['status']==3 && $data['order_info']['shipped_at'] !=''){{$data['order_info']['shipped_at']}}@endif</span>
      </div>
    </div>
    @endif
     @if($data['order_info']['status']==4 && $data['order_info']['delivered_at'] !='')
    <div class=" @if($data['order_info']['status']!=1 || $data['order_info']['status']!=2 || $data['order_info']['status']!=3 || $data['order_info']['status']==4&& $data['order_info']['delivered_at'] !='') order-track-step @endif">
      <div class="order-track-status">
        <span class="order-track-status-dot"></span>
        <span class="order-track-status-line"></span>
      </div>
      <div class="order-track-text">
        <p class="order-track-text-stat">Order Delivered</p>
        <span class="order-track-text-sub">@if($data['order_info']['delivered_at'] !='') {{$data['order_info']['delivered_at']}}@endif</span>
      </div>
    </div>
    @endif
      @endif
      @if($data['order_info']['status']==5||$data['order_info']['status']==6||$data['order_info']['status']==7||$data['order_info']['status']==8||$data['order_info']['status']==9||$data['order_info']['status']==9)
      
    <div class="order-track-step">
      <div class="order-track-status">
        <span class="order-track-status-dot"></span>
        <span class="order-track-status-line"></span>
      </div>
      <div class="order-track-text">
        <p class="order-track-text-stat">Order Placed</p>
        <span class="order-track-text-sub">{{$data['order_info']['created_at']}}</span>
      </div>
    </div>
    <div class="order-track-step">
      <div class="order-track-status">
        <span class="order-track-status-dot"></span>
        <span class="order-track-status-line"></span>
      </div>
      <div class="order-track-text">
        <p class="order-track-text-stat">@if($data['order_info']['status']==5)Rejected @endif @if($data['order_info']['status']==6)cancelled @endif @if($data['order_info']['status']==7)Return request raised @endif @if($data['order_info']['status']==8)Return in progress @endif
        @if($data['order_info']['status']==9)Return in completed @endif @if($data['order_info']['status']==10)Return request rejected @endif</p>
        <span class="order-track-text-sub"></span>
      </div>
    </div>

      @endif
  </div>

  
</section>
@endsection