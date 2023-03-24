  <div class="widget-latest">
            <div class="block-title"> Top Rated Products</div>
            <div class="block-content">
              <ul class="product-list">
                @foreach (topRatedProducts() as $item)
                <li class="item">
                      <figure class="featured-thumb"> <a href="#"> <img src="{{$item->productimage->image_url}}" alt="{{$item->product_name}}"> </a> </figure>
                  <div class="content-info">
                   <a href="grid.html" title="{{$item->product_name}}">{{$item->product_name}}</a>
                   <div class="star-rating">
                               <span style="width:{{$item->rattings[0]->avg_ratting*2*10}}%">Rated <strong class="rating">{{$item->rattings[0]->avg_ratting}}</strong> out of 5</span>
                               </div>
                   <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">AED {{$item->product_name}}</span> </span> </div>
                      </div>
                      
                    </div>
                  </div>
              
               </li>
                @endforeach
              </ul>
           
            </div>
          </div>