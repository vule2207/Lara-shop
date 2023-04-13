<?php

namespace App\Services\Blog;

use App\Services\ServicesInterface;

interface BlogServicesInterface extends ServicesInterface
{
	public function getLatestBlogs($limit = 3);
}
