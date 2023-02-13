<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProductImageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/categories', CategoryController::class);
Route::resource('/products', ProductController::class);
Route::resource('/category_products', CategoryProductController::class);
Route::resource('/product_images', ProductImageController::class);
Route::resource('/images', ImageController::class, ['except' => ['update']]);
Route::post('/images/{image}/edit', [ImageController::class, 'updateFile']);