@extends('layouts.app')
@section('content')   
  <!-- Main Container -->
  <section class="main-container col2-left-layout">
    <div class="container">
     <!-- Breadcrumbs -->
    <div class="breadcrumbs">
            <ul>
              <li class="home"> <a href="index.html" title="Go to Home Page">Home</a> <span>/</span> </li>
              <li> <strong>{{$search}}</strong> </li>
            </ul>
          </div>
           <!-- Breadcrumbs End -->
      <div class="row">
        <div class="col-sm-9 col-sm-push-3"> 
         
          
          <div class="page-title">
            <h2> Search result for '{{$search}}' </h2>
            <!-- <p class="font-size-14 text-gray-90 mb-0">Showing 1–35 of 62 results</p> -->
          </div>
          <article class="col-main">
          <div class="pro-listing">
            <div class="toolbar">
              <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-3">
                        <div class="product-list-grid">
                            <ul class="nav">
                                <!-- <li class="nav-item">
                                        <a href="grid.html" class="button-grid nav-link">
                                            <i class="fa fa-th-large"></i>
                                        </a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a href="list.html" class="button-list nav-link  active">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </li>
                                                                                                    
                            </ul>
                        </div>
                    </div>

                    <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-9">
                        <div class="pro-sorting">
                            <form class="woocommerce-showing">
                                <select name="showby" aria-label="show" class="show-filter">
                                                            <option value="Show 20" selected="selected">Show 20
                                                            <option value="Show 30">Show 30
                                                            <option value="Show 40">Show 40
                                                            <option value="Show 50">Show 50

                                                    </select>
                                            </form>
                        </div>
                        <div class="pro-sorting">
                            <form class="woocommerce-ordering">
                                <select name="orderby" aria-label="Shop order">
                                                            <option value="popularity">Sort by popularity
                                                            <option value="rating">Sort by average rating
                                                            <option value="date">Sort by latest
                                                            <option value="price">Sort by price: low to high
                                                            <option value="price-desc" selected="selected">Sort by price: high to low
                                                    </select>
                                            </form>
                        </div>

                        
                    </div> -->
             </div>
            </div>
            <div class="category-products">
              <ol class="products-list" id="products-list">
                @foreach ($datas as $data)
                 <li class="item @if($loop->iteration==1) first @elseif ($loop->iteration%2==0) even @elseif ($loop->iteration%1==0) odd @endif">
                  <div class="product-image"> <a href="product_detail.html" title="{{$data->product_name}}"> <img class="small-image" src="{{$data->productimage->image_url}}" alt="{{$data->product_name}}"> </a>
                  
                  </div>
                  <div class="product-shop">
                    <h2 class="product-name"><a href="product_detail.html" title="{{$data->product_name}}">{{$data->product_name}}</a></h2>
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:50%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                    </div>
                    <div class="desc std">
                      <p>{{$data->description}} <a class="link-learn" title="" href="product_detail.html">Learn More</a> </p>
                    </div>
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label"></span> <span class="price"> AED {{$data->product_price}} </span> </p>
                      <p class="special-price"> <span class="price-label"></span> <span class="price"> AED {{$data->discounted_price}} </span> </p>
                    </div>
                    <div class="actions">
                      <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="wishlist.html"></a> 
                      <!-- <a title="Add to Compare" class="button link-compare" href="compare.html"></a> -->
                     </span> </div>
                  </div>
                </li>
                @endforeach
                
              </ol>
            </div>
            <!-- <div class="pages">
                       <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
            </div> -->
                <br>
                </div>
          </article>
          <!--	///*///======    End article  ========= //*/// --> 
        </div>
        <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
        <div class="widget widget-categories">
            <div class="block-title">Browse Categories</div>
            <div id="accordion" class="accordion">
               @include('pages.product.sidecategory')
            </div>
          </div>
          
          <div class="widget widget-filter">
                    <!-- <div class="block-title">Filter</div> -->
                    
            <!-- <div class="widget-brand">
            <h5 class="widget-title">Brand</h5>
            @foreach ($brands as $brand)
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="brandCheck{{$loop->iteration}}">
              <label class="custom-control-label" for="brandCheck{{$loop->iteration}}"> {{$brand->brand_name}}</label>
            </div>
            @endforeach
          </div>   -->
          
          <!-- <div class="widget-color">
            <h5 class="widget-title">Colors</h5>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="colorCheck1">
              <label class="custom-control-label" for="colorCheck1"><span style="background-color: rgb(60, 179, 113);"></span> Green</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="colorCheck2">
              <label class="custom-control-label" for="colorCheck2"><span style="background-color:rgb(72, 118, 255)"></span> Blue</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="colorCheck3">
              <label class="custom-control-label" for="colorCheck3"><span style="background-color:rgb(249, 79, 21)"></span> Orange</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="colorCheck4">
              <label class="custom-control-label" for="colorCheck4"><span style="background: rgb(92, 36, 110);"></span> Purple</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="colorCheck5">
              <label class="custom-control-label" for="colorCheck5"><span style="background-color:rgb(255, 195, 0)"></span> Yellow</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="colorCheck6">
              <label class="custom-control-label" for="colorCheck6"><span style="background-color:rgb(192, 192, 192)"></span> Silver</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="colorCheck7">
              <label class="custom-control-label" for="colorCheck7"><span style="background-color:rgb(41, 36, 33)"></span> Black</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="colorCheck8">
              <label class="custom-control-label" for="colorCheck8"><span style="background-color:rgb(128, 0, 0)"></span> Maroon</label>
            </div>
            
          </div>   -->
          
          <!-- <div class="widget-ratings">
            <h5 class="widget-title">Customer Ratings</h5>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="rateCheck1">
              <label class="custom-control-label" for="rateCheck1"> 4 <i class="fa fa-star" aria-hidden="true"></i> and above </label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="rateCheck2">
              <label class="custom-control-label" for="rateCheck2"> 3 <i class="fa fa-star" aria-hidden="true"></i> and above</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="rateCheck3">
              <label class="custom-control-label" for="rateCheck3"> 2 <i class="fa fa-star" aria-hidden="true"></i> and above</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="rateCheck4">
              <label class="custom-control-label" for="rateCheck4"> 1 <i class="fa fa-star" aria-hidden="true"></i> and above</label>
            </div>
           
          </div>     -->
                    
          <!-- <div class="widget-price">
          <h5>Price Range</h5>
          <div class="wrapper">
  <fieldset class="filter-price">

    <div class="price-field">
      <input type="range" min="100" max="500" value="135" id="lower">
      <input type="range" min="100" max="500" value="500" id="upper">
    </div>
    <div class="price-wrap">
      <div class="price-container">
        <div class="price-wrap-1">

          <label for="one">AED </label>
          <input id="one">
        </div>
        <div class="price-wrap_line">-</div>
        <div class="price-wrap-2">
          <label for="two">AED </label>
          <input id="two">

        </div>
      </div>
    </div>
  </fieldset>
</div>
          </div> -->
          </div>
          
          
          
          
          
          
          
     
            <div class="featured-add-box">
              <div class="featured-add-inner"> <a href="#"> <img src="{{url('assets/images/hot-trends-banner.jpg')}}" alt="f-img"></a>
                <div class="banner-content">
                <div class="banner-text">Clearance Sale</div>
                <div class="banner-text1">Hot <span>Sale</span> </div>
                <p>save upto 20%</p>
                 </div>
              </div>
            </div>
   
          <!-- <div class="widget-latest">
            <div class="block-title"> Top Rated Products</div>
            <div class="block-content">
              <ul class="product-list">
                @foreach ($bestsellers as $item)
                <li class="item">
                      <figure class="featured-thumb"> <a href="#"> <img src="{{$item->productimage->image_url}}" alt="{{$item->product_name}}"> </a> </figure>
                  <div class="content-info">
                   <a href="grid.html" title="Lorem ipsum dolor sit amet">Anti Glare Side Narrow Border Display Laptop</a>
                   <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                   <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">AED 179.00</span> </span> </div>
                      </div>
                      
                    </div>
                  </div>
              
               </li>
                @endforeach
              </ul>
           
            </div>
          </div> -->
        </aside>
      </div>
    </div>
    <div class="container">
    <div class="bestsell-pro mt-0 mb-60">
      <div>
        <div class="slider-items-products">
          <div class="bestsell-block">
            <div class="block-title">
              <h2>Recommended</h2>
            </div>
            <div id="bestsell-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4 products-grid block-content">
                @foreach ($bestsellers as $item)
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="{{$item->product_name}}" href="product_detail.html"> <img alt="{{$item->product_name}}" src="{{$item->productimage->image_url}}"> </a>
                        @if($item->new_item==1)<div class="new-label new-top-left">new</div>@endif
                        <div class="box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                            <!-- <li><a class="link-compare" href="compare.html"></a> </li> -->
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="{{$item->product_name}}" href="product_detail.html">{{$item->product_name}}</a> </div>
                        <div class="brand">{{$item->brand->brand_name}}</div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">AED {{$item->discounted_price}}</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <!-- Main Container End -->
@endsection
       