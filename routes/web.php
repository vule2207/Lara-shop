<?php

use App\Http\Controllers\Client\ShopController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('client.index');
});
// Route::get('/home', function () {
//     return view('client.index');
// });
Route::get('products', [ShopController::class, 'allProduct']);
Route::get('products/{id}', [ShopController::class, 'productDetails']);
