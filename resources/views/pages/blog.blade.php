@extends('layouts.app')
@section('content')






{{-- enter your code here --}}
         <header class="bghead">
  <h1>Blog</h1>
</header>
<div class="band">
  {{-- <div class="item-1">
    <a href="https://design.tutsplus.com/articles/international-artist-feature-malaysia--cms-26852" class="card">
      <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/flex-1.jpg);"></div>
      <article>
        <h1>International Artist Feature: Malaysia</h1>
        <span>Mary Winkler</span>
      </article>
    </a>
  </div>
  <div class="item-2">
    <a href="https://webdesign.tutsplus.com/articles/how-to-conduct-remote-usability-testing--cms-27045" class="card">
      <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/users-2.png);"></div>
      <article>
        <h1>How to Conduct Remote Usability Testing</h1>
        <span>Harry Brignull</span>
      </article>
    </a>
  </div>
  <div class="item-3">
    <a href="https://design.tutsplus.com/articles/envato-tuts-community-challenge-created-by-you-july-edition--cms-26724" class="card">
      <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/flex-5.jpg);"></div>
      <article>
        <h1>Created by You, July Edition</h1>
        <p>Welcome to our monthly feature of fantastic tutorial results created by you, the Envato Tuts+ community! </p>
        <span>Melody Nieves</span>
      </article>
    </a>
  </div> --}}
  @foreach($data as $blog)
  <div class="item-4">
    <a href="{{url('blog-detail/').'/'.$blog->slug}}" class="card">
      <div class="thumb" style="background-image: url({{$blog->image_url}});"></div>
      <article>
        <h1>{{$blog->heading}}</h1>
        <p>{!!Str::limit($blog->description, 70, '...')!!}</p>
        <span>{{$blog->writer_name}}</span>
      </article>
    </a>
  </div>
  @endforeach
  {{-- <div class="item-5">
    <a href="" class="card">
      <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/strange.jpg);"></div>
      <article>
        <h1>How to Create a “Stranger Things” Text Effect in Adobe Photoshop</h1>
        <span>Rose</span>
      </article>
    </a>
  </div>
  <div class="item-6">
    <a href="" class="card">
      <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/flor.jpg);"></div>
      <article>
        <h1>5 Inspirational Business Portraits and How to Make Your Own</h1>

        <span>Marie Gardiner</span>
      </article>
    </a>
  </div>
  <div class="item-7">
    <a href="{{url('blog-detail')}}" class="card">
      <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/china.png);"></div>
      <article>
        <h1>Notes From Behind the Firewall: The State of Web Design in China</h1>
        <span>Kendra Schaefer</span>
      </article>
    </a>
  </div> --}}
</div>

@endsection