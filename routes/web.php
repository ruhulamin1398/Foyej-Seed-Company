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

