 @extends('layouts.app')
@section('content')   

 <!-- Main Container -->
  <section class="main-container col2-left-layout">
    <div class="container">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
            <ul>
              <li class="home"> <a href="{{url('')}}" title="Go to Home Page">Home</a> <span>/</span> </li>
              <li> <a href="grid.html" title="">Computers</a> <span>/ </span> </li>
              <li> <a href="grid.html" title="">Components</a> <span>/</span> </li>
              <li> <strong>Motherboard</strong> </li>
            </ul>
          </div>
           <!-- Breadcrumbs End -->
      <div class="row">
        <div class="col-sm-9 col-sm-push-3"> 
          
          <div class="category-description std">
            <div class="slider-items-products">
              <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col1 owl-carousel owl-theme"> 
                  
                  <!-- Item -->
                  <div class="item"> <a href="#"><img alt="" src="{{asset('assets\images\category-img1.jpg')}}"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      <div class="small-tag">Season 2021</div>
                      <h2 class="cat-heading">Televisions</h2>
                      <p>GET 40% OFF &sdot; Free Delivery </p>
                    </div>
                  </div>
                  <!-- End Item --> 
                  
                  <!-- Item -->
                  <div class="item"> <a href="#"><img alt="" src="{{asset('assets\images\category-img2.jpg')}}"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      <div class="small-tag">Xperia Brands</div>
                      <h2 class="cat-heading">Smartwatches</h2>
                      <p>Save 70% on all items</p>
                    </div>
                    <!-- End Item --> 
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="page-title">
            <h2> Computers </h2>
            <p class="font-size-14 text-gray-90 mb-0">Showing 1–35 of 62 results</p>
          </div>
          <article class="col-main">
          <div class="pro-listing">
            <div class="toolbar">
              <div class="row">
	<div class="col-xl-6 col-lg-6 col-sm-4 col-md-4 col-3">
		
			<div class="product-list-grid">
				<ul class="nav">
					<li class="nav-item">
							<a href="#" class="button-grid nav-link active">
								<i class="fa fa-th-large"></i>
							</a>
						</li>
						<li class="nav-item">
							<a href="list.html" class="button-list nav-link">
								<i class="fa fa-bars"></i>
							</a>
						</li>
																						
									</ul>
			</div>
			</div>

	<div class="col-xl-6 col-lg-6 col-sm-8 col-md-8 col-9">
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

		
	</div>
	
</div>
            </div>
            <div class="category-products">
              <ul class="products-grid">
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('assets\products-images\product1.jpg')}}"> </a>
                              <div class="sale-label sale-top-right">- 40% sale</div>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Anti Glare Side Narrow Border Display Laptop</a> </div>
                              <div class="brand">Datsun</div>
                              <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$129.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('assets\products-images\product2.jpg')}}"> </a>
                        
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Point and Shoot Camera with 12x Optical Zoom </a> </div>
                              <div class="brand">Xperia</div>
                              <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"><span class="regular-price"> <span class="price">$88.00</span> </span>  <span class="old-price"><span class="price">$199.00</span></span></div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('assets\products-images\product3.jpg')}}"> </a>
                              <div class="new-label new-top-left">new</div>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Siomons Galaxy N31 Ocean Blue, 8GB RAM, 128GB Storag</a> </div>
                              <div class="brand">Citroen</div>
                              <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$275.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('assets\products-images\product4.jpg')}}"> </a>
                    
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">NoePlus 4K Ultra HD Android Smart LED Television </a> </div>
                                <div class="brand">Flipmart</div>
                              <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$57.00</span> </span> </div>
                                </div>
                               <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                          <div class="item-img">
                    <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('assets\products-images\product5.jpg')}}"> </a>
                        
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Wireless Headphone with Ergonomic Aesthetics </a> </div>
                               <div class="brand">Dealdot</div>
                              <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$119.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('assets\products-images\product6.jpg')}}"> </a>
                
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Health & Fitness Smartwatch with Heart Rate Monitor</a> </div>
                               <div class="brand">Sonet</div>
                              <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$168.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('assets\products-images\product7.jpg')}}"> </a>
               
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">5 Star Direct Cool Single Door Refrigerator</a> </div>
                               <div class="brand">Organtic</div>
                              <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$79.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('assets\products-images\product8.jpg')}}"> </a>
                    
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Mixer Grinder with 3 Stainless Steel Jar</a> </div>
                               <div class="brand">Harrier</div>
                              <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('assets\products-images\product9.jpg')}}"> </a>
              
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Direct Wireless Network Laser Printer</a> </div>
                              <div class="brand">Altima</div>
                              <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$27.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('assets\products-images\product10.jpg')}}"> </a>
               
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Home Security Camera with Alarm System </a> </div>
                               <div class="brand">Marazzo</div>
                              <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$375.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('assets\products-images\product11.jpg')}}"> </a>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Stovekraft Induction Stove with Feather touch </a> </div>
                               <div class="brand">Unicorn</div>
                              <div class="item-content">
                                <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                </li>
                
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('assets\products-images\product12.jpg')}}"> </a>
                       
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Anti Glare Side Narrow Border Display Laptop</a> </div>
                                <div class="brand">Citroen</div>
                              <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$84.00</span> </span> </div>
                                </div>
                               <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                </li>
                
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('assets\products-images\product13.jpg')}}"> </a>
                       
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">NoePlus 4K Ultra HD Android Smart LED Television </a> </div>
                                <div class="brand">Tonrex</div>
                              <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$49.00</span> </span> </div>
                                </div>
                               <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                </li>
                
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('assets\products-images\product14.jpg')}}"> </a>
                       
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Portable Smart Speaker with built-in WiFi, Bluetooth</a> </div>
                                <div class="brand">Nexus</div>
                              <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$169.00</span> </span> </div>
                                </div>
                               <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                </li>
                
                <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                  <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset('assets\products-images\product2.jpg')}}"> </a>
                       
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Siomons Galaxy N31 Ocean Blue, 8GB RAM, 128GB Storag</a> </div>
                                <div class="brand">Boxshop</div>
                              <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$59.00</span> </span> </div>
                                </div>
                               <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                </li>
                
                
                
              </ul>
            </div>
            <div class="pages">
                       <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
            
            <br>
            </div>
            
          </article>
          <!--	///*///======    End article  ========= //*/// --> 
        </div>
        <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
        <div class="widget widget-categories">
            <div class="block-title">Browse Categories</div>
            <div id="accordion" class="accordion">
              <div class="card border-0 mb-2">
                <div class="card-header">
                  <h6 class="mb-0">
              <a class="link-title" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true">Accessories</a>
              </h6>
                </div>
                <div id="collapse1" class="collapse in" data-parent="#accordion">
                  <div class="card-body text-muted">
                    <ul class="list-unstyled">
                                  <li> <a href="#">Headphones</a></li>
                                  <li> <a href="#">Tablets</a></li>
                                  <li> <a href="#">Soundbars</a></li>
                                  <li> <a href="#">Power Banks</a></li>
                                  <li> <a href="#">Mobile Cases</a></li>
                                  <li> <a href="#">Pen Drives</a></li>
                                  <li> <a href="#">Mouse & Keyboards</a></li>
                                  <li> <a href="#">Memory Cards</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card border-0 mb-2">
                <div class="card-header">
                  <h6 class="mb-0">
              <a class="link-title" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Computers</a>
              </h6>
                </div>
                <div id="collapse2" class="collapse" data-parent="#accordion">
                  <div class="card-body text-muted">
                    <ul class="list-unstyled">
                      <li><a href="#">Desktop</a>
                      </li>
                      <li><a href="#">Laptops</a>
                      </li>
                      <li><a href="#">Motherboards</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card border-0 mb-2">
                <div class="card-header">
                  <h6 class="mb-0">
              <a class="link-title" data-toggle="collapse" data-parent="#accordion" href="#collapse3">Appliances</a>
              </h6>
                </div>
                <div id="collapse3" class="collapse" data-parent="#accordion">
                  <div class="card-body text-muted">
                    <ul class="list-unstyled">
                      <li><a href="#">Vacuum Cleaners</a>
                      </li>
                      <li><a href="#">Air Coolers</a>
                      </li>
                      <li><a href="#">Inverters</a>
                      </li>
                      <li><a href="#">Immersion Rods</a>
                      </li>
                      <li><a href="#">Water Purifiers</a>
                      </li>
                      <li><a href="#">Voltage Stabilizers</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card border-0 mb-2">
                <div class="card-header">
                  <h6 class="mb-0">
              <a class="link-title" data-toggle="collapse" data-parent="#accordion" href="#collapse4">Cameras & Photography</a>
              </h6>
                </div>
                <div id="collapse4" class="collapse" data-parent="#accordion">
                  <div class="card-body text-muted">
                    <ul class="list-unstyled">
                      <li><a href="#">DSLR & Mirrorless</a>
                      </li>
                      <li><a href="#">Bridge Cameras</a>
                      </li>
                      <li><a href="#">Sports & Action</a>
                      </li>
                      <li><a href="#">Tripods</a>
                      </li>
                      <li><a href="#">Camera Lens</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card border-0 mb-2">
                <div class="card-header">
                  <h6 class="mb-0">
              <a class="link-title" data-toggle="collapse" data-parent="#accordion" href="#collapse5">Refrigerators</a>
              </h6>
                </div>
                <div id="collapse5" class="collapse" data-parent="#accordion">
                  <div class="card-body text-muted">
                    <ul class="list-unstyled">
                      <li><a href="#">Single Door</a>
                      </li>
                      <li><a href="#">Double Door</a>
                      </li>
                      <li><a href="#">Triple Door</a>
                      </li>
                       <li><a href="#">Side by Side</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card border-0">
                <div class="card-header">
                  <h6 class="mb-0">
              <a class="link-title" data-toggle="collapse" data-parent="#accordion" href="#collapse6">Watches</a>
              </h6>
                </div>
                <div id="collapse6" class="collapse" data-parent="#accordion">
                  <div class="card-body text-muted">
                    <ul class="list-unstyled">
                      <li><a href="#">Waterproof</a>
                      </li>
                      <li><a href="#">Automatic</a>
                      </li>
                      <li><a href="#">Stylish</a>
                      </li>
                      <li><a href="#">Metal</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="widget widget-filter">
                    <div class="block-title">Filter</div>
                    
            <div class="widget-brand">
            <h5 class="widget-title">Brand</h5>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="brandCheck1">
              <label class="custom-control-label" for="brandCheck1"> Citroen</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="brandCheck2">
              <label class="custom-control-label" for="brandCheck2"> Tiagoo</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="brandCheck3">
              <label class="custom-control-label" for="brandCheck3"> Organtic</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="brandCheck4">
              <label class="custom-control-label" for="brandCheck4"> Dealsdot</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="brandCheck5">
              <label class="custom-control-label" for="brandCheck5"> Harrier</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="brandCheck6">
              <label class="custom-control-label" for="brandCheck6"> Unicorn</label>
            </div>
          </div>  
          
          <div class="widget-color">
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
            
          </div>  
          
          <div class="widget-ratings">
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
           
          </div>    
                    
          <div class="widget-price">
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

          <label for="one">$</label>
          <input id="one">
        </div>
        <div class="price-wrap_line">-</div>
        <div class="price-wrap-2">
          <label for="two">$</label>
          <input id="two">

        </div>
      </div>
    </div>
  </fieldset>
</div>
          </div>
          </div>
          
          
          
          
          
          
          
     
            <div class="featured-add-box">
              <div class="featured-add-inner"> <a href="#"> <img src="{{asset('assets\images\hot-trends-banner.jpg')}}" alt="f-img"></a>
                <div class="banner-content">
                <div class="banner-text">Clearance Sale</div>
                <div class="banner-text1">Hot <span>Sale</span> </div>
                <p>save upto 20%</p>
                 </div>
              </div>
            </div>
   
          <div class="widget-latest">
            <div class="block-title"> Top Rated Products</div>
            <div class="block-content">
              <ul class="product-list">
                <li class="item">
                      <figure class="featured-thumb"> <a href="#"> <img src="{{asset('assets\products-images\product1.jpg')}}" alt="product image"> </a> </figure>
                  <!--featured-thumb-->
                  <div class="content-info">
                   <a href="grid.html" title="Lorem ipsum dolor sit amet">Anti Glare Side Narrow Border Display Laptop</a>
                   <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                   <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$179.00</span> </span> </div>
                      </div>
                      
                    </div>
                  </div>
              
            </li>
               <li class="item">
                      <figure class="featured-thumb"> <a href="#"> <img src="{{asset('assets\products-images\product2.jpg')}}" alt="product image"> </a> </figure>
                  <!--featured-thumb-->
                  <div class="content-info">
                   <a href="grid.html" title="Lorem ipsum dolor sit amet"> Point and Shoot Camera with 12x Optical Zoom </a>
                   <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                   <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$229.00</span> </span> </div>
                      </div>
                      
                    </div>
                  </div>
              
            </li>
            <li class="item">
                      <figure class="featured-thumb"> <a href="#"> <img src="{{asset('assets\products-images\product3.jpg')}}" alt="product image"> </a> </figure>
                  <!--featured-thumb-->
                  <div class="content-info">
                   <a href="grid.html" title="Lorem ipsum dolor sit amet">Siomons Galaxy N31 Ocean Blue, 8GB RAM</a>
                   <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                   <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$68.00</span> </span> </div>
                      </div>
                      
                    </div>
                  </div>
              
            </li>
            <li class="item">
                      <figure class="featured-thumb"> <a href="#"> <img src="{{asset('assets\products-images\product4.jpg')}}" alt="product image"> </a> </figure>
                  <!--featured-thumb-->
                  <div class="content-info">
                   <a href="grid.html" title="Lorem ipsum dolor sit amet">NoePlus 4K Ultra HD Android Smart LED Television </a>
                   <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                   <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$89.00</span> </span> </div>
                      </div>
                      
                    </div>
                  </div>
              
            </li>
            <li class="item">
                      <figure class="featured-thumb"> <a href="#"> <img src="{{asset('assets\products-images\product6.jpg')}}" alt="product image"> </a> </figure>
                  <!--featured-thumb-->
                  <div class="content-info">
                   <a href="grid.html" title="Lorem ipsum dolor sit amet">Health & Fitness watch with Heart Rate Monitor</a>
                   <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                   <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$57.00</span> </span> </div>
                      </div>
                      
                    </div>
                  </div>
              
            </li>
              </ul>
           
            </div>
          </div>
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
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product12.jpg')}}"> </a>
                        <div class="new-label new-top-left">new</div>
                        <div class="box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                            <li><a class="link-compare" href="compare.html"></a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Anti Glare Side Narrow Border Display Laptop</a> </div>
                        <div class="brand">Tonrex</div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item -->
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product11.jpg')}}"> </a>
                        <div class="box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                            <li><a class="link-compare" href="compare.html"></a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Stovekraft Induction Stove with Feather touch </a> </div>
                        <div class="brand">Unicorn</div>
                        <div class="item-content">
                          <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$325.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                <!-- Item -->
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product10.jpg')}}"> </a>
                        <div class="box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                            <li><a class="link-compare" href="compare.html"></a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Home Security Camera with Alarm System </a> </div>
                        <div class="brand">Harrier</div>
                        <div class="item-content">
                          <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$245.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item -->
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product6.jpg')}}"> </a>
                        <div class="new-label new-top-left">new</div>
                        <div class="box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                            <li><a class="link-compare" href="compare.html"></a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Fitness Smartwatch with Heart Rate Monitor </a> </div>
                        <div class="brand">Cruiser</div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item -->
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product8.jpg')}}"> </a>
                        <div class="box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                            <li><a class="link-compare" href="compare.html"></a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Mixer Grinder with 3 Stainless Steel Jar</a> </div>
                        <div class="brand">Flipmart</div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item -->
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product7.jpg')}}"> </a>
                        <div class="box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                            <li><a class="link-compare" href="compare.html"></a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">5 Star Direct Cool Single Door Refrigerator</a> </div>
                        <div class="brand">Nexus</div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item -->
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product9.jpg')}}"> </a>
                        <div class="box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                            <li><a class="link-compare" href="compare.html"></a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Direct Wireless Network Laser Printer</a> </div>
                        <div class="brand">Dealsdot</div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
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
  function hasScrolled() {
          var st = $(this).scrollTop();
          
          // Make sure they scroll more than delta
          if(Math.abs(lastScrollTop - st) <= delta)
              return;
          
          // If they scrolled down and are past the navbar, add class .nav-up.
          // This is necessary so you never see what is "behind" the navbar.
          if (st > lastScrollTop && st > navbarHeight){
              // Scroll Down
              $('header').removeClass('nav-down').addClass('nav-up');
          } else {
              // Scroll Up
              if(st + $(window).height() < $(document).height()) {
                  $('header').removeClass('nav-up').addClass('nav-down');
              }
          }
          
          lastScrollTop = st;
        }
    
</script>
<script>
        $(document).ready(function () {
          if (jQuery('.mega-menu-category').is(':visible')) {
            jQuery('.mega-menu-category').slideUp();
        }
           });
    </script>
  @endsection