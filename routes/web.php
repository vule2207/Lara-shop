<?php

use App\Http\Controllers\Client\ShopController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

if (env('APP_ENV') !== 'local') {
	URL::forceScheme('https');
	URL::forceRootUrl(config('app.url'));
}

Route::get('/', [HomeController::class, 'index']);
Route::prefix('shop')->group(function () {
	Route::get('products', [ShopController::class, 'allProduct']);
	Route::get('products/{id}', [ShopController::class, 'productDetails']);
	Route::post('products/{id}', [ShopController::class, 'postComment']);
});
