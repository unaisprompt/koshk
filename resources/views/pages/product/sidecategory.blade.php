        @foreach (categoryList() as $category)
                    <div class="card border-0 mb-2">
                        <div class="card-header">
                        <h6 class="mb-0">
                           @if($category->subcategory)
                            <a class="link-title" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$loop->iteration}}">
                               {{$category->category_name}}
                            </a>
                            @else
                             <a class="link-title" href="{{url('products?category_id='.$category->id)}}">
                               {{$category->category_name}}
                            </a>
                           @endif
                        </h6>
                        </div>
                        @if($category->subcategory)
                        <div id="collapse{{$loop->iteration}}" class="collapse" data-parent="#accordion">
                            <div class="card-body text-muted">
                                <ul class="list-unstyled">
                                    @foreach ($category->subcategory as $subcategory)
                                        <li> <a href="{{url('products?category_id='.$category->id.'&subcategory_id='.$subcategory->id)}}">{{$subcategory->subcategory_name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif
                    </div>
                @endforeach