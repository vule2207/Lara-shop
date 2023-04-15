<?php

namespace App\Services\Product;

use App\Services\ServicesInterface;

interface ProductServicesInterface extends ServicesInterface
{
	public function getRelatedProducts($product, $limit = 4);

	public function getFeaturedProducts();

	public function getProductOnIndex($request);

	public function getProductsByCategory($categoryName, $request);
}
