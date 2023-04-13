<?php

namespace App\Services\ProductComment;

use App\Repositories\ProductComment\ProductCommentRepositoryInterface;
use App\Services\ProductComment\ProductCommentServicesInterface;
use App\Services\BaseServices;

class ProductCommentServices extends BaseServices implements ProductCommentServicesInterface
{
	public $repository;

	public function __construct(ProductCommentRepositoryInterface $productCommentRepository)
	{
		$this->repository = $productCommentRepository;
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
