<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/categories', 'CategoryController@apiIndex')->name('category_api');
Route::get('/product_types', 'ProductTypeController@apiIndex')->name('product_type_api');

Route::get('/suppliers', 'SupplierController@apiIndex')->name('suppliers');
Route::get('/customers', 'CustomerController@apiIndex')->name('customers');