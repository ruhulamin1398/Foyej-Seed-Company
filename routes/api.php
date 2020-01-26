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
Route::get('/categories', 'CategoryController@apiIndex')->name('categories_api');
Route::get('/product_types', 'ProductTypeController@apiIndex')->name('product_type_api');
Route::get('/product', 'ProductController@ApiShow')->name('product_view_api');
Route::get('product_check', 'ProductController@apiProducutCheck')->name("product_check_api");

Route::get('/suppliers', 'SupplierController@apiIndex')->name('suppliers_api');
Route::get('/supplier', 'SupplierController@ApiShow')->name('supplier_view_api');
Route::get('supplierscheck', 'SupplierController@supplierscheck')->name("supplierscheck_api");
Route::get('suppliersdue', 'SupplierController@suppliersDue')->name("suppliersdue_api");

Route::get('/customers', 'CustomerController@apiIndex')->name('customers_api');
Route::get('/customer', 'CustomerController@ApiShow')->name('customer_view_api');
Route::get('/customer_check', 'CustomerController@apiCustomerCheck')->name("customer_check_api");
Route::get('customersdue_api', 'CustomerController@customersDue')->name("customersdue_api");




