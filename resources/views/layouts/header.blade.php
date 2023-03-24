 <!-- Header -->
 @php
   $categoryList=categoryList();
   
 @endphp
    <header>
      <div class="top-nav">
        <div class="container">
          <div class="header-strip-wrap">


            <div class="delivery-section">

              <span class="icons" href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                  <path fill="currentColor" d="M4 16h12v2H4zm-2-5h10v2H2z" />
                  <path fill="currentColor"
                    d="m29.919 16.606l-3-7A.999.999 0 0 0 26 9h-3V7a1 1 0 0 0-1-1H6v2h15v12.556A3.992 3.992 0 0 0 19.142 23h-6.284a4 4 0 1 0 0 2h6.284a3.98 3.98 0 0 0 7.716 0H29a1 1 0 0 0 1-1v-7a.997.997 0 0 0-.081-.394ZM9 26a2 2 0 1 1 2-2a2.002 2.002 0 0 1-2 2Zm14-15h2.34l2.144 5H23Zm0 15a2 2 0 1 1 2-2a2.002 2.002 0 0 1-2 2Zm5-3h-1.142A3.995 3.995 0 0 0 23 20v-2h5Z" />
                </svg>
              </Span>

              <!-- <img src="https://api.iconify.design/carbon:delivery.svg" alt="Fast &amp; Free Delivery" class="delivery-icon"> -->
              <span class="delivery-content">Fast & Free Delivery</span>

            </div>

            <div class="delivery-section">

              <span class="icons" href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 20 20">
                  <path fill="currentColor"
                    d="M10 2.5a2.5 2.5 0 0 0-4 2V6H5a1 1 0 0 0-1 1v8a3 3 0 0 0 3 3h6.5a2.5 2.5 0 0 0 2.5-2.5V7a1 1 0 0 0-1-1h-1V4.5a2.5 2.5 0 0 0-4-2Zm-3 2a1.5 1.5 0 1 1 3 0V6H7V4.5Zm3.667-1.248A1.5 1.5 0 0 1 13 4.5V6h-2V4.5c0-.454-.121-.88-.333-1.248ZM7 17a2 2 0 0 1-2-2V7h6v8.5c0 .563.186 1.082.5 1.5H7Zm8-1.5a1.5 1.5 0 0 1-3 0V7h3v8.5Z" />
                </svg>
              </span>
              <span class="delivery-content">Shop from over 1 million products</span>

            </div>

            <div class="delivery-section">

              <span class="icons" href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256">
                  <path fill="currentColor"
                    d="M184 104v32a8 8 0 0 1-8 8H99.3l10.4 10.3a8.1 8.1 0 0 1 0 11.4a8.2 8.2 0 0 1-11.4 0l-24-24a8.1 8.1 0 0 1 0-11.4l24-24a8.1 8.1 0 0 1 11.4 11.4L99.3 128H168v-24a8 8 0 0 1 16 0Zm48-48v144a16 16 0 0 1-16 16H40a16 16 0 0 1-16-16V56a16 16 0 0 1 16-16h176a16 16 0 0 1 16 16Zm-16 144V56H40v144Z" />
                </svg>
              </span>
              <span class="delivery-content">Free Returns</span>

            </div>

          </div>

        </div>
      </div>

      <div class="container">
        <div class="positionsa">
          <div id="bkgOverlay" class="backgroundOverlay"></div>

          <div id="delayedPopup" class="delayedPopupWindow">
            <!-- This is the close button -->
            <a href="#" id="btnClose" title="Click here to close this deal box.">[ X ]</a>
            <!-- This is the left side of the popup for the description -->

            <!-- Begin MailChimp Signup Form -->
            <div class="new-con">

              <div class="left">
              
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus reiciendis. </p>
              
              </div>
              <div class="right">

                <div class="title">
                  <h1>Sign In</h1>
                </div>

                <form>
                  <label>Your email</label>
                  <input type="email" name="" placeholder="email">
                  <label>Password</label>
                  <input type="password" name="" placeholder="password">
                  <button class="signin" type="button">SIGN IN</button>
                  <button class="signUp" type="button">SIGN UP</button>
                </form>


              </div>

            </div>


          </div>





          <!-- End MailChimp Signup Form -->
        </div>




        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 logo-block">
            <!-- Header Logo -->
            <div class="logo"> <a title="Citroen" href="index.html"><img alt="Citroen" src="{{asset('assets/images/logo.png')}}"> </a>
            </div>
            <!-- End Header Logo -->
          </div>
          <div class="col-lg-7 col-md-6 col-sm-6 col-xs-3 hidden-xs category-search-form">
            <div class="search-box">
              <form id="search_mini_form" action="{{url('search')}}" method="get">
                <!-- Autocomplete End code -->
                <ul class="categories-filter animate-dropdown">
                  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown"
                      href="category.html">Categories <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">                   
                      @foreach ($categoryList as $category)
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{url('products?category_id='.$category->id)}}">- {{$category->category_name}}</a></li>
                      @endforeach
                    </ul>
                  </li>
                </ul>
                <input id="search" type="text" name="search" placeholder="Search entire store here..." class="searchbox"
                  maxlength="128" value={{request()->search}}>
                <button type="submit" title="Search" class="search-btn-bg" id="submit-button"></button>
              </form>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 card_wishlist_area">
            <div class="mm-toggle-wrap" open-val="0">
              <div class="mm-toggle"><i class="fa fa-bars"></i><span class="mm-label">Menu</span> </div>
            </div>
            <div class="yujhs">
              <div class="dropdown block-language-wrapper"> <a href="#"> <img src="{{asset('assets/images/arabia.png')}}" alt="language">
                  UAE </a>
              </div>
              <div class="fl-links">
                <div class="no-js">
                  <a href="#" title="Company" class="clicker" data-toggle="modal" data-target="#myModalsignin"></a>
                  <!-- <div class="fl-nav-links">
                    <ul class="links">
                      <li><a href="dashboard.php" title="My Account">My Account</a></li>
                      <li><a href="wishlist.php" title="Wishlist">Wishlist</a></li>
                      <li><a href="checkout.php" title="Checkout">Checkout</a></li>
                      <li class="last"><a href="login.php" title="Login"><span>Login</span></a></li>
                    </ul>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="top-cart-contain">
              <!-- Top Cart -->
              <div class="mini-cart">
                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a
                    href="shopping_cart.html"> <span class="cart_count">2</span>
                  </a> </div>
                <div>
                  <div class="top-cart-content">
                    <!--block-subtitle-->
                    <ul class="mini-products-list" id="cart-sidebar">
                      <li class="item first">
                        <div class="item-inner"> <a class="product-image" title="Retis lapen casen" href="#l"><img
                              alt="Retis lapen casen" src="{{asset('assets/products-images/product6.jpg')}}"> </a>
                          <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a>
                            </div>
                            <p class="product-name"><a href="#">Health & Fitness Smartwatch with Heart Rate Monitor</a>
                            </p>
                            <div class="count-number">
                              <form id='myform' method='POST' class='quantity' action='#'>
                                <input type='button' value='-' class='qtyminus minus' field='quantity' />
                                <input type='text' name='quantity' value='0' class='qty' />
                                <input type='button' value='+' class='qtyplus plus' field='quantity' />
                              </form>
                            </div>
                            1 x <span class="price">$179.99</span>

                          </div>
                        </div>
                      </li>
                      <li class="item last">
                        <div class="item-inner"> <a class="product-image" title="Retis lapen casen"
                            href="product_detail.html"><img alt="Retis lapen casen" src="{{asset('assets/products-images/product3.jpg')}}">
                          </a>
                          <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a>
                            </div>
                            <p class="product-name"><a href="#">Siomons Galaxy N31 Ocean Blue, 8GB RAM, 128GB Storag</a>
                            </p>
                            <div class="count-number">
                              <form id='myform' method='POST' class='quantity' action='#'>
                                <input type='button' value='-' class='qtyminus minus' field='quantity' />
                                <input type='text' name='quantity' value='0' class='qty' />
                                <input type='button' value='+' class='qtyplus plus' field='quantity' />
                              </form>
                            </div>
                            1 x <span class="price">$80.00</span>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <!--actions-->
                    <div class="actions">
                      <button class="btn-checkout" title="Checkout" type="button"><span>Checkout</span> </button>
                      <a href="shopping_cart.html" class="view-cart"><span>View Cart</span></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Top Cart -->
              <div id="ajaxconfig_info" style="display:none"> <a href="#/"></a>
                <input value="" type="hidden">
                <input id="enable_module" value="1" type="hidden">
                <input class="effect_to_cart" value="1" type="hidden">
                <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
              </div>
            </div>
            <!-- thm wishlist -->
          </div>
        </div>
      </div>
      <nav class="hidden-xs">
        <div class="nav-container">
          <div class="col-md-3 col-xs-12 col-sm-3">
            <div class="mega-container visible-lg visible-md visible-sm">
              <div class="navleft-container">
                <div class="mega-menu-title">
                  <h3><i class="fa fa-bars" aria-hidden="true"></i> All Categories</h3>
                </div>
                <div class="mega-menu-category">
                  <ul class="nav">
                    @foreach ($categoryList as $category)
                    @if(empty($category->subcategory))
                    <li class="nosub"><a href="{{url('products?category_id='.$category->id)}}"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> {{$category->category_name}}
                      </a>
                    </li>
                    @else
                    <li class="dropdown has-sub wide"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                          class="fa fa-long-arrow-right" aria-hidden="true"></i>{{$category->category_name}}</a>
                      <div class="dropdown-menu wrap-popup">
                        <div class="popup">
                          <div class="row">
                              @foreach($category->subcategory as $subcategory)
                            <div class="col-md-4 col-sm-6">
                              <h3>{{$subcategory->subcategory_name}}</h3>
                              <ul class="nav">
                                @foreach($subcategory->inner_category as $inner_category)
                                <li> <a href="{{url('products?category_id='.$category->id.'&subcategory_id='.$subcategory->id.'&innersubcategory_id='.$inner_category->id)}}"><span>{{$inner_category->innersubcategory_name}}</span></a> </li>
                                @endforeach
                              </ul>
                            </div>
                            @if($loop->iteration%3==0)
                           </div>
                          <div class="row">
                            @endif
                              @endforeach
                          </div>
                        </div>
                      </div>
                    @endif
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- features box -->
          <div class="our-features-box hidden-xs">
            <div class="features-block">
              <div class="col-lg-9 col-md-9 col-xs-12 col-sm-9 offer-block">
                @foreach($categoryList as $category)
                 <a href="{{url('products?category_id='.$category->id)}}">{{$category->category_name}}</a>
                 @if($loop->iteration>=5) @break @endif
                @endforeach
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header -->