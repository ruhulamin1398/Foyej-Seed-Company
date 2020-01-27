<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'IndexController@index')->name('index');

Auth::routes();

// Product Area 
Route::resource('categories', 'CategoryController');
Route::post('catagoriesupdate', 'CategoryController@catagoriesupdate')->name("catagoriesupdate");

Route::resource('product_type', 'ProductTypeController');
Route::post('product_typeupdate', 'ProductTypeController@Product_typeupdate')->name("product_typeupdate");

Route::resource('products', 'ProductController');
Route::post('productsupdate', 'ProductController@Productsupdate')->name("productsupdate");
Route::get('productsdrop', 'ProductController@productsdrop')->name("productsdrop");
Route::get('complete-product', 'ProductController@complete')->name("complete-product");

Route::resource('purchases', 'PurchaseController');
Route::resource('purchases_details', 'PurchaseDetailsController');
Route::get('purchases-receipt-show/{id}', 'ReceiptController@purchaseShow')->name('purchases-receipt-show');

Route::resource('orders', 'OrderController');
Route::resource('orders_details', 'OrderDetailController');
Route::get('order-receipt-show/{id}', 'ReceiptController@orderShow')->name('order-receipt-show');

Route::resource('invoices', 'InvoiceController');


Route::resource('suppliers', 'SupplierController');
Route::post('suppliers_update', 'SupplierController@suppliersupdate')->name("suppliersupdate");
Route::get('supplier_payment', 'SupplierController@suppplierPayment')->name("supplier_payment");
Route::post('supplier_payment', 'SupplierController@suppplierPaymentStore')->name("supplier_paymnent_store");

// end Product area 

// customer area start
Route::resource('customers', 'CustomerController');
Route::post('customers_update', 'CustomerController@customersupdate')->name("customersupdate");
Route::get('customer_cash_receive_create', 'CustomerController@customersCashReceiveCreate')->name("customer_cash_receive_create");
Route::post('customer_cash_receive', 'CustomerController@customersCashReceiveStore')->name("customer_cash_receive_store");

// customer area end
// barcode print  area start
Route::get('barcode', 'BarCodePrinterController@index')->name("barcode");
Route::post('barcode_print', 'BarCodePrinterController@print')->name("barcode_print");

// barcode print  area end

// testing  routes

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/testrelation', 'UserController@index')->name('home');
Route::view('/table','table');
Route::view('/bar','bar');





