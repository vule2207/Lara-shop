@extends('client.layout.master')

@section('title', 'Cart')

@section('body')
    {{-- body --}}
    {{-- breadcrumb section begin --}}
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <a href="shop/products">Products</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- breadcrumb section end --}}

    {{-- cart section begin --}}
    <div class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carts as $cart)
                                    <tr>
                                        <td class="cart-pic {{ $loop->first ? 'first-row' : '' }}">
                                            <img src="assets/img/products/{{ $cart->options->images[0]->path }}" alt="">
                                        </td>
                                        <td class="cart-title {{ $loop->first ? 'first-row' : '' }}"><h5>{{ $cart->name }}</h5></td>
                                        <td class="p-price {{ $loop->first ? 'first-row' : '' }}">{{ number_format($cart->price, 2) }}</td>
                                        <td class="qua-col {{ $loop->first ? 'first-row' : '' }}">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" name="" value='{{ $cart->qty }}'>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="total-price {{ $loop->first ? 'first-row' : '' }}">{{ number_format($cart->price*$cart->qty, 2) }}</td>
                                        <td class="close-td {{ $loop->first ? 'first-row' : '' }}"><i class="ti-close"></i></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="#" class="primary-btn continue-shop">Continue Shopping</a>
                                <a href="" class="primary-btn up-cart">Update cart</a>
                            </div>
                            <div class="discount-coupon">
                                <h6>Discount Codes</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Enter your codes">
                                    <button type="submit" class="site-btn coupon-btn">Apply</button>
                                </form> 
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span>{{ $subtotal }}</span></li>
                                    <li class="cart-total">Total <span>{{ $total }}</span></li>
                                </ul>
                                <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- cart section end --}}
@endsection