@extends('layouts.app')
@section('style')
@endsection
@section('content')

<div class="container bootstrap snippets bootdey">
<div class="row">
      @include('pages.myaccount.sidebar')
      <div class="col-sm-9 ">
        <div class="page-title">
          <h2>Loyalty History</h2>
        </div>
        @if(!empty($data))
        @foreach($data['datas'] as $item)
        <div class="col-sm-8 col-lg-8 order-box-wid">
          <div class="uthssk">
            <div class="cart-table table-responsive" style="overflow-x: hidden;width:350px;">
              <div class="row">
                <div class="col-12 mb-2">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Order Number : {{$item['reference_id']}}</h5>
                      <p class="card-text">Date : {{date('d-m-Y', strtotime($item['created_at']))}}</p>
                      <p class="card-text"><b>Order Reward</b>  point: {{$item['reward_points']}} applied: {{$item['applied_points']}}</p>
                      <a href="{{url('order-detail/'.encrypt($item['reference_id']))}}" class="btn btn-primary">order
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
         {{-- <div class="col-sm-8 col-lg-8 mt-3">
        <div class="gcvYcJ">
         <a href="{{url('products')}}" style="text-decoration:none;"> <button type="button">Continue Shopping</button></a>
        </div>
         </div> --}}
        <!--	///*///======    End article  ========= //*/// -->
      </div>
</div>
</div>
@endsection