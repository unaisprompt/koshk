@extends('layouts.app')
@section('content')
<style>
   .products-list .actions .add-to-links a.link-wishlist.active{
        background-color: blue;
        color: white;
    }
</style>
  <!-- Main Container -->
  <section class="main-container col2-left-layout">
    <div class="container">
     <!-- Breadcrumbs -->
   <div class="breadcrumbs">
            <ul>
              <li class="home"> <a href="{{url('')}}" title="Go to Home Page">Home</a> <span>/</span> </li>
              @if($data->category)
              <li> <a href="{{url('products?category_id='.$data->category->id)}}" title="">{{$data->category->category_name}}</a><input type="hidden" id="category_id" value="{{$data->category->id}}"> @if($data->subcategory)<span>/ </span>@endif </li>
                @if($data->subcategory)
                  <li> <a href="{{url('products?category_id='.$data->category->id.'&subcategory_id='.$data->subcategory->id)}}" title="">{{$data->subcategory->subcategory_name}}</a><input type="hidden" id="subcategory_id" value="{{$data->subcategory->id}}"> @if($data->inner_subcategory)<span>/</span>@endif </li>
                  @if($data->inner_subcategory)
                   <li> <strong>{{$data->inner_subcategory->innersubcategory_name}}</strong><input type="hidden" id="inner_subcategory_id" value="{{$data->inner_subcategory->id}}"> </li>
                  @endif
                @endif
              @endif
            </ul>
          </div>
           <!-- Breadcrumbs End -->
      <div class="row">
        <div class="col-sm-9 col-sm-push-3">
         <div class="category-description std">
                        <div class="slider-items-products">
                            @if($data->category)
                          <div id="category-desc-slider"
                            class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col1
                              owl-carousel owl-theme">
                              @foreach ($data->category->multi_banner as $banner)
                              <!-- Item -->
                              <div class="item"> <a href="#"><img alt=""
                                    src="{{$banner->image_url}}"></a>
                                <!-- <div class="cat-img-title cat-bg cat-box">
                                  <div class="small-tag">Season 2021</div>
                                  <h2 class="cat-heading">Televisions</h2>
                                  <p>GET 40% OFF &sdot; Free Delivery </p>
                                </div> -->
                              </div>
                              <!-- End Item -->
                             @endforeach
                            </div>
                          </div>
                          @endif
                        </div>
                      </div>
          <div class="page-title">
                        <h2> @if($data->inner_subcategory)
                            {{$data->inner_subcategory->innersubcategory_name}}
                            @elseif($data->subcategory)
                            {{$data->subcategory->subcategory_name}}
                            @elseif($data->category)
                            {{$data->category->category_name}}
                            @else
                            All Category
                            @endif </h2>
                        <p class="font-size-14 text-gray-90 mb-0" id="result_count">Showing {{count($data->products)}}
                          of {{$data->total_count}} results {{request()->search?"for '".request()->search."'":''}}</p>
                      </div>
          <article class="col-main">
          <div class="pro-listing">
            <div class="toolbar">
                            <div class="row">
                              <div class="col-xl-6 col-lg-6 col-md-6 col-3">
                                <div class="product-list-grid">
                                  <ul class="nav">
                                    <li class="nav-item">
                                      <a href="#" class="button-grid
                                        nav-link">
                                        <i class="fa fa-th-large"></i>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="list.html" class="button-list
                                        nav-link active">
                                        <i class="fa fa-bars"></i>
                                      </a>
                                    </li>

                                  </ul>
                                </div>
                              </div>

                              <div class="col-xl-6 col-lg-6 col-md-6 col-9">
                                <!-- <div class="pro-sorting">
                                  <form class="woocommerce-showing" style="margin-bottom: 0px;">
                                    <select name="showby" aria-label="show"
                                      class="show-filter">
                                      <option value="Show 20"
                                        selected="selected">Show 20
                                        <option value="Show 30">Show 30
                                          <option value="Show 40">Show 40
                                            <option value="Show 50">Show 50
                                            </select>
                                          </form>
                                        </div> -->
                                        <div class="pro-sorting">
                                          <form class="woocommerce-ordering"  style="margin-bottom: 0px;">
                                            <select name="orderby" aria-label="Shop order" id="sort-type" onchange="filter()">
                                                <option value="sort-by-popularity">
                                                    Sort by popularity
                                                </option>
                                                <option value="sort-by-date" selected>
                                                    Sort by date
                                                </option>
                                                <option value="price-low-to-high" >
                                                    Sort by price: low to high
                                                </option>
                                                <option value="price-high-to-low">
                                                    Sort by price: high to low
                                                </option>
                                            </select>
                                        </form>
                                        </div>


                                                </div>
                                                <div class="col-md-12">
                                                </div>
                                              </div>
                                            </div>
            <div class="category-products">
              <ol class="products-list" id="products-list">
                @foreach ($data->products as $product)
                 <li class="item  @if($loop->iteration==1) first @elseif ($loop->iteration%2==0) even @elseif ($loop->iteration%1==0) odd @endif listing">
                  <div class="product-image"> <a href="{{url('product-detail?id='.$product->id)}}" title="{{$product->product_name}}"> <img class="small-image" src="{{$product->productimage->image_url}}" alt="{{$product->product_name}}"> </a>

                  </div>
                  <div class="product-shop">
                    <h2 class="product-name"><a href="{{url('product-detail?id='.$product->id)}}" title="{{$product->product_name}}">{{$product->product_name}}</a></h2>
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:{{$product->rattings?$product->rattings[0]->avg_ratting*2*10:'0'}}%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                    </div>
                    <div class="desc std">
                      <p>{{$product->description}} <a class="link-learn" title="" href="{{url('product-detail?id='.$product->id)}}">Learn More</a> </p>
                    </div>
                    <div class="price-box">
                      <p class="old-price"> <span class="price-label"></span> <span class="price"> AED {{$product->product_price}} </span> </p>
                      <p class="special-price"> <span class="price-label"></span> <span class="price"> AED {{$product->discounted_price}} </span> </p>
                    </div>
                    <div class="actions">
                      <button class="button btn-cart ajx-cart" title="Add to Cart" type="button" data-details="{{json_encode($product)}}" onClick="addCart($(this).data('details'))"><span>Add to Cart</span></button>
                      <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist @if($product->is_wishlist) active @endif" href="#" onclick="event.preventDefault();addWishlist({{$product->id}},$(this))"></a>
                      <!-- <a title="Add to Compare" class="button link-compare" href="compare.html"></a> -->
                     </span> </div>
                  </div>
                </li>
                @endforeach

              </ol>
              @if($data->total_count>6)
              <a href="#" id="load_more" onclick="event.preventDefault();loadMore()">Load more...</a>
              @endif
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
              @if($data->category)
                @foreach ($data->category->subcategory as $subcategory)
                   <div class="card border-0 mb-2">
                        <div class="card-header">
                        <h6 class="mb-0">
                          @if($subcategory->inner_category)
                            <a class="link-title" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$loop->iteration}}">
                               {{$subcategory->subcategory_name}}
                            </a>
                          @else
                           <a class="link-title" href="{{url('products?category_id='.$data->category->id.'&subcategory_id='.$subcategory->id)}}">
                               {{$subcategory->subcategory_name}}
                            </a>
                          @endif
                        </h6>
                        </div>
                        @if($subcategory->inner_category)
                        <div id="collapse{{$loop->iteration}}" class="collapse" data-parent="#accordion">
                          <div class="card-body text-muted">
                              <ul class="list-unstyled">
                                  @foreach ($subcategory->inner_category as $innercategory)
                                      <li> <a href="{{url('products?category_id='.$data->category->id.'&subcategory_id='.$subcategory->id.'&innersubcategory_id='.$innercategory->id)}}">{{$innercategory->innersubcategory_name}}</a></li>
                                  @endforeach
                              </ul>
                          </div>
                        </div>
                        @endif
                    </div>
                @endforeach
              @else
                @include('pages.product.sidecategory')
              @endif
            </div>
          </div>

          <div class="widget widget-filter">
                    <div class="block-title">Filter</div>

             <div class="widget-brand">
            <h5 class="widget-title">Brand</h5>
            @foreach ($data->brands as $brand)
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" value="{{$brand->id}}" class="custom-control-input brands" id="brandCheck{{$loop->iteration}}" onChange="brandChecked($(this))">
              <label class="custom-control-label" for="brandCheck{{$loop->iteration}}"> {{$brand->brand_name}}</label>
            </div>
            @endforeach
          </div>

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

          <div class="widget-price">
          <h5>Price Range</h5>
          <div class="wrapper">
  <fieldset class="filter-price">

    <div class="price-field">
      <input type="range" min="0" max="{{$data->max_price}}" value="0" id="lower" onchange="filter()">
      <input type="range" min="0" max="{{$data->max_price}}" value="{{$data->max_price}}" id="upper" onchange="filter()">
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
          </div>
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

        @include('pages.product.topratedproducts')
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
                @foreach ($data->bestsellers as $item)
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="{{$item->product_name}}" href="{{url('product-detail?id='.$item->id)}}"> <img alt="{{$item->product_name}}" src="{{$item->productimage->image_url}}"> </a>
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
                        <div class="item-title"> <a title="{{$item->product_name}}" href="{{url('product-detail?id='.$item->id)}}">{{$item->product_name}}</a> </div>
                        <div class="brand">{{$item->brand->brand_name}}</div>
                        <div class="star-rating">
                               <span style="width:{{(count($item->rattings)>0)?$item->rattings[0]->avg_ratting*2*10:'0'}}%">Rated <strong class="rating">{{(count($item->rattings)>0)?$item->rattings[0]->avg_ratting:'0'}}</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">AED {{$item->discounted_price}}</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart" data-details="{{json_encode($item)}}" onclick="addCart($(this).data('details'))"><i class="fa fa-shopping-basket"></i></button>
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
  <script>
    var loadCount=0;
    function loadData()
    {
        var formData=new FormData();
        if($('#category_id').length>0)
        {
        formData.append('category_id',$('#category_id').val());
        }
        if($('#subcategory_id').length>0)
        {
         formData.append('subcategory_id',$('#subcategory_id').val());
        }
         if($('#inner_subcategory_id').length>0)
        {
          formData.append('inner_subcategory_id',$('#inner_subcategory_id').val());
        }
        if($('#sort-type').length>0)
        {
          formData.append('type',$('#sort-type').val());
        }
        formData.append('lower',$('#lower').val());
        formData.append('upper',$('#upper').val());
           formData.append('page',loadCount);
        $('.brands').each(function(){
            if($(this).prop('checked'))
            {
            formData.append('brand_ids[]',$(this).val());
            }
        });

        $.ajax({
            url:'{{config('global.api')}}/product-list',
            type:'post',
            processData: false,
            contentType: false,
            data:formData,
            dataType:'json',
            success:function(response){
                response.products.forEach(function(product,index){
                    var item=` <li class="item ${index%2==0?`even`:`odd`} listing">
                                <div class="product-image"> <a href="{{url('product-detail')}}?id=${product.id}" title="${product.product_name}"> <img class="small-image" src="${product.productimage.image_url}" alt="${product.product_name}"> </a>

                                </div>
                                <div class="product-shop">
                                    <h2 class="product-name"><a href="{{url('product-detail')}}?id=${product.id}" title="${product.product_name}">${product.product_name}</a></h2>
                                    <div class="ratings">
                                    <div class="rating-box">
                                        <div style="width:50%" class="rating"></div>
                                    </div>
                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                                    </div>
                                    <div class="desc std">
                                    <p>${product.description} <a class="link-learn" title="" href="{{url('product-detail')}}?id=${product.id}">Learn More</a> </p>
                                    </div>
                                    <div class="price-box">
                                    <p class="old-price"> <span class="price-label"></span> <span class="price"> AED ${product.product_price} </span> </p>
                                    <p class="special-price"> <span class="price-label"></span> <span class="price"> AED ${product.discounted_price} </span> </p>
                                    </div>
                                    <div class="actions">
                                    <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                    <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist ${product.is_wishlist?'active':''}" href="#" onclick="event.preventDefault();addWishlist(${product.id},$(this))"></a>
                                    <!-- <a title="Add to Compare" class="button link-compare" href="compare.html"></a> -->
                                    </span> </div>
                                </div>
                                </li>`;
                    $('#products-list').append(item);
                });

             if(parseInt(response.total_count)===parseInt($('.listing').length))
              {
                 $('#load_more').hide();
              }else{
                $('#load_more').show();
              }
              $('#result_count').html(`Showing ${$('.listing').length} of ${response.total_count} results`);
            }
        })
    }
    function filter()
    {
        loadCount=0;
         $('#products-list').empty();
        loadData();
    }
    function loadMore()
    {
        loadCount++;
        var formData=new FormData();
       loadData();
    }
    function brandChecked(ref)
    {
            filter();
    }
    function addWishlist(id,ref)
    {
       @if(session()->get('token'))
        var token="{{session()->get('token')}}";
        $.ajax({
        url: '{{config('global.api')}}/addtowishlist',
        type: 'POST',
        beforeSend: function (xhr) {
            xhr.setRequestHeader('Authorization', 'Bearer '+token);
        },
        data: {product_id:id},
        success: function (response) {
            if(response.status==1)
            {
                Toastify({
                text: response.message,
                className: "info",
                close: true,
                style: {
                    background: "#1cad6a",
                }
                }).showToast();
                ref.addClass('active');
            }
        },
        error: function () { },
        });
       @else
       $('#myModalsignin').modal('show');
       @endif
    }
  </script>
  <script>
    function addCart(product)
    {
      if(product.is_variation==1)
      {
        window.location='{{url("product-detail")}}?id='+product.id;
        return;
      }
      var tax=0;
      if(product.tax_type=="amount")
      {
        tax=product.tax;
      }else{
        tax=product.discounted_price*product.tax/100;
      }
           var setting={
                        url:'{{url("/add-to-cart")}}',
                        dataType:'json',
                        type:'post',
                        headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          },
                        data: { 
                            product_id: product.id,
                            product_name: product.product_name,
                            qty: 1,
                            price: product.discounted_price,
                            shipping_cost: product.shipping_cost,
                            tax: tax,
                            image: product.productimage.image_url
                        },
                      
                        success:function(response){
                          // console.log(response);

                          if(response.status==1){
                            Toastify({
                        text: "Cart Item Added",
                        className: "info",
                        close: true,
                        style: {
                            background: "#1cad6a",
                        }
                        }).showToast();
                          }
                        
                        },
                          error: function(xhr) {
                          
                      console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                    }
                    };
            $.ajax(setting);
    }
  </script>
@endsection
