@extends('layouts.app')
@section('style')
@endsection
@section('content')
<section class="main-container col2-left-layout">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-sm-push-3">
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
                      <h5 class="card-title">order Number : {{$item['order_number']}}</h5>
                      <p class="card-text">date :{{$item['date']}}</p>
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
          <button type="button">Continue Shopping</button>
        </div>
         </div>
        <!--	///*///======    End article  ========= //*/// -->
      </div>
      @include('pages.myaccount.sidebar')
    </div>
  </div>
</section>
@endsection