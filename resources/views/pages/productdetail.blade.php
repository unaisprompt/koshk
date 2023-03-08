 @extends('layouts.app')
@section('content')   

 <section class="main-container col1-layout">
      <div class="container">
        <div class="row">

          <!-- Breadcrumbs -->
          <div class="breadcrumbs">
            <ul>
              <li class="home"> <a href="index.html" title="Go to Home Page">Home</a> <span>/</span> </li>
              <li> <a href="grid.html" title="">Computers</a> <span>/ </span> </li>
              <li> <a href="grid.html" title="">Components</a> <span>/</span> </li>
              <li> <strong>Motherboard</strong> </li>
            </ul>
          </div>
          <!-- Breadcrumbs End -->

          <div class="col-sm-12 col-xs-12">
         <article class="col-main">
              <div class="product-view">
                <div class="product-essential">
                  <form action="#" method="post" id="product_addtocart_form">
                    <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                    <div class="product-img-box col-lg-5 col-sm-5 col-xs-12">
                      <div class="new-label new-top-left"> New </div>
                      <div class="product-image">
                        <div class="product-full mag"> <img id="product-zoom" data-toggle="magnify"
                            src="{{asset('assets\products-images\product1.jpg')}}" data-zoom-image="{{asset('assets/products-images/product1.jpg')}}"
                            alt="product-image"> </div>
                        <div class="more-views">
                          <div class="slider-items-products">
                            <div id="gallery_01" class="product-flexslider hidden-buttons product-img-thumb">
                              <div class="slider-items slider-width-col4 block-content">



                                <div class="more-views-items"> <a href="#" data-image="{{asset('assets/products-images/product1.jpg')}}"
                                    data-zoom-image="{{asset('assets/products-images/product1.jpg')}}"> <img id="product-zoom0"
                                      src="{{asset('assets/products-images\product1.jpg')}}" alt="product-image"> </a></div>
                                <div class="more-views-items"> <a href="#" data-image="{{asset('assets/products-images/product3.jpg')}}"
                                    data-zoom-image="{{asset('assets/products-images/product3.jpg')}}"> <img id="product-zoom1"
                                      src="{{asset('assets\products-images\product3.jpg')}}" alt="product-image"> </a></div>
                                <div class="more-views-items"> <a href="#" data-image="{{asset('assets/products-images/product4.jpg')}}"
                                    data-zoom-image="{{asset('assets/products-images/product4.jpg')}}"> <img id="product-zoom2"
                                      src="{{asset('assets\products-images\product4.jpg')}}" alt="product-image"> </a></div>
                                <div class="more-views-items"> <a href="#" data-image="{{asset('assets/products-images/product5.jpg')}}"
                                    data-zoom-image="{{asset('assets/products-images/product5.jpg')}}"> <img id="product-zoom3"
                                      src="{{asset('assets\products-images\product5.jpg')}}" alt="product-image"> </a> </div>
                                <div class="more-views-items"> <a href="#" data-image="{{asset('assets/products-images/product6.jpg')}}"
                                    data-zoom-image="{{asset('assets/products-images/product6.jpg')}}"> <img id="product-zoom4"
                                      src="{{asset('assets\products-images\product6.jpg')}}" alt="product-image"> </a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end: more-images -->

                      <div class="add-to-box">
                        <div class="add-to-cart">
                          <button onclick="productAddToCartForm.submit(this)" class="button btn-cart"
                            title="Add to Cart" type="button">Add to Cart</button>
                          <button onclick="productAddToCartForm.submit(this)" class="button btn-buy" title="Add to Cart"
                            type="button">Sold Out</button>

                        </div>

                      </div>
                      <ul class="add-to-links">
                        <li> <a class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a></li>
                        <li><a class="link-compare" href="compare.html"><span>Continue Shopping</span></a></li>
                      </ul>
                    </div>
                    <div class="product-shop col-lg- col-sm-7 col-xs-12">
                      <div class="product-next-prev"> <a class="product-next" href="#"><span></span></a> <a
                          class="product-prev" href="#"><span></span></a> </div>
                      <div class="brand">XPERIA</div>
                      <div class="product-name">
                        <h1>Anti Glare Core i5 9th Genration Side Narrow Border Display Laptop</h1>
                      </div>
                      <div class="rating">
                        <div class="star-rating">
                          <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                        </div>
                        <p class="rating-links"> <a href="#">453 ratings &amp; 61 reviews</a> <span
                            class="separator">|</span> <a href="#">Add Review</a> </p>
                      </div>
                      <div class="price-block">
                        <div class="count-number">
                          <form id='myform' method='POST' class='quantity' action='#'>
                            <input type='button' value='-' class='qtyminus minus' field='quantity' />
                            <input type='text' name='quantity' value='0' class='qty' />
                            <input type='button' value='+' class='qtyplus plus' field='quantity' />
                          </form>
                        </div>
                        <div class="price-box">

                          <p class="availability in-stock"><span>Sold out</span></p>
                          <p class="special-price"> <span class="price-label">Special Price</span> <span
                              id="product-price-48" class="price"> AED 309.99 </span> </p>

                          <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> AED
                              315.99 </span> </p>
                          <p>Free Shipping & Free Delivery</p>

                        </div>
                      </div>

                      <div class="list">
                        <div class="heading">Colors</div>
                        <div class="points">
                          <span style="background-color:rgb(72, 118, 255)"></span>
                          <span style="background-color:rgb(192, 192, 192)"></span>
                          <span style="background-color:rgb(255, 195, 0)"></span>
                        </div>
                      </div>

                      <div class="list">
                        <div class="heading">Highlights</div>
                        <div class="points">
                          <ul>
                            <li>Intel Celeron Dual Core</li>
                            <li>HDD Capacity 1 TB</li>
                            <li>RAM 4 GB DDR4</li>
                            <li>19.5 inch Display</li>
                          </ul>
                        </div>
                      </div>

                      <div class="list">
                        <div class="heading">Description</div>
                        <div class="points">
                          Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc.
                          Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                        </div>
                      </div>

                      <div class="list">
                        <div class="heading">Seller</div>
                        <div class="points">
                          <h4>ThemesGround Retail</h4>
                          <ul>
                            <li>Free Wordwide Shipping</li>
                            <li>30 Days Return Policy</li>
                            <li>Member Discount</li>
                          </ul>
                        </div>
                      </div>







                    </div>
                  </form>
                </div>
                <div class="product-collateral">
                  <div class="add_info">
                    <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                      <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Product Description
                        </a> </li>
                      <li><a href="#product_tabs_tags" data-toggle="tab">Specifications</a></li>
                      <li> <a href="#reviews_tabs" data-toggle="tab">Reviews</a> </li>
                      <li> <a href="#product_tabs_custom" data-toggle="tab">Custom Tab</a> </li>
                      <li> <a href="#product_tabs_custom1" data-toggle="tab">Questions & Answers</a> </li>
                    </ul>
                    <div id="productTabContent" class="tab-content">
                      <div class="tab-pane fade in active" id="product_tabs_description">
                        <div class="std">
                          <h2>Product Description</h2>
                          <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac
                            felis. Donec non erat sed elit bibendum sodales. Donec eu cursus velit. Proin nunc lacus,
                            gravida mollis dictum ut, vulputate eu turpis. Sed felis sapien, commodo in iaculis in,
                            feugiat sed enim. Sed nunc ipsum, fermentum varius dignissim vitae, blandit et ante.Maecenas
                            sagittis, lorem sed congue egestas, lectus purus congue nisl, ac molestie enim ligula nec
                            eros. </p>
                          <p>The keyboard offers a comfortable typing experience, thereby minimizing the load on your
                            hands while working. Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor
                            euismod laoreet eget ac felis. Donec non erat sed elit bibendum sodales. Donec eu cursus
                            velit. Proin nunc lacus, gravida mollis dictum ut, vulputate eu turpis. Sed felis sapien,
                            commodo in iaculis in, feugiat sed enim. </p>
                          <br>
                          <div class="desc-row">
                            <div class="desc-img">
                              <img src="{{asset('assets\images\desc-img1.jpg')}}">
                            </div>
                            <div class="heading">Stylish and Elegant Design</div>
                            <div>
                              <p>Featuring a stylish and stunning design, this laptop from Vaio is a must-buy device
                                that perfectly complements a modern corporate leader’s lifestyle. Aliquam laoreet
                                consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis. Donec
                                non erat sed elit bibendum sodales. Donec eu cursus velit. Proin nunc lacus, gravida
                                mollis dictum ut, vulputate eu turpis. Sed felis sapien, commodo in iaculis in, feugiat
                                sed enim. Sed nunc ipsum, fermentum varius dignissim vitae, blandit et ante.</p>
                            </div>
                          </div>
                          <div class="desc-row">
                            <div class="desc-img align-right">
                              <img src="{{asset('assets\images\desc-img2.jpg')}}">
                            </div>
                            <div class="heading">Lightweight</div>
                            <div>
                              <p>Thanks to its lightweight build, this laptop makes it easy to lift, hold, and open. You
                                can even take it along with you wherever you go, making it your ideal travel companion.
                                Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget
                                ac felis. Donec non erat sed elit bibendum sodales. Donec eu cursus velit. Proin nunc
                                lacus, gravida mollis dictum ut, vulputate eu turpis. Sed felis sapien, commodo in
                                iaculis in, feugiat sed enim. Sed nunc ipsum, fermentum varius dignissim vitae, blandit
                                et ante.</p>
                            </div>
                          </div>
                          <div class="desc-row">
                            <div class="desc-img">
                              <img src="{{asset('assets\images\desc-img4.jpg')}}">
                            </div>
                            <div class="heading">Easy Connectivity</div>
                            <div>
                              <p>This laptop comes with a wide range of I/O ports that let you connect various
                                compatible devices to it. Moreover, the ports are placed on either side of the laptop,
                                making it easy for you to connect your compatible mobile/tablet, storage drives,
                                external displays, and more. Aliquam laoreet consequat malesuada. Integer vitae diam sed
                                dolor euismod laoreet eget ac felis. Donec non erat sed elit bibendum sodales. Donec eu
                                cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate eu turpis.</p>
                            </div>
                          </div>
                          <div class="desc-row">
                            <div class="desc-img align-right">
                              <img src="{{asset('assets\images\desc-img5.jpg')}}">
                            </div>
                            <div class="heading">Ergonomic Keyboard and Hinge</div>
                            <div>
                              <p>Thanks to the ergonomically designed hinge, this laptop's screen tilts down at a
                                slanting angle, enabling you to open it with ease. The keyboard offers a comfortable
                                typing experience, thereby minimizing the load on your hands while working. Aliquam
                                laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis.
                                Donec non erat sed elit bibendum sodales. Donec eu cursus velit. Proin nunc lacus,
                                gravida mollis dictum ut, vulputate eu turpis. Sed felis sapien, commodo in iaculis in,
                                feugiat sed enim. Sed nunc ipsum, fermentum varius dignissim vitae, blandit et ante.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="product_tabs_tags">
                        <div class="box-collateral box-spec">
                          <h3>General</h3>

                          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spec-tbl">
                            <colgroup>
                              <col width="20%">
                              <col>
                            </colgroup>
                            <tr>
                              <th>Sales Package</th>
                              <td>Laptop, Power Adaptor, Laptop Bag, User Guide, Warranty Documents</td>
                            </tr>
                            <tr>
                              <th>Model Number</th>
                              <td>NE15V2IN007P</td>
                            </tr>
                            <tr>
                              <th>Part Number</th>
                              <td>NE15V2IN007P</td>
                            </tr>
                            <tr>
                              <th>Model Name</th>
                              <td>E15 AMD</td>
                            </tr>
                            <tr>
                              <th>Series</th>
                              <td>E Series</td>
                            </tr>
                            <tr>
                              <th>Color
                              <td>Silver</td>
                              </th>
                            </tr>
                            <tr>
                              <th>Type</th>
                              <td>Thin and Light Laptop</td>
                            </tr>
                            <tr>
                              <th>Suitable For</th>
                              <td>Processing & Multitasking</td>
                            </tr>
                            <tr>
                              <th>Battery Backup</th>
                              <td>Upto 8 hours</td>
                            </tr>
                            <tr>
                              <th>MS Office Provided</th>
                              <td>Yes</td>
                            </tr>
                          </table>


                        </div>
                        <div class="box-collateral box-spec">
                          <h3>Processor And Memory Features</h3>

                          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="spec-tbl">
                            <colgroup>
                              <col width="20%">
                              <col>
                            </colgroup>
                            <tr>
                              <th>Processor Brand</th>
                              <td>AMD</td>
                            </tr>
                            <tr>
                              <th>Processor Name</th>
                              <td>Ryzen 5 Quad Core</td>
                            </tr>
                            <tr>
                              <th>SSD</th>
                              <td>Yes</td>
                            </tr>
                            <tr>
                              <th>SSD Capacity</th>
                              <td>512 GB</td>
                            </tr>
                            <tr>
                              <th>RAM</th>
                              <td>8 GB</td>
                            </tr>
                            <tr>
                              <th>RAM Type
                              <td>DDR4</td>
                              </th>
                            </tr>
                            <tr>
                              <th>Processor Variant</th>
                              <td>3500U</td>
                            </tr>
                            <tr>
                              <th>Clock Speed</th>
                              <td>2.1 GHz with Turbo Boost Upto 3.7 GHz</td>
                            </tr>
                            <tr>
                              <th>Graphic Processor</th>
                              <td>AMD Radeon Vega 8</td>
                            </tr>

                          </table>


                        </div>
                      </div>
                      <div class="tab-pane fade" id="reviews_tabs">
                        <div class="woocommerce-Reviews">
                          <div>
                            <h2 class="woocommerce-Reviews-title">2 reviews for <span>Anti Glare Core i5 9th Genration
                                Side Narrow Border Display Laptop</span></h2>
                            <ol class="commentlist">
                              <li class="comment">
                                <div>
                                  <img alt="" src="{{asset('assets\images\member1.png')}}" class="avatar avatar-60 photo">
                                  <div class="comment-text">
                                    <div class="star-rating">
                                      <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                                    </div>
                                    <p class="meta">
                                      <strong>John Doe</strong>
                                      <span>–</span> April 19, 2021
                                    </p>
                                    <div class="description">
                                      <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla
                                        quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Donec rutrum
                                        congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.</p>
                                      <p>Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis
                                        porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget
                                        consectetur sed, convallis at tellus.</p>
                                    </div>
                                  </div>
                                </div>
                              </li><!-- #comment-## -->
                              <li class="comment">
                                <div>
                                  <img alt="" src="{{asset('assets\images\member2.png')}}" class="avatar avatar-60 photo">
                                  <div class="comment-text">
                                    <div class="star-rating">
                                      <span style="width:80%">Rated <strong class="rating">3.00</strong> out of 5</span>
                                    </div>
                                    <p class="meta">
                                      <strong>Stephen Smith</strong> <span>–</span> June 02, 2020
                                    </p>
                                    <div class="description">
                                      <p>Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit.</p>
                                    </div>
                                  </div>
                                </div>
                              </li><!-- #comment-## -->
                            </ol>
                          </div>
                          <div>
                            <div>
                              <div class="comment-respond">
                                <span class="comment-reply-title">Add a review </span>
                                <form action="#" method="post" class="comment-form" novalidate="">
                                  <p class="comment-notes"><span id="email-notes">Your email address will not be
                                      published.</span> Required fields are marked <span class="required">*</span></p>
                                  <div class="comment-form-rating">
                                    <label id="rating">Your rating</label>
                                    <p class="stars">
                                      <span>
                                        <a class="star-1" href="#">1</a>
                                        <a class="star-2" href="#">2</a>
                                        <a class="star-3" href="#">3</a>
                                        <a class="star-4" href="#">4</a>
                                        <a class="star-5" href="#">5</a>
                                      </span>
                                    </p>
                                  </div>
                                  <p class="comment-form-comment">
                                    <label>Your review <span class="required">*</span></label>
                                    <textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea>
                                  </p>
                                  <p class="comment-form-author">
                                    <label for="author">Name <span class="required">*</span></label>
                                    <input id="author" name="author" type="text" value="" size="30" required="">
                                  </p>
                                  <p class="comment-form-email">
                                    <label for="email">Email <span class="required">*</span></label>
                                    <input id="email" name="email" type="email" value="" size="30" required="">
                                  </p>
                                  <div class="form-submit">
                                    <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                  </div>
                                </form>
                              </div><!-- #respond -->
                            </div>
                          </div>
                          <div class="clear"></div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="product_tabs_custom">
                        <div class="product-tabs-content-inner clearfix">
                          <p><strong>Lorem Ipsum</strong><span>&nbsp;is
                              simply dummy text of the printing and typesetting industry. Lorem Ipsum
                              has been the industry's standard dummy text ever since the 1500s, when
                              an unknown printer took a galley of type and scrambled it to make a type
                              specimen book. It has survived not only five centuries, but also the
                              leap into electronic typesetting, remaining essentially unchanged. It
                              was popularised in the 1960s with the release of Letraset sheets
                              containing Lorem Ipsum passages, and more recently with desktop
                              publishing software like Aldus PageMaker including versions of Lorem
                              Ipsum.</span></p>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="product_tabs_custom1">
                        <div class="product-tabs-content-inner clearfix">
                          <div class="faq">
                            <ul>
                              <li>
                                <strong>Is there any issue in display with color shifting? And is the body
                                  metallic?</strong>
                                <p>Featuring a stylish and stunning design, this laptop from Vaio is a must-buy device
                                  that perfectly complements a modern corporate leader’s lifestyle. Aliquam laoreet
                                  consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis. </p>
                                <span>Jhon Doe</span>
                              </li>
                              <li>
                                <strong>Is there any heating issue which is not so normal?</strong>
                                <p>Donec eu cursus velit. Proin nunc lacus, gravida mollis dictum ut, vulputate eu
                                  turpis. Sed felis sapien, commodo in iaculis in, feugiat sed enim. Sed nunc ipsum,
                                  fermentum varius dignissim vitae, blandit et ante.</p>
                                <span>Saraha Smith</span>
                              </li>
                              <li>
                                <strong>Can i install external graphics card?</strong>
                                <p> Integer vitae diam sed dolor euismod laoreet eget ac felis. Donec non erat sed elit
                                  bibendum sodales. Donec eu cursus velit.</p>
                                <span>Stephen Doe</span>
                              </li>
                              <li>
                                <strong>It is useful for coding or not?</strong>
                                <p>Sed felis sapien, commodo in iaculis in, feugiat sed enim. Sed nunc ipsum, fermentum
                                  varius dignissim vitae, blandit et ante.</p>
                                <span>Mark Doe</span>
                              </li>
                              <li>
                                <strong>What is the average battery life?</strong>
                                <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet
                                  eget ac felis. Donec non erat sed elit bibendum sodales.</p>
                                <span>Jhon Doe</span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>



                </div>

                <section class="banner-row irf">
                  <div class="container">
                    <div class="row">
                      <div class="col-12 col-lg-12 col-md-12">
                        <div class="position-relative">
                          <!-- Background -->
                          <img class="img-fluid hover-zoom" src="{{asset('assets/images/popup.jpeg')}}" alt="">
                          <!-- Body -->

                        </div>
                      </div>


                    </div>
                  </div>
                </section>










                <div class="container">

                  <div class="row">

                    <div class="col-sm-12">

                      <div class="owl-carousel owl-theme">

                        <div class="item-video" data-merge="1"><a class="owl-video"
                            href="https://www.youtube.com/watch?v=H3jLkJrhHKQ"></a></div>
                        <div class="item-video" data-merge="2"><a class="owl-video"
                            href="https://www.youtube.com/watch?v=H3jLkJrhHKQ"></a></div>
                        <div class="item-video" data-merge="1"><a class="owl-video"
                            href="https://www.youtube.com/watch?v=H3jLkJrhHKQ"></a></div>
                        <div class="item-video" data-merge="2"><a class="owl-video"
                            href="https://www.youtube.com/watch?v=H3jLkJrhHKQ"></a></div>
                        <div class="item-video" data-merge="3"><a class="owl-video"
                            href="https://www.youtube.com/watch?v=g3J4VxWIM6s"></a></div>
                        <div class="item-video" data-merge="1"><a class="owl-video"
                            href="https://www.youtube.com/watch?v=0fhoIate4qI"></a></div>
                        <div class="item-video" data-merge="2"><a class="owl-video"
                            href="https://www.youtube.com/watch?v=EF_kj2ojZaE"></a></div>
                      </div>

                    </div>

                  </div>

                </div>








                <!-- similar products -->
                <div class="bestsell-pro mt-0 mb-60">




                  <div>
                    <div class="slider-items-products">
                      <div class="bestsell-block">
                        <div class="block-title">
                          <h2>Similar Productsw</h2>
                        </div>
                        <div id="bestsell-slider" class="product-flexslider hidden-buttons">
                          <div class="slider-items slider-width-col4 products-grid block-content">
                            <div class="item">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"> <a class="product-image" title="Retis lapen casen"
                                      href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product12.jpg')}}"> </a>
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
                                    <div class="item-title"> <a title="Retis lapen casen"
                                        href="product_detail.html">Anti Glare Side Narrow Border Display Laptop</a>
                                    </div>
                                    <div class="brand">Tonrex</div>
                                    <div class="star-rating">
                                      <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                                    </div>
                                    <div class="item-content">
                                      <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">AED
                                              88.00</span> </span> </div>
                                      </div>
                                      <div class="action">
                                        <button class="button btn-cart" type="button" title=""
                                          data-original-title="Add to Cart"><i
                                            class="fa fa-shopping-basket"></i></button>
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
                                  <div class="item-img-info"> <a class="product-image" title="Retis lapen casen"
                                      href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product11.jpg')}}"> </a>
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
                                    <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">
                                        Stovekraft Induction Stove with Feather touch </a> </div>
                                    <div class="brand">Unicorn</div>
                                    <div class="item-content">
                                      <div class="star-rating">
                                        <span style="width:60%">Rated <strong class="rating">3.00</strong> out of
                                          5</span>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">AED
                                              325.00</span> </span> </div>
                                      </div>
                                      <div class="action">
                                        <button class="button btn-cart" type="button" title=""
                                          data-original-title="Add to Cart"><i
                                            class="fa fa-shopping-basket"></i></button>
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
                                  <div class="item-img-info"> <a class="product-image" title="Retis lapen casen"
                                      href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product10.jpg')}}"> </a>
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
                                    <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">
                                        Home Security Camera with Alarm System </a> </div>
                                    <div class="brand">Harrier</div>
                                    <div class="item-content">
                                      <div class="star-rating">
                                        <span style="width:60%">Rated <strong class="rating">3.00</strong> out of
                                          5</span>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">AED
                                              245.00</span> </span> </div>
                                      </div>
                                      <div class="action">
                                        <button class="button btn-cart" type="button" title=""
                                          data-original-title="Add to Cart"><i
                                            class="fa fa-shopping-basket"></i></button>
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
                                  <div class="item-img-info"> <a class="product-image" title="Retis lapen casen"
                                      href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product6.jpg')}}"> </a>
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
                                    <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">
                                        Fitness Smartwatch with Heart Rate Monitor </a> </div>
                                    <div class="brand">Cruiser</div>
                                    <div class="star-rating">
                                      <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                                    </div>
                                    <div class="item-content">
                                      <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">AED
                                              88.00</span> </span> </div>
                                      </div>
                                      <div class="action">
                                        <button class="button btn-cart" type="button" title=""
                                          data-original-title="Add to Cart"><i
                                            class="fa fa-shopping-basket"></i></button>
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
                                  <div class="item-img-info"> <a class="product-image" title="Retis lapen casen"
                                      href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product8.jpg')}}"> </a>
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
                                    <div class="item-title"> <a title="Retis lapen casen"
                                        href="product_detail.html">Mixer Grinder with 3 Stainless Steel Jar</a> </div>
                                    <div class="brand">Flipmart</div>
                                    <div class="star-rating">
                                      <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                                    </div>
                                    <div class="item-content">
                                      <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">AED
                                              88.00</span> </span> </div>
                                      </div>
                                      <div class="action">
                                        <button class="button btn-cart" type="button" title=""
                                          data-original-title="Add to Cart"><i
                                            class="fa fa-shopping-basket"></i></button>
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
                                  <div class="item-img-info"> <a class="product-image" title="Retis lapen casen"
                                      href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product7.jpg')}}"> </a>
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
                                    <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">5
                                        Star Direct Cool Single Door Refrigerator</a> </div>
                                    <div class="brand">Nexus</div>
                                    <div class="star-rating">
                                      <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                                    </div>
                                    <div class="item-content">
                                      <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">AED
                                              88.00</span> </span> </div>
                                      </div>
                                      <div class="action">
                                        <button class="button btn-cart" type="button" title=""
                                          data-original-title="Add to Cart"><i
                                            class="fa fa-shopping-basket"></i></button>
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
                                  <div class="item-img-info"> <a class="product-image" title="Retis lapen casen"
                                      href="product_detail.html"> <img alt="" src="{{asset('assets\products-images\product9.jpg')}}"> </a>
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
                                    <div class="item-title"> <a title="Retis lapen casen"
                                        href="product_detail.html">Direct Wireless Network Laser Printer</a> </div>
                                    <div class="brand">Dealsdot</div>
                                    <div class="star-rating">
                                      <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                                    </div>
                                    <div class="item-content">
                                      <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">AED
                                              88.00</span> </span> </div>
                                      </div>
                                      <div class="action">
                                        <button class="button btn-cart" type="button" title=""
                                          data-original-title="Add to Cart"><i
                                            class="fa fa-shopping-basket"></i></button>
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

                <!-- End similar products -->

              </div>
            </article>
            <!--	///*///======    End article  ========= //*/// -->
          </div>
        </div>
      </div>
    
</section>


<script>
        $(document).ready(function () {
          if (jQuery('.mega-menu-category').is(':visible')) {
            jQuery('.mega-menu-category').slideUp();
        }
           });
    </script>
  @endsection 