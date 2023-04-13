<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Blog\BlogServicesInterface;
use App\Services\Product\ProductServicesInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $productService;
    private $blogService;

    public function __construct(ProductServicesInterface $productService, BlogServicesInterface $blogService)
    {
        $this->productService = $productService;
        $this->blogService = $blogService;
    }

    public function index()
    {
        $featuredProducts = $this->productService->getFeaturedProducts();
        $blog = $this->blogService->getLatestBlogs(3);

        return view('client.index', compact('featuredProducts', 'blog'));
        // dd($featuredProducts);
    }
}
