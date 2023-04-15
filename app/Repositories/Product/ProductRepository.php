<?php

namespace App\Repositories\Product;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
	public function getModel()
	{
		return Product::class;
	}

	private function sortAndPagination($productsList, Request $request)
	{

		$perPage = $request->show ?? 3;
		$sortBy = $request->sort_by ?? 'latest';

		switch ($sortBy) {
			case 'latest':
				$productsList = $productsList->orderBy('id');
				break;
			case 'oldest':
				$productsList = $productsList->orderByDesc('id');
				break;
			case 'name-ascending':
				$productsList = $productsList->orderBy('name');
				break;
			case 'name-descending':
				$productsList = $productsList->orderByDesc('name');
				break;
			case 'price-ascending':
				$productsList = $productsList->orderBy('price');
				break;
			case 'price-descending':
				$productsList = $productsList->orderByDesc('price');
				break;
			default:
				$productsList = $productsList->orderBy('id');
		}

		$productsList = $productsList->paginate($perPage);

		$productsList->appends(['sort_by' => $sortBy, 'show' => $perPage]);

		return $productsList;
	}

	private function filter($products, Request $request)
	{
		// Brand
		$brands = $request->brand ?? [];
		$brand_ids = array_keys($brands);
		$products = $brand_ids != null ? $products->whereIn('brand_id', $brand_ids) : $products;

		// Price
		$priceMin = str_replace('$', '', $request->price_min);
		$priceMax = str_replace('$', '', $request->price_max);
		$products = ($priceMin != null && $priceMax != null)
			? $products->whereBetween('price', [$priceMin, $priceMax])
			: $products;

		// Color
		$color = $request->color;
		$products = $color != null
			? $products->whereHas('productDetails', function ($query) use ($color) {
				return $query->where('color', $color)
					->where('qty', '>', 0);
			})
			: $products;

		// Size
		$size = strtoupper($request->size);
		$products = $size != null
			? $products->whereHas('productDetails', function ($query) use ($size) {
				return $query->where('size', $size)
					->where('qty', '>', 0);
			})
			: $products;

		return $products;
	}

	public function getRelatedProducts($product, $limit = 4)
	{
		return $this->model->where('product_category_id', $product->product_category_id)
			->where('tag', $product->tag)
			->limit($limit)
			->get();
	}

	public function getFeaturedProductsByCategory(int $categoryId)
	{
		return $this->model->where('featured', true)
			->where('product_category_id', $categoryId)
			->get();
	}

	public function getProductOnIndex($request)
	{
		$search = $request->search ?? '';
		$products = $this->model->where('name', 'like', '%' . $search . '%');
		$products = $this->filter($products, $request);
		$products = $this->sortAndPagination($products, $request);

		return $products;
	}

	public function getProductsByCategory($categoryName, $request)
	{
		$products = ProductCategory::where('name', $categoryName)->first()->product->toQuery();
		$search = $request->search ?? '';
		$products = $products->where('name', 'like', '%' . $search . '%');
		$products = $this->filter($products, $request);
		$products = $this->sortAndPagination($products, $request);

		return $products;
	}
}
