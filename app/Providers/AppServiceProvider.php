<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Blog\BlogRepository;
use App\Repositories\Blog\BlogRepositoryInterface;
use App\Repositories\ProductComment\ProductCommentRepository;
use App\Repositories\ProductComment\ProductCommentRepositoryInterface;
use App\Services\Blog\BlogServices;
use App\Services\Blog\BlogServicesInterface;
use App\Services\Product\ProductServices;
use App\Services\Product\ProductServicesInterface;
use App\Services\ProductComment\ProductCommentServices;
use App\Services\ProductComment\ProductCommentServicesInterface;
use App\Services\ProductCategory\ProductCategoryServices;
use App\Services\ProductCategory\ProductCategoryServicesInterface;
use App\Repositories\ProductCategory\ProductCategoryRepository;
use App\Repositories\ProductCategory\ProductCategoryRepositoryInterface;
use App\Services\Brand\BrandServices;
use App\Services\Brand\BrandServicesInterface;
use App\Repositories\Brand\BrandRepository;
use App\Repositories\Brand\BrandRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            ProductRepositoryInterface::class,
            ProductRepository::class
        );

        $this->app->singleton(
            ProductServicesInterface::class,
            ProductServices::class
        );

        $this->app->singleton(
            ProductCommentRepositoryInterface::class,
            ProductCommentRepository::class
        );

        $this->app->singleton(
            ProductCommentServicesInterface::class,
            ProductCommentServices::class
        );

        $this->app->singleton(
            BlogRepositoryInterface::class,
            BlogRepository::class
        );

        $this->app->singleton(
            BlogServicesInterface::class,
            BlogServices::class
        );

        $this->app->singleton(
            ProductCategoryRepositoryInterface::class,
            ProductCategoryRepository::class
        );

        $this->app->singleton(
            ProductCategoryServicesInterface::class,
            ProductCategoryServices::class
        );

        $this->app->singleton(
            BrandRepositoryInterface::class,
            BrandRepository::class
        );

        $this->app->singleton(
            BrandServicesInterface::class,
            BrandServices::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
