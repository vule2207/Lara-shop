@extends('client.layout.master')

@section('title', $product->name)

@section('body')

{{-- breadcrumb section begin --}}
<div class="breadcrumb-section">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="breadcrumb-text">
                  <a href="home"><i class="fa fa-home"></i> Home</a>
                  <a href="products">Products</a>
                  <span>{{ $product->name }}</span>
              </div>
          </div>
      </div>
  </div>
</div>
{{-- breadcrumb section end --}}

{{-- Products section begin --}}
<section class="product-shop spad page-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
              <div class="filter-widget">
                  <h4 class="fw-title">Categories</h4>
                  <ul class="filter-catagories">
                      <li><a href="#">Men</a></li>
                      <li><a href="#">Women</a></li>
                      <li><a href="#">Kids</a></li>
                  </ul>
              </div>
              <div class="filter-widget">
                  <h4 class="fw-title">Brand</h4>
                  <div class="fw-brand-check">
                      <div class="bc-item">
                          <label for="bc-calvin">
                              Calvin Klein
                              <input type="checkbox" id="bc-calvin">
                              <span class="checkmark"></span>
                          </label> 
                      </div>
                      <div class="bc-item">
                          <label for="bc-diesel">
                              Diesel
                              <input type="checkbox" id="bc-diesel">
                              <span class="checkmark"></span>
                          </label> 
                      </div>
                      <div class="bc-item">
                          <label for="bc-polo">
                              Polo
                              <input type="checkbox" id="bc-polo">
                              <span class="checkmark"></span>
                          </label> 
                      </div>
                      <div class="bc-item">
                          <label for="bc-tommy">
                              Tommy Hilfiger
                              <input type="checkbox" id="bc-tommy">
                              <span class="checkmark"></span>
                          </label> 
                      </div>
                  </div>
              </div>
              <div class="filter-widget">
                  <h4 class="fw-title">Price</h4>
                  <div class="filter-range-wrap">
                      <div class="range-slider">
                          <div class="price-input">
                              <input type="text" id="minamount">
                              <input type="text" id="maxamount">
                          </div>
                      </div>
                      <div class="price-range ui-slider ui-conner-all ui-slider-horizontal ui-widget"
                              data-min="33" data-max="99"
                          >
                          <div class="ui-slider-range ui-conner-all ui-widget-header"></div>
                          <span tabindex="0" class="ui-slider-handle ui-conner-all ui-state-default"></span>
                          <span tabindex="0" class="ui-slider-handle ui-conner-all ui-state-default"></span>
                      </div>
                  </div>
                  <a href="#" class="filter-btn">Filter</a>
              </div>
              <div class="filter-widget">
                  <h4 class="fw-title">Color</h4>
                  <div class="fw-color-choose">
                      <div class="cs-item">
                          <input type="radio" id="cs-black">
                          <label for="cs-black" class="cs-black">black</label>
                      </div>
                      <div class="cs-item">
                          <input type="radio" id="cs-violet">
                          <label for="cs-violet" class="cs-violet">violet</label>
                      </div>
                      <div class="cs-item">
                          <input type="radio" id="cs-blue">
                          <label for="cs-blue" class="cs-blue">blue</label>
                      </div>
                      <div class="cs-item">
                          <input type="radio" id="cs-yellow">
                          <label for="cs-yellow" class="cs-yellow">yellow</label>
                      </div>
                      <div class="cs-item">
                          <input type="radio" id="cs-red">
                          <label for="cs-red" class="cs-red">red</label>
                      </div>
                      <div class="cs-item">
                          <input type="radio" id="cs-green">
                          <label for="cs-green" class="cs-green">green</label>
                      </div>
                  </div>
              </div>
              <div class="filter-widget">
                  <h4 class="fw-title">Size</h4>
                  <div class="fw-size-choose">
                      <div class="sc-item">
                          <input type="radio" id="xs-size">
                          <label for="xs-size">xs</label>
                      </div>
                      <div class="sc-item">
                          <input type="radio" id="s-size">
                          <label for="s-size">s</label>
                      </div>
                      <div class="sc-item">
                          <input type="radio" id="m-size">
                          <label for="m-size">m</label>
                      </div>
                      <div class="sc-item">
                          <input type="radio" id="l-size">
                          <label for="l-size">l</label>
                      </div>
                  </div>
              </div>
              <div class="filter-widget">
                  <h4 class="fw-title">Tags</h4>
                  <div class="fw-tags">
                      <a href="#">Towel</a>
                      <a href="#">Shoes</a>
                      <a href="#">Coat</a>
                      <a href="#">Dresses</a>
                      <a href="#">Trousers</a>
                      <a href="#">Men's hats</a>
                      <a href="#">Backpack</a>
                  </div>
              </div>
            </div>
          
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" 
                                src="assets/img/products/{{ $product->productImages[0]->path }}" alt="">
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                @foreach ($product->productImages as $image)
                                    <div class="pt active" data-imgbigurl="assets/img/products/{{$image->path}}">
                                        <img src="assets/img/products/{{$image->path}}" alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <span>{{$product->tag}}</span>
                                <h3>{{$product->name}}</h3>
                            </div>
                            <div class="pd-rating">

                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $product->avgRating)
                                        <i class="fa fa-star"></i>
                                    @else
                                        <i class="fa fa-star-o"></i>
                                    @endif
                                @endfor

                                <span>({{count($product->productComments)}})</span>
                            </div>
                            <div class="pd-desc">
                                <p>{{$product->content}}</p>

                                @if ($product->discount !== null)
                                    <h4>${{$product->discount}} <span>${{$product->price}}</span></h4> 
                                @else
                                    <h4>${{$product->price}}</h4>   
                                @endif
                                
                            </div>
                            <div class="pd-color">
                                <h6>Color</h6>
                                <div class="pd-color-choose">
                                    @foreach ($product->color as $color)
                                        <div class="cc-item">
                                            <input type="radio" id="cc-{{ $color }}">
                                            <label for="cc-{{ $color }}" class="cc-{{ $color }}"></label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="pd-size-choose">
                                @foreach ($product->size as $size)
                                    <div class="sc-item">
                                        <input type="radio" id="{{ $size }}-size">
                                        <label for="{{ $size }}-size">{{ $size }}</label>
                                    </div>    
                                @endforeach
                            </div>
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                                <a href="#" class="primary-btn pd-cart">Add To Cart</a>
                            </div>
                            <ul class="pd-tags">
                                <li><span>CATEGORIES</span>: {{ $product->productCategory->name }}</li>
                                <li><span>TAGS</span>: {{$product->tag}}</li>
                            </ul>
                            <div class="pd-share">
                                <div class="p-code">Sku: {{$product->sku}}</div>
                                <div class="pd-social">
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-twitter-alt"></i></a>
                                    <a href="#"><i class="ti-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab">
                    <div class="tab-item">
                        <ul class="nav" role="tablist">
                            <li><a class="active" href="#tab-1" data-toggle="tab" role="tab">DESCRIPTION</a></li>
                            <li><a href="#tab-2" data-toggle="tab" role="tab">SPECIFICATIONS</a></li>
                            <li><a href="#tab-3" data-toggle="tab" role="tab">Customer review (2)</a></li>
                        </ul>
                    </div>
                    <div class="tab-item-content">
                        <div class="tab-content">
                            <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                <div class="product-content">
                                    {!! $product->description !!}
                                </div>
                            </div>
    
                            <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                <div class="specification-table">
                                    <table>
                                        <tr>
                                            <td class="p-catagory">Customer Rating</td>
                                            <td>
                                                <div class="pd-rating">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= $product->avgRating)
                                                            <i class="fa fa-star"></i>
                                                        @else
                                                            <i class="fa fa-star-o"></i>
                                                        @endif
                                                    @endfor

                                                    <span>({{count($product->productComments)}})</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Price</td>
                                            <td>
                                                <div class="p-price">
                                                    {{ $product->price }}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Add To Cart</td>
                                            <td>
                                                <div class="cart-add">+ add to cart</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Availability</td>
                                            <td>
                                                <div class="p-stock">{{ $product->qty }} in stock</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Weight</td>
                                            <td>
                                                <div class="p-weight">
                                                    @if ($product->weight)
                                                        {{ $product->weight }}kg
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Color</td>
                                            <td>
                                                @if (!empty($product->color))
                                                    @foreach ($product->color as $color)
                                                        <div class="cs-color" style="background: {{$color}}"></div>
                                                    @endforeach
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Sku</td>
                                            <td>
                                                <div class="p-code">{{ $product->sku }}</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
    
                            <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                <div class="customer-review-option">
                                    <h4>{{ count($product->productComments) }} Comments</h4>
                                    <div class="comment-option">

                                        @foreach ($product->productComments as $comment)
                                            <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="assets/img/user/{{ $comment->user->avatar ?? 'default-avatar.jpg'}}" alt="">
                                                </div>
                                                <div class="avatar-text">
                                                    <div class="at-rating">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= $comment->rating)
                                                                <i class="fa fa-star"></i>
                                                            @else
                                                                <i class="fa fa-star-o"></i>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                    <h5>{{ $comment->name }} <span>{{ date('M d, Y', strtotime($comment->created_at))}}</span></h5>
                                                    <div class="at-reply">{{ $comment->messages}}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
        
                                <div class="personal-rating">
                                        <h6>Your Rating</h6>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
        
                                    <div class="leave-comment">
                                        <h4>Leave A Comment</h4>
                                        <form action="" class="comment-form">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Name">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Email">
                                                </div>
                                                <div class="col-lg-12">
                                                    <textarea placeholder="Messages"></textarea>
                                                    <button type="submit" class="site-btn">Send Messages</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
  </div>
</section>
{{-- Products section end --}}

{{-- Product relate begin --}}
<div class="related-products spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Related Products</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="assets/img/products/product-1.jpg" alt="">
                        <div class="sale pp-sale">Sale</div>
                        <div class="icon">
                            <i class="icon_heart_alt"></i>
                        </div>
                        <ul>
                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                            <li class="quick-view"><a href="products">+ Quick View</a></li>
                            <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="catagory-name">Towel</div>
                        <a href="#">
                            <h5>Pure Pineapple</h5>
                        </a>
                        <div class="product-price">
                            $14.00
                            <span>$35.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Product relate begin --}}

@endsection