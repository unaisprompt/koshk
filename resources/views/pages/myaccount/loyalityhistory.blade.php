@extends('layouts.app')
@section('style')
@endsection
@section('content')

<div class="container bootstrap snippets bootdey">
<div class="row">
      @include('pages.myaccount.sidebar')
      <div class="col-sm-9 ">
        <div class="page-title">
          <h2>@lang('label.Loyalty_History')</h2>
        </div>


        @if(!empty($data))

        <table class="table" border="2" style="color: black">
            <thead class="" style="background-color: #333ca1">
              <tr style="color: white">
                <th scope="col">Order Number</th>
                <th scope="col">Date</th>
                <th scope="col">Order Reward</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach($data['datas'] as $item)
              <tr>
                <th scope="row">{{$item['reference_id']}}</th>
                <td>{{date('d-m-Y', strtotime($item['created_at']))}}</td>
                <td>point: {{$item['reward_points']}} applied: {{$item['applied_points']}}</td>
                <td>
                    <a href="{{url('order-detail/'.encrypt($item['reference_id']))}}" class="btn btn-primary">order
                    details</a>
                </td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
     
        @endif
       
      </div>
</div>
</div>
@endsection