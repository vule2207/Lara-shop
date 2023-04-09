<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Product\ProductServicesInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private $productService;

    public function __construct(ProductServicesInterface $productService)
    {
        $this->productService = $productService;
    }

    public function allProduct()
    {
        $products = $this->productService->all();
        printf($products);
        // return view('client.products.products', compact('products'));
    }

    public function productDetails($id)
    {
        $product = $this->productService->find($id);
        return view('client.products.details', compact('product'));
    }
}
