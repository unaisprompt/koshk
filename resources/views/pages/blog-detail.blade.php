@extends('layouts.app')
@section('content')

@php
use Carbon\Carbon;
@endphp

<div class="container">
    <div class="blog-details">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-head">

                    <div>
                        <span  class="blgimg">
                            <img src="{{$data->image_url}}" alt="Blog Image"  style="width: 100% ;  border-radius: 64px; ">         
                        </span>
                        <h3 class="blgheads">
                         {{$data->heading}}
                        </h3>
                         <div class="userDeta">
                        
                                        <div class="avimg">
                                            <img src="{{$data->writer_image}}" alt="">
                                        </div>
                                        <div class="avcontent">
                                           
                                            <h6 class="avheadtext">
                                                {{$data->writer_name}}
                                            </h6>
                                            <p>@php $datetime = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at);

                                        // Use the format() method to output the datetime in the desired format
                                        $formattedDatetime = $datetime->format('jS F Y h:i a');

                                        echo $formattedDatetime; 
                                        @endphp</p>
                                        </div>
                                    </div>
                </div>

                        <p style="text-align: justify">
                       {!!$data->description!!}
                        </p>
                    </div>
                    
             </div>
            
        </div>
    </div>
</div>





@endsection