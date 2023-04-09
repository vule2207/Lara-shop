<?php

namespace App\Services\Product;

use App\Repositories\Product\ProductRepositoryInterface;
use App\Services\BaseServices;

class ProductServices extends BaseServices implements ProductServicesInterface
{
	public $repository;

	public function __construct(ProductRepositoryInterface $productRepository)
	{
		$this->repository = $productRepository;
	}

	public function find(int $id)
	{
		$product = $this->repository->find($id);
		$avgRating = 0;
		$sumRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
		$countRating = count($product->productComments);
		$color = array_column($product->productDetails->toArray(), 'color');
		$size = array_column($product->productDetails->toArray(), 'size');

		if ($countRating != 0) {
			$avgRating = $sumRating / $countRating;
		}
		$product->color = array_unique($color);
		$product->size = array_unique($size);
		$product->avgRating = $avgRating;
		return $product;
	}
}
