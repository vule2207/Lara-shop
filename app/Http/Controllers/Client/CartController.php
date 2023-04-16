<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Product\ProductServicesInterface;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private $productService;

    public function __construct(ProductServicesInterface $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        // dd($carts);

        return view('client.products.cart', compact('carts', 'total', 'subtotal'));
    }

    public function add($id)
    {
        $product = $this->productService->find($id);

        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->discount ?? $product->price,
            'weight' => $product->weight ?? 0,
            'options' => [
                'images' => $product->productImages
            ],
        ]);

        return back();
    }
}
