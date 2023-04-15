<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Product\ProductServicesInterface;
use App\Services\ProductComment\ProductCommentServicesInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private $productService;
    private $productCommentService;

    public function __construct(
        ProductServicesInterface $productService,
        ProductCommentServicesInterface $productCommentService
    ) {
        $this->productService = $productService;
        $this->productCommentService = $productCommentService;
    }

    public function allProduct(Request $request)
    {
        // dd($request->all());
        $products = $this->productService->getProductOnIndex($request);
        return view('client.products.products', compact('products'));
    }

    public function productDetails($id)
    {
        $product = $this->productService->find($id);
        $relatedProducts = $this->productService->getRelatedProducts($product);
        // dd($productRelated);
        return view('client.products.details', compact('product', 'relatedProducts'));
    }

    public function postComment(Request $request)
    {
        $this->productCommentService->create($request->all());
        return redirect()->back();
    }
}
