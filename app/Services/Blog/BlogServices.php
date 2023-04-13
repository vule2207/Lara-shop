<?php

namespace App\Services\Blog;

use App\Services\BaseServices;
use App\Repositories\Blog\BlogRepositoryInterface;

class BlogServices extends BaseServices implements BlogServicesInterface
{
	public $repository;

	public function __construct(BlogRepositoryInterface $blogRepository)
	{
		$this->repository = $blogRepository;
	}

	public function getLatestBlogs($limit = 3)
	{
		$this->repository->getLatestBlogs($limit);
	}
}
