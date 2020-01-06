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

Route::get('/index', 'IndexController@index')->name('index');

Auth::routes();

// Product Area 
Route::resource('categories', 'CategoryController');
Route::post('catagoriesupdate', 'CategoryController@catagoriesupdate')->name("catagoriesupdate");

Route::resource('product_type', 'ProductTypeController');
Route::post('product_typeupdate', 'ProductTypeController@Product_typeupdate')->name("product_typeupdate");

Route::resource('products', 'ProductController');
Route::post('productsupdate', 'ProductController@Productsupdate')->name("productsupdate");
Route::get('productsdrop', 'ProductController@productsdrop')->name("productsdrop");

Route::resource('purchases', 'PurchaseController');


Route::resource('suppliers', 'SupplierController');
Route::post('suppliersupdate', 'SupplierController@suppliersupdate')->name("suppliersupdate");
Route::get('supplierscheck', 'SupplierController@supplierscheck')->name("supplierscheck");

// end Product area 

// customer area start
Route::resource('customers', 'CustomerController');
Route::post('customersupdate', 'CustomerController@customersupdate')->name("customersupdate");

// customer area end

// testing  routes

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/testrelation', 'UserController@index')->name('home');
Route::view('/','table');
Route::view('/bar','bar');




use App\Role;

Route::get('admin/contacts', 'ContactController@getIndex');
Route::get('table/data',  function () {
       $contact= Role::all();
        return ($contact);
    });

Route::post('admin/contacts/store', 'ContactController@postStore');
Route::post('admin/contacts/update', 'ContactController@postUpdate');
Route::post('admin/contacts/delete', 'ContactController@postDelete');

