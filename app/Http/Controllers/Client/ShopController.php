<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Brand\BrandServicesInterface;
use App\Services\Product\ProductServicesInterface;
use App\Services\ProductCategory\ProductCategoryServicesInterface;
use App\Services\ProductComment\ProductCommentServicesInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private $productService;
    private $productCommentService;
    private $productCategoryService;
    private $brandService;

    public function __construct(
        ProductServicesInterface $productService,
        ProductCommentServicesInterface $productCommentService,
        ProductCategoryServicesInterface $productCategoryService,
        BrandServicesInterface $brandService
    ) {
        $this->productService = $productService;
        $this->productCommentService = $productCommentService;
        $this->productCategoryService = $productCategoryService;
        $this->brandService = $brandService;
    }

    public function allProduct(Request $request)
    {
        $categories = $this->productCategoryService->all();
        $brands = $this->brandService->all();
        $products = $this->productService->getProductOnIndex($request);
        return view('client.products.products', compact('products', 'categories', 'brands'));
    }

    public function productDetails($id)
    {
        $categories = $this->productCategoryService->all();
        $brands = $this->brandService->all();
        $product = $this->productService->find($id);
        $relatedProducts = $this->productService->getRelatedProducts($product);
        return view('client.products.details', compact('product', 'relatedProducts', 'categories', 'brands'));
    }

    public function postComment(Request $request)
    {
        $this->productCommentService->create($request->all());
        return redirect()->back();
    }

    public function category($categoryName, Request $request)
    {
        $categories = $this->productCategoryService->all();
        $brands = $this->brandService->all();
        $products = $this->productService->getProductsByCategory($categoryName, $request);
        return view('client.products.products', compact('products', 'categories', 'brands'));
    }

    // public function brand($id, Request $request)
    // {
    //     $brands = $this->brandService->all();
    //     $products = $this->productService->getProductsByBrand($id, $request);
    //     return view('client.products.products', compact('products', 'brands'));
    // }
}
