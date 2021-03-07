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

Route::get('/', function () {
    return view('welcome');
});

//REGISTRATION
Route::get('/registration', 'RegistrationController@index')->name('registration');
Route::post('/registration', 'RegistrationController@verify');

//LOGIN & LOGOUT
Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@verify');

Route::get('/logout', 'LogoutController@index')->name('logout');

//SESSION
Route::group(["middleware" => "sess"],function () {

//HOME
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/admin', 'HomeController@admin')->name('home.admin');

//SALES
Route::get('/system/sales', 'SalesController@index')->name('sales.index');
Route::get('/system/sales/physical_store', 'SalesController@physicalStore')->name('sales.physicalStore');
Route::post('/system/sales/physical_store', 'SalesController@pStoreVerify');

Route::get('/system/sales/social_media', 'SalesController@socialMedia')->name('sales.socialMedia');
Route::get('/system/sales/ecommerce', 'SalesController@ecommerce')->name('sales.ecommerce');

Route::get('/system/sales/physical_store/sales_log', 'SalesController@salesLog')->name('sales.salesLog');
Route::post('/system/sales/physical_store/sales_log', 'SalesController@import');

Route::get('/system/sales/physical_store/sales_log/DownloadSold', 'SalesController@salesLogDownloadSold')->name('sales.salesLog.downloadSold');
Route::get('/system/sales/physical_store/sales_log/DownloadPending', 'SalesController@salesLogDownloadPending')->name('sales.salesLog.downloadPending');

//PRODUCT
Route::get('system/product_management/','ProductController@index')->name('product.index');

//EXISTING PRODUCTS
Route::get('system/product_management/existing_products','ProductController@existing')->name('product.existing');
Route::get('system/product_management/existing_products/edit/{id}','ProductController@edit')->name('product.edit');
Route::post('system/product_management/existing_products/edit/{id}','ProductController@update');
Route::get('/system/product_management/existing_products/delete/{id}','ProductController@destroy')->name('product.delete');

//UPCOMING PRODUCTS
Route::get('system/product_management/upcoming_products','ProductController@upcoming')->name('product.upcoming');
Route::get('system/product_management/upcoming_products/edit/{id}','ProductController@edit')->name('product.edit');
Route::post('system/product_management/upcoming_products/edit/{id}','ProductController@update');
Route::get('/system/product_management/upcoming_products/delete/{id}','ProductController@destroy')->name('product.delete');

Route::get('system/product_management/product/{product_id}/vendor_details/{vendor_id}','ProductController@details')->name('product.details');

Route::get('system/product_management/add_products','ProductController@add')->name('product.add');
Route::post('system/product_management/add_products','ProductController@addVerify');

});
