@extends('layouts.app')
@section('style')
@endsection
@section('content')

<div class="container bootstrap snippets bootdey">
<div class="row">
      @include('pages.myaccount.sidebar')
      <div class="col-sm-9 ">
        <div class="page-title">
          <h2>Orders</h2>
        </div>
        @php $total=1;@endphp
        @if(!empty($data))
        @foreach($data['data'] as $item)
        <div class="col-sm-8 col-lg-8 order-box-wid">
          <div class="uthssk">
            <div class="cart-table table-responsive" style="overflow-x: hidden;">
              <div class="row">
                <div class="col-sm-12 mb-2">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Order Number : {{$item['order_number']}}</h5>
                      <p class="card-text">Date :{{$item['date']}}</p>
                      <p class="card-text">Amount: AED {{$item['grand_total']}}</p>
                      <a href="{{url('order-detail/'.encrypt($item['order_number']))}}" class="btn btn-primary">order
                        details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        @endif
         <div class="col-sm-8 col-lg-8 mt-3">
        <div class="gcvYcJ">
         <a href="{{url('products')}}" style="text-decoration:none;"> <button type="button">Continue Shopping</button></a>
        </div>
         </div>
        <!--	///*///======    End article  ========= //*/// -->
      </div>
</div>
</div>
@endsection