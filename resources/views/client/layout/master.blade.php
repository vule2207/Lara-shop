<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="{{asset('/')}}">
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Lara Shop</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
</head>

<body>
    <!-- Start coding here -->

    {{-- Page preloader --}}
    <div id="preloder">
        <div class="loader"></div>
    </div>

    {{-- header section begin --}}
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class="fa fa-envelope"></i>
                        levu2207@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone"></i>
                        + 84 39.4438.747
                    </div>
                </div>
                <div class="ht-right">
                    <a href="login.html" class="login-panel">
                        <i class="fa fa-user"></i>
                        Login
                    </a>

                    <div class="lan-selector">
                        <select name="countries" id="countries" class="language_drop" style="width: 300px;">
                            <option value="yt" data-image="assets/img/flag-1.jpg" 
                                data-imagecss="flag yt" data-title="English"
                            >
                                English
                            </option>
                            <option value="yu" data-image="assets/img/flag-2.jpg" 
                                data-imagecss="flag yu" data-title="Bangladesh"
                            >
                                German
                            </option>
                        </select>
                    </div>

                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="/">
                                <img src="assets/img/logo.png" height="25" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <form action="{{ request()->url() }}">
                            @csrf
                            <div class="advanced-search">
                                <button type="button" class="category-btn">All Categories</button>
                                <div class="input-group">
                                    <input name="search" value="{{request('search')}}" type="text" placeholder="What do you need?">
                                    <button type="submit" ><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-3 text-right">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>

                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="assets/img/select-product-1.jpg"></td>
                                                    <td class="si-text">
                                                        <div class="product-selectd">
                                                            <p>$60.00 X 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="si-pic"><img src="assets/img/select-product-2.jpg"></td>
                                                    <td class="si-text">
                                                        <div class="product-selectd">
                                                            <p>$60.00 X 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>$120.00</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="cart" class="primaty-btn view-card">VIEW CARD</a>
                                        <a href="check-out" class="primaty-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>

                            <li class="cart-price">$150.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Women's Clothing</a></li>
                            <li><a href="#">Men's Clothing</a></li>
                            <li><a href="#">Underware</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand Code</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div>

                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="{{(request()->segment(1) == '') ? 'active' : ''}}"><a href="/">Home</a></li>   
                        <li class="{{(request()->segment(1) == 'shop') ? 'active' : ''}}"><a href="shop/products">Shop</a></li>
                        <li class="{{(request()->segment(1) == 'collection') ? 'active' : ''}}"><a href="collection">Collection</a>
                            <ul class="dropdown">
                                <li><a href="shop/categories/men">Men's</a></li>
                                <li><a href="shop/categories/women">Women's</a></li>
                                <li><a href="shop/categories/kids">Kid's</a></li>
                            </ul>
                        </li>
                        <li class="{{(request()->segment(1) == 'blog') ? 'active' : ''}}"><a href="blog">Blog</a></li>
                        <li class="{{(request()->segment(1) == 'contact') ? 'active' : ''}}"><a href="contact">Contact</a></li>
                        <li class="{{(request()->segment(1) == 'pages') ? 'active' : ''}}"><a href="pages">Pages</a>
                            <ul class="dropdown">
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="cart">Shopping Cart</a></li>
                                <li><a href="check-out.html">Checkout</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="login.html">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    {{-- header section end --}}

    {{-- body here --}}
    @yield('body')

    {{-- Partner Logo Section Begin --}}
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-carousel/logo-1.png">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-carousel/logo-2.png">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-carousel/logo-3.png">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-carousel/logo-4.png">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="assets/img/logo-carousel/logo-5.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Partner Logo Section End --}}

    {{-- Footer section begin --}}
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="index.blade.php">
                                <img src="assets/img/footer-logo.png" alt="" height="25">
                            </a>
                        </div>

                        <ul>
                            <li>Tan Phu - Ho Chi Minh</li>
                            <li>Phone: +84 39.4438.747</li>
                            <li>Email: levu2207@gmail.com</li>
                        </ul>

                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Checkout</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="">My Account</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Shopping Cart</a></li>
                            <li><a href="">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Us Newsletter Now</h5>
                        <p>Get Email updates about our latest shop and special offers</p>
                        <form action="#" class="subscribe-form">
                            @csrf
                            <input type="text" placeholder="Enter your email address">
                            <button type="button">Subscribe</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            Copyright @<script>document.write(new Date().getFullYear());</script> 
                            All rights reserved | This template is made with 
                            <i class="fa fa-heart-o" aria-hidden="true"></i> by LeVu
                        </div>
                        <div class="payment-pic">
                            <img src="assets/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- Footer section end --}}

    <!-- Js Plugins -->
    <script src="./assets/js/jquery-3.3.1.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery-ui.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.zoom.min.js"></script>
    <script src="./assets/js/jquery.dd.min.js"></script>
    <script src="./assets/js/jquery.slicknav.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/owlcarousel2-filter.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>