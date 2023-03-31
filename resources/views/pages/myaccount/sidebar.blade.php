<aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">

                        <div class="block block-progress">
                            <div class="block-title ">My Account</div>
                            <div class="block-content">

                                <div class=" col-md-12 profile-btm">
                                    <img class="profile-dp" src="{{session()->get('profile_pic')}}" alt="Profile dp">
                                    <div class="profile-name">
                                        <div class="user-name">Alfred Christ</div>
                                        <span><a href="{{url('logout')}}">Logout</span>
                                    </div>


                                </div>
                                <div class="col-md-12 account-tabs-section extr-margin-bottom">
                                    <ul class="nav flex-column account-tabs">
                                        <li class="nav-item"><a class="nav-link " href="{{url('my-account')}}">Profile</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{url('order-history')}}">Orders</a></li>
                                        <li class="nav-item"><a class="nav-link active" href="{{url('wishlist')}}">Wishlist</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{url('address-list')}}">Address</a></li>
                                    </ul>
                                </div>



         
                            </div>
                        </div>
                        <div class="featured-add-box">
                            <div class="featured-add-inner"> <a href="#"> <img src="{{asset('assets\images\hot-trends-banner.jpg')}}"
                                        alt="f-img"></a>
                                <div class="banner-content">
                                    <div class="banner-text">Clearance Sale</div>
                                    <div class="banner-text1">Hot <span>Sale</span> </div>
                                    <p>save upto 20%</p>
                                </div>
                            </div>
                        </div>

</aside>