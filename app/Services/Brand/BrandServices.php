<?php

namespace App\Services\Brand;

use App\Repositories\Brand\BrandRepositoryInterface;
use App\Services\Brand\BrandServicesInterface;
use App\Services\BaseServices;

class BrandServices extends BaseServices implements BrandServicesInterface
{
  public $repository;

  public function __construct(BrandRepositoryInterface $BrandRepository)
  {
    $this->repository = $BrandRepository;
  }
}
