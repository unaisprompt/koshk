             @php
               $data=[];
             @endphp
             <!-- Top Cart -->
              <div class="mini-cart">
                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a
                    href="{{url('cart')}}"> <span class="cart_count" id="cart_count">{{collect($data)->sum('qty')}}</span>
                  </a> </div>
                <div>
                  <div class="top-cart-content">
                 <!--block-subtitle-->
                 <ul class="mini-products-list" id="cart-sidebar">
                      @foreach($data as $item)
                     
                      @endforeach
                    </ul>
                    <!--actions-->
                    <div class="actions">
                      <button class="btn-checkout" title="Checkout" type="button" @if(session()->get('user_id')) onclick="window.location='{{url("checkout")}}'" @else  onclick="$('#myModalsignin').modal('show');"  @endif><span>Checkout</span> </button>
                      <a href="{{url('cart')}}" class="view-cart"><span>View Cart</span></a>
                    </div>
        
                  </div>
                </div>
              </div>
              <!-- Top Cart -->
              <script>
                       function minicart()
                        {
                              var setting={
                                            url:'{{url("/cart_ajax")}}',
                                            dataType:'json',
                                            type:'get',
                                            headers: {
                                                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                              },
                                          
                                            success:function(response){
                                              $('#cart-sidebar').empty();
                                              response.data.forEach((item)=>
                                             {let html=` <li class="item first">
                                                                                    <div class="item-inner"> <a class="product-image" title="${item.product_name}" href="#">
                                                                                        <img alt="${item.product_name}" src="${item.image_url}"> </a>
                                                                                      <div class="product-details">
                                                                                        <div class="access">
                                                                                            @if(Session::has('user_id'))
                                                                                            <a class="btn-remove1" title="Remove This Item" href="{{url('delete-cart')}}/${item.id}">Remove</a>
                                                                                            @else
                                                                                            <a class="btn-remove1" title="Remove This Item" href="{{url('delete-cart')}}/${item.product_id}">Remove</a>
                                                                                            @endif
                                                                                        </div>
                                                                                        <p class="product-name"><a href="#">${item.product_name}</a>
                                                                                        </p>
                                                                                        <!-- <div class="count-number">
                                                                                          <form id='myform' method='POST' class='quantity' action='#'>
                                                                                            <input type='button' value='-' class='qtyminus minus' field='quantity' />
                                                                                            <input type='text' name='quantity' value='0' class='qty' />
                                                                                            <input type='button' value='+' class='qtyplus plus' field='quantity' />
                                                                                          </form>
                                                                                        </div> -->
                                                                                        ${item.qty} x <span class="price">AED ${item.price}</span>

                                                                                      </div>
                                                                                    </div>
                                                                                  </li>`;
                                                                                  console.log(html);
                                                                                   $('#cart-sidebar').append(html);
                                                                                  });
                                                let totalqty=response.data.map(item=>item.qty).reduce((partialSum, a) => partialSum + a, 0);
                                               
                                                $('#cart_count').html(totalqty);
                                                localStorage.setItem("cartupdate", 0);
                                            },
                                              error: function(xhr) {
                                              
                                          console.log(xhr.responseText); // this line will save you tons of hours while debugging
                                        // do something here because of error
                                        }
                                        };
                                $.ajax(setting);
                        }
                        $(document).ready(function(){
                          minicart();
                          setInterval(function () {
                            if(localStorage.getItem('cartupdate')==1)
                            {
                               minicart();
                            }
                          }, 3000);
                        })
              </script>