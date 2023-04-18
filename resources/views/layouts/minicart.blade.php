             @php
                 $data = [];
             @endphp
             <!-- Top Cart -->
             <div class="mini-cart">
                 <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a
                         href="{{ url('cart') }}"> <span class="cart_count"
                             id="cart_count">{{ collect($data)->sum('qty') }}</span>
                     </a> </div>
                 <div>
                     <div class="top-cart-content">
                         <!--block-subtitle-->
                         <ul class="mini-products-list" id="cart-sidebar">
                             @foreach ($data as $item)
                             @endforeach
                         </ul>
                         <!--actions-->
                         <div class="actions">
                             <button class="btn-checkout" title="Checkout" type="button"
                                 @if (session()->get('user_id')) onclick="window.location='{{ url('checkout') }}'" @else  onclick="$('#myModalsignin').modal('show');" @endif><span>Checkout</span>
                             </button>
                             <a href="{{ url('cart') }}" class="view-cart"><span>View Cart</span></a>
                         </div>

                     </div>
                 </div>
             </div>
             <!-- Top Cart -->
