 
 @extends('layouts.app')

 @section('content')  

 <!-- Start Page Title Area -->
 <div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Products</h1>
            <ul>
                <li><a href="{{url('')}}">Home</a></li>
                <li>Products</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<div class="categories-area pb-0 mb-5 mt-5" style=" background-color: #100f0f0f;">
    <div class="container">
        {{-- <div class="section-title">
            <h2>Shop by Brands</h2>
        </div> --}}
        <div class="categories-slides owl-carousel owl-theme">
            {{-- {{dd($brands)}} --}}
            @foreach($brands as $brand)
            <div class="single-brands-box">
                <a href="{{url('brand/products')}}?brand_name={{$brand['brand_name']}}&brand_id={{$brand['id']}}" class="d-block">
                    <img src="{{$brand['image_url']}}" alt="brands" class="brands" style=" width: 120px; height: 100px; background-size: cover; height: fit-content; margin-top: 24px;">
                </a>
            </div>
            @endforeach
          
            
        </div>
    </div>
</div>

<!-- Start Products Area -->
<div class="products-area ptb-50">
    <div class="container">
        <div class="row" style="margin-bottom: 50px;">
            
            <div class="col-lg-8 col-md-12">
                <div class="patoi-grid-sorting row align-items-center">
                    <div class="col-lg-6 col-md-6 result-count">
                        <p>We found <span class="count">{{count($datas)}}</span> products available for you</p>
                    </div>
                    <div class="col-lg-6 col-md-6 ordering">
                        <div class="select-box">
                            <label>Sort By:</label>
                            <form action="{{url('filter')}}" method="POST" >
                                @csrf
                                <select id="sortBy" name="sort">
                                    <option value="all"@if(old('sort')=='all') selected @endif>Default</option>
                                    <option value="sort-by-popularity"@if(old('sort-by-popularity')=='all') selected @endif>Popularity</option>
                                    <option value="sort-by-date"@if(old('sort')=='sort-by-date') selected @endif>Latest</option>
                                    <option value="price-low-to-high"@if(old('sort')=='price-low-to-high') selected @endif>Price: low to high</option>
                                    <option value="price-high-to-low"@if(old('sort')=='price-high-to-low') selected @endif>Price: high to low</option>
                                </select>
                            </form>
                           
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    {{-- {{dd($datas['data'])}} --}}
                    @foreach($datas as $data)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="{{url('product/detail')}}?product={{$data['id']}}&productname={{$data['product_name']}}" class="d-block">
                                    <img src="{{$data['productimage']['image_url']}}" alt="products-image">
                                </a>
                                <ul class="products-button">
                                     <li><a data-cpid={{$data['id']}} data-pprice={{$data['discounted_price']}} data-tax={{$data['tax']}} data-img={{$data['productimage']['image_url']}} data-pship={{$data['shipping_cost']}} data-pname={{$data['product_name']}} class="cart_button_home"><i class='bx bx-cart-alt'></i></a></li>
                                   @if(Session::has('user_id') && Session::has('token'))
                                    <li><a data-cpidw="{{$data['id']}}" class="add-to-wishlist"><i class='bx bx-heart'></i></a></li>
                                    @endif
                                    <li><a href="{{url('product/detail')}}?product={{$data['id']}}&productname={{$data['product_name']}}"><i class='bx bx-link-alt'></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3><a href="{{url('product/detail')}}?product={{$data['id']}}&productname={{$data['product_name']}}">{{$data['product_name']}}</a></h3>
                                <div class="price">
                                    <span class="new-price">AED{{$data['discounted_price']}}</span>
                                    @if($data['product_price']!=0) <span class="old-price">{{$data['product_price']}}</span>@endif
                                </div>
                                @if(count($data['rattings'])!=0)
                                {{-- <div class="rating">
                                    <i class='bx bxs-star' style="color: #afada8;"></i>
                                    <i class='bx bxs-star' style="color: #afada8;"></i>
                                    <i class='bx bxs-star' style="color: #afada8;"></i>
                                    <i class='bx bxs-star' style="color: #afada8;"></i>
                                    <i class='bx bxs-star' style="color: #afada8;"></i>

                                </div>
                                @else --}}
                                <div class="rating">
                                    <i class='bx bxs-star'  style="@if($data['rattings'][0]['avg_ratting']>=1) color:#facb11; @else color: #afada8;  @endif"  ></i>
                                    <i class='bx bxs-star' style="@if($data['rattings'][0]['avg_ratting']>=2) color:#facb11; @else color: #afada8;  @endif"></i>
                                    <i class='bx bxs-star' style="@if($data['rattings'][0]['avg_ratting']>=3) color:#facb11; @else color: #afada8;  @endif"></i>
                                    <i class='bx bxs-star' style="@if($data['rattings'][0]['avg_ratting']>=4) color:#facb11; @else color: #afada8;  @endif"></i>
                                    <i class='bx bxs-star' style="@if($data['rattings'][0]['avg_ratting']>=5) color:#facb11; @else color: #afada8;  @endif"></i>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                     
                
                  
                </div>
            </div>
            <div class="col-lg-3 col-md-12 " >
                <aside class="widget-area">
                    <div class="widget widget_categories">
                        <h3 class="widget-title"><span>Categories</span></h3>
                        <ul>
                            @foreach($menus as $category)
                            <li><a href="{{url('products')}}?category={{$category['id']}}&ctegoryname={{$category['category_name']}}" class="nav-link">{{$category['category_name']}}</a></li>
                            @if(count($category['subcategory'])!=0)
                            <ul style="margin-left: 25px">
                                @foreach($category['subcategory'] as $subcategory)
                                <li><a href="{{url('products')}}?category={{$category['id']}}&ctegoryname={{$category['category_name']}}&subcategory={{$subcategory['id']}}&subcategoryname={{$subcategory['subcategory_name']}}">{{$subcategory['subcategory_name']}}</a></li>
                                @endforeach
                            </ul>
                            @endif
                            @endforeach
                            
                            
                        </ul>
                    </div>
                    {{-- <div class="widget widget_price_filter">
                        <h3 class="widget-title"><span>Filter by Price</span></h3>
                        <div class="collection_filter_by_price">
                            <input class="js-range-of-price" type="text" data-min="0" data-max="1055" name="filter_by_price" data-step="10">
                        </div>
                    </div> --}}
                    <div class="widget widget_patoi_posts_thumb">
                        <h3 class="widget-title"><span>Our Best Sellers</span></h3>
                        @foreach($bestsellers as $bestitem)
                        <article class="item">
                            <a href="{{url('product/detail')}}?product={{$bestitem['id']}}&productname={{$bestitem['product_name']}}" class="thumb">
                                <img src="{{$bestitem['productimage']['image_url']}}" alt="blog-image">
                            </a>
                            <div class="info">
                                <h4 class="title"><a href="{{url('product/detail')}}?product={{$bestitem['id']}}&productname={{$bestitem['product_name']}}">{{$bestitem['product_name']}}</a></h4>
                                {{-- <div class="star-rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div> --}}
                                @if(count($bestitem['rattings'])!=0)
                                {{-- <div class="star-rating">
                                    <i class='bx bxs-star' style="color: #afada8;"></i>
                                    <i class='bx bxs-star' style="color: #afada8;"></i>
                                    <i class='bx bxs-star' style="color: #afada8;"></i>
                                    <i class='bx bxs-star' style="color: #afada8;"></i>
                                    <i class='bx bxs-star' style="color: #afada8;"></i>
    
                                </div>
                                @else --}}
                                <div class="star-rating">
                                    <i class='bx bxs-star'  style="@if($bestitem['rattings'][0]['avg_ratting']>=1) color:#facb11; @else color: #afada8;  @endif"  ></i>
                                    <i class='bx bxs-star' style="@if($bestitem['rattings'][0]['avg_ratting']>=2) color:#facb11; @else color: #afada8;  @endif"></i>
                                    <i class='bx bxs-star' style="@if($bestitem['rattings'][0]['avg_ratting']>=3) color:#facb11; @else color: #afada8;  @endif"></i>
                                    <i class='bx bxs-star' style="@if($bestitem['rattings'][0]['avg_ratting']>=4) color:#facb11; @else color: #afada8;  @endif"></i>
                                    <i class='bx bxs-star' style="@if($bestitem['rattings'][0]['avg_ratting']>=5) color:#facb11; @else color: #afada8;  @endif"></i>
                                </div>
                                @endif
                                <span class="price">AED {{$bestitem['discounted_price']}}</span>
                           
                            </div>
                        </article>
                        @endforeach
                        
                    </div>

                    {{-- <div class="widget widget_categories">
                        <h3 class="widget-title"><span>Brands</span></h3>
                        <ul>
                            @foreach($brands as $brand)
                            <li><a href="{{url('brand/products')}}?brand_name={{$brand['brand_name']}}&brand_id={{$brand['id']}}" class="nav-link">{{$brand['brand_name']}}</a></li>
                           
                            @endforeach
                            
                            
                        </ul>
                    </div> --}}

                    <div class="widget widget_tag_cloud">
                        <h3 class="widget-title"><span>Brands</span></h3>
                        <div class="tagcloud">
                            @foreach($brands as $brand)
                            <a href="{{url('brand/products')}}?brand_name={{$brand['brand_name']}}&brand_id={{$brand['id']}}">{{$brand['brand_name']}}</a>
                            @endforeach
                        </div>
                    </div>
                   
                   
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- End Products Area -->
<script>
 

  $('#sortBy').on('change', function() {
    //var $form = $(this).closest('form');
    $(this).closest('form').submit();
 // alert('jfhgh')
  });

$('.cart_button_home').click(function(e){
 
        e.preventDefault();
   var setting={
           url:'{{url("/add-to-cart")}}',
            dataType:'json',
            type:'post',
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
            data: { 
                product_id: $(this).data('cpid'),
                product_name: $(this).data('pname'),
                qty: 1,
                price: $(this).data('pprice'),
                shipping_cost: $(this).data('pship'),
                tax: $(this).data('tax'),
                image: $(this).data('img')
            },
          
            success:function(response){
             // console.log(response);

             if(response.status==1){
                $('.badgecart').text(response.cart_count);

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
    });


       $('.add-to-wishlist').click(function(e){
    e.preventDefault();
    // $('#review_button').prop('disabled', true);
        $.ajax({
        type: "POST",
        url: '{{url("wishlist-add")}}',
        headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
        data: {
               product_id: $(this).data('cpidw')
             }, 
        success: function(response) {
            if(response.status==1){
                 $("#my_btn_heart").css({'color': 'red'});
                Toastify({
            text: "Product Added",
            className: "info",
            close: true,
            style: {
                background: "#1cad6a",
            }
            }).showToast();
             }
             else{
                Toastify({
            text: 'product already added',
            className: "info",
            close: true,
            style: {
                background: "#e11414",
            }
            }).showToast();
             }
        }
    });
    });

    </script>
@endsection