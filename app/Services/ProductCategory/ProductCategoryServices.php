<?php

namespace App\Services\ProductCategory;

use App\Repositories\ProductCategory\ProductCategoryRepositoryInterface;
use App\Services\ProductCategory\ProductCategoryServicesInterface;
use App\Services\BaseServices;

class ProductCategoryServices extends BaseServices implements ProductCategoryServicesInterface
{
  public $repository;

  public function __construct(ProductCategoryRepositoryInterface $ProductCategoryRepository)
  {
    $this->repository = $ProductCategoryRepository;
  }
}
