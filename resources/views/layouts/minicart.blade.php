             @php
                 $data = [];
             @endphp
             <div class="top-cart-contain">
                 <!-- Top Cart -->
                 <div class="mini-cart" id="mini-cart" onclick="showModalOnMobile()">
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
                 <div id="ajaxconfig_info" style="display:none"> <a href="#/"></a>
                     <input value="" type="hidden">
                     <input id="enable_module" value="1" type="hidden">
                     <input class="effect_to_cart" value="1" type="hidden">
                     <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
                 </div>
             </div>
<script>
    function showModalOnMobile() {
        if (window.innerWidth < 768) { // replace 768 with your preferred screen size
            if($('.top-cart-content').css('display')==='none')
            $('.top-cart-content').show(); // replace myModalsignin with your modal ID
            else
            $('.top-cart-content').hide();
        }
    }
</script>
