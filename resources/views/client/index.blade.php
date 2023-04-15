@extends('client.layout.master')

@section('title', 'Home')

@section('body')
    {{-- Hero section begin --}}
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="assets/img/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag, kids</span>
                            <h1>Black Friday</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est et obcaecati ipsum nesciunt perspiciatis porro minima modi! Reiciendis, eum laborum. Dicta a dolore in deserunt est enim perspiciatis, eum nam?</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>

                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>

            <div class="single-hero-items set-bg" data-setbg="assets/img/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag, kids</span>
                            <h1>Black Friday</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est et obcaecati ipsum nesciunt perspiciatis porro minima modi! Reiciendis, eum laborum. Dicta a dolore in deserunt est enim perspiciatis, eum nam?</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>

                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero section end --}}

    {{-- Banner section begin --}}
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="assets/img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <h4>Men's</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="assets/img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Women's</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="assets/img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4>Kid's</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Banner section end --}}

    {{-- Women banner section begin --}}
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="assets/img/products/women-large.jpg">
                        <h2>Women's</h2>
                        <a href="products">Discover More</a>
                    </div>
                </div>

                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active item" data-tag="*" data-category="women">All</li>
                            <li class="item" data-tag=".Clothing" data-category="women">Clothings</li>
                            <li class="item" data-tag=".HandBag" data-category="women">HanBag</li>
                            <li class="item" data-tag=".Shoes" data-category="women">Shoes</li>
                            <li class="item" data-tag=".Accessories" data-category="women">Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel women">
                        @foreach ($featuredProducts['women'] as $product)
                            @include('client.components.product-item')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Women banner section end --}}

    {{-- Deal section begin --}}
    <section class="deal-of-week set-bg spad" data-setbg="assets/img/time-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="co-lg-6 text-center">
                    <div class="section-title">
                        <h2>Deal Of The Week</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sapiente unde harum non tempora molestias a ratione totam nisi repellendus fugiat pariatur ipsam neque, eligendi assumenda itaque deserunt autem odit!</p>
                        <div class="product-price">
                            $35.00
                            <span>/ HanBag</span>
                        </div>
                    </div>
                    <div class="countdown-timer" id="countdown">
                        <div class="cd-item">
                            <span>56</span>
                            <p>Days</p>
                        </div>
                        <div class="cd-item">
                            <span>12</span>
                            <p>Hrs</p>
                        </div>
                        <div class="cd-item">
                            <span>40</span>
                            <p>Mins</p>
                        </div>
                        <div class="cd-item">
                            <span>52</span>
                            <p>Secs</p>
                        </div>
                    </div>
                    <a href="" class="primary-btn">Shop Now</a>
                </div>
            </div>
        </div>
    </section>
    {{-- Deal section end --}}

    {{-- Men banner section begin --}}
    <section class="men-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 ">
                    <div class="filter-control">
                        <ul>
                            <li class="active item" data-tag="*" data-category="men">All</li>
                            <li class="item" data-tag=".Clothing" data-category="men">Clothings</li>
                            <li class="item" data-tag=".HandBag" data-category="men">HanBag</li>
                            <li class="item" data-tag=".Shoes" data-category="men">Shoes</li>
                            <li class="item" data-tag=".Accessories" data-category="men">Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel men">
                        @foreach ($featuredProducts['men'] as $product)
                            @include('client.components.product-item')
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg" data-setbg="assets/img/products/man-large.jpg">
                        <h2>Men's</h2>
                        <a href="products">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Men banner section end --}}

    {{-- Instagram section begin --}}
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="assets/img/insta-1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Learning_Laravel</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="assets/img/insta-2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Learning_Laravel</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="assets/img/insta-3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Learning_Laravel</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="assets/img/insta-4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Learning_Laravel</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="assets/img/insta-5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Learning_Laravel</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="assets/img/insta-6.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Learning_Laravel</a></h5>
            </div>
        </div>
    </div>
    {{-- Instagram section end --}}

    {{-- Latest blog section begin --}}
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-blog">
                            <img src="assets/img/blog/{{$blog->image}}" alt="">
                            <div class="latest-text">
                                <div class="tag-list">
                                    <div class="tag-item">
                                        <i class="fa fa-calendar-o"></i>
                                        {{date("M d, Y", strtotime($blog->created_at))}}
                                    </div>
                                    <div class="tag-item">
                                        <i class="fa fa-comment-o"></i>
                                        {{count($blog->blogComments)}}
                                    </div>
                                    <a href="blog/{{$blog->id}}">
                                        <h4>{{$blog->title}}</h4>
                                        <p>{{$blog->subtitle}}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>    
                @endforeach
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="assets/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>For all order over 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="assets/img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Delivery On Time</h6>
                                <p>If good have problems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="assets/img/icon-3.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Secure Payment</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Latest blog section end --}}

@endsection
