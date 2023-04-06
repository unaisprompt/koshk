 <!-- Footer -->
    <footer class="footer">
      <div class="news-letter-form">
        <div class="container">
          <div class="row">
            <div class="newsletter-wrap">
              <div class="col-xs-12">
                <div class="newsletter">
                  <form>
                    <div>
                      <h4><span>Sign up to Newsletter</span></h4>
                      <input type="text" placeholder="Enter your email address" class="input-text"
                        title="Sign up for our newsletter" id="email_news" name="email">
                      <button type="button" onclick="newsLetter()" class="subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--newsletter-->

      <div class="footer-middle">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="footer-column pull-left">
                <h4>Shopping Guide</h4>
                <ul class="links">
                  <li><a href="blog.html" title="How to buy">Blog</a></li>
                  <li><a href="faq.html" title="FAQs">FAQs</a></li>
                  <li><a href="#" title="Payment">Payment</a></li>
                  <li><a href="#" title="Shipment">Shipment</a></li>
                  <li><a href="#" title="Where is my order?">Where is my order?</a></li>
                  <li><a href="#" title="Return policy">Return policy</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="footer-column pull-left">
                <h4>Style Advisor</h4>
                <ul class="links">
                  <li><a href="login.html" title="Your Account">Your Account</a></li>
                  <li><a href="#" title="Information">Information</a></li>
                  <li><a href="#" title="Addresses">Addresses</a></li>
                  <li><a href="#" title="Addresses">Discount</a></li>
                  <li><a href="#" title="Orders History">Orders History</a></li>
                  <li><a href="#" title="Order Tracking">Order Tracking</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="footer-column pull-left">
                <h4>Information</h4>
                <ul class="links">
                  <li><a href="sitemap.html" title="Site Map">Site Map</a></li>
                  <li><a href="#" title="Search Terms">Search Terms</a></li>
                  <li><a href="#" title="Advanced Search">Advanced Search</a></li>
                  <li><a href="about_us.html" title="About Us">About Us</a></li>
                  <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
                  <li><a href="#" title="Suppliers">Suppliers</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <h4>Contact Us</h4>
              <div class="contacts-info">
                <address>
                  <i class="add-icon"></i>{{CmsPage()['settings']['address']}}
                </address>
                <div class="phone-footer"><i class="phone-icon"></i>+971 {{CmsPage()['settings']['contact']}}</div>
                <div class="email-footer"><i class="email-icon"></i><a href="mailto:{{CmsPage()['settings']['email']}}">{{CmsPage()['settings']['email']}}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12">
            <div class="social">
              <ul>
                @foreach(CmsPage()['social_media_links'] as $social_media_link)
                <style>
                  .social .{{$social_media_link['name']}} a:before {
                        content: "\{{$social_media_link['unicode']}}";
                        font-family: FontAwesome;
                    }
                    .social .{{$social_media_link['name']}} a {
                        background: {{$social_media_link['color']}};
                        font-size: 18px;
                        border-radius: 999px;
                        line-height: 35px;
                        display: inline-block;
                        width: 35px;
                        height: 35px;
                        color: #fff;
                        text-align: center;
                        padding: 0;
                    }
                    .social .{{$social_media_link['name']}} a:hover {
                        background: {{$social_media_link['color']}};
                    }
                </style>
                <li class="{{$social_media_link['name']}}"><a href="{{$social_media_link['link']}}"></a></li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-xs-12 coppyright"> &copy; {{CmsPage()['settings']['copyright']}}. </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
  </div>
  <!-- mobile menu -->
  <div id="mobile-menu">
    <ul>
      <li>
        <div class="mm-search">
          <form id="search1" name="search">
            <div class="input-group">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
              </div>
              <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
            </div>
          </form>
        </div>
      </li>
      <li> <a href="#">Home</a>
      </li>
      <li> <a href="#">Computers</a>
        <ul>
          <li> <a href="#" class="">Laptop</a>
            <ul>
              <li> <a href="grid.html"><span>Microsoft</span></a> </li>
              <li> <a href="grid.html"><span>Lenova</span></a> </li>
              <li> <a href="grid.html"><span>Apple</span></a> </li>
              <li> <a href="grid.html"><span>Touchscreen</span></a> </li>
            </ul>
          </li>
          <li> <a href="grid.html">Printers</a>
            <ul>
              <li> <a href="grid.html">Scanners</a> </li>
              <li> <a href="grid.html">3D Printers</a> </li>
              <li> <a href="grid.html">Fax Machines</a> </li>
              <li> <a href="grid.html">Connectors</a> </li>
            </ul>
          </li>
          <li> <a href="grid.html">Components</a>
            <ul>
              <li> <a href="grid.html">Hard Drives</a> </li>
              <li> <a href="grid.html">Motherboards</a> </li>
              <li> <a href="grid.html">Graphic Cards </a> </li>
              <li> <a href="grid.html">Processors</a> </li>
            </ul>
          </li>
          <li> <a href="grid.html">Accessories</a>
            <ul>
              <li> <a href="grid.html">Keyboards </a> </li>
              <li> <a href="grid.html">WebCams</a> </li>
              <li> <a href="grid.html">Batteries</a> </li>
              <li> <a href="grid.html">Speakers</a> </li>
            </ul>
          </li>
        </ul>
      </li>
      <li> <a href="grid.html">Appliances</a>
        <ul>
          <li> <a href="grid.html" class="">Kitchen</a>
            <ul class="level1">
              <li> <a href="grid.html">Refrigerators</a> </li>
              <li> <a href="grid.html">Dishwashers</a> </li>
              <li> <a href="grid.html">Microwaves</a> </li>
              <li> <a href="grid.html">Tosters</a> </li>
            </ul>
          </li>
          <li> <a href="grid.html">Cameras</a>
            <ul class="level1">
              <li> <a href="grid.html"><span>Accessories</span></a> </li>
              <li> <a href="grid.html"><span>Binoculars</span></a> </li>
              <li> <a href="grid.html"><span>Telescopes</span></a> </li>
              <li> <a href="grid.html"><span>Camcorders</span></a> </li>
            </ul>
          </li>
          <li> <a href="grid.html">Desktops</a>
            <ul class="level1">
              <li> <a href="grid.html"><span>Routers &amp; Modems</span></a> </li>
              <li> <a href="grid.html"><span>CPUs, Processors</span></a> </li>
              <li> <a href="grid.html"><span>PC Gaming Store</span></a> </li>
              <li> <a href="grid.html"><span>Components</span></a> </li>
            </ul>
          </li>
          <li> <a href="#.html">Mobile Phones</a>
            <ul class="level1">
              <li> <a href="grid.html"><span>Apple</span></a> </li>
              <li> <a href="grid.html"><span>Samsung</span></a> </li>
              <li> <a href="grid.html"><span>Motorola</span></a> </li>
              <li> <a href="grid.html"><span>Lenovo</span></a> </li>
            </ul>
          </li>
        </ul>
      </li>
      <li> <a href="grid.html"> Televisions </a></li>
      <li> <a href="grid.html"> Cameras</a></li>
      <li><a href="grid.html"> Mobiles, Tablets</a> </li>
      <li><a href="grid.html"> Refrigerators</a> </li>
      <li><a href="grid.html"> Watches</a> </li>
    </ul>
    <div class="top-links">
      <ul class="links">
        <li><a title="My Account" href="login.html">My Account</a> </li>
        <li><a title="Wishlist" href="wishlist.html">Wishlist</a> </li>
        <li><a title="Checkout" href="checkout.html">Checkout</a> </li>
        <li><a title="Blog" href="blog.html"><span>Blog</span></a> </li>
        <li class="last"><a title="Login" href="login.html"><span>Login</span></a> </li>
      </ul>
    </div>
  </div>

  <header class="nav-down css-h5j">
    <ul>
      <li><a class="footer-menu-active" href="#" tabindex="1"><i class="fa fa-home"></i> <br />Home</a></li>
      <li><a href="#" tabindex="2"><i class="fa fa-list-alt"></i> <br />Categories</a></li>
      <li><a href="#" tabindex="3" style="color: #edb22b;"><i class="fa fa-gift"></i> <br />Clearance</a></li>
      <li><a href="#" tabindex="4"><i class="fa fa-user"></i> <br />My Account</a></li>
      <li><a href="#" tabindex="5"><i class="fa fa-shopping-cart"></i> <br />Cart</a></li>
    </ul>
  </header>
