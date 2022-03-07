<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCategoriesController;
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

// Route::get('/all_product_categories','ProductCategoriesController@index');

Route::get('/all_product_categories', [ProductCategoriesController::class, 'index']);
Route::post('/adding_product_category', [ProductCategoriesController::class, 'store']);
Route::post('/single_product_category', [ProductCategoriesController::class, 'show']);
Route::post('/update_product_category', [ProductCategoriesController::class, 'update']);
Route::post('/delete_product_category', [ProductCategoriesController::class, 'destroy']);

