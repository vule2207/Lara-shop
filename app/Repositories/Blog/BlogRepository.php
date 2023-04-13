<?php

namespace App\Repositories\Blog;

use App\Models\Blog;
use App\Repositories\BaseRepository;
use App\Repositories\Blog\BlogRepositoryInterface;

class BlogRepository extends BaseRepository implements BlogRepositoryInterface
{
	public function getModel()
	{
		return Blog::class;
	}

	public function getLatestBlogs($limit = 3)
	{
		$this->model->orderBy('id', 'desc')
			->limit($limit)
			->get();
	}
}
