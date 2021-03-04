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

Route::get('/registration', 'RegistrationController@index')->name('registration');
Route::post('/registration', 'RegistrationController@verify');
Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/system/sales', 'SalesController@index')->name('sales.index');
Route::get('/system/sales/physical_store', 'SalesController@physicalStore')->name('sales.physicalStore');
Route::get('/system/sales/social_media', 'SalesController@socialMedia')->name('sales.socialMedia');
Route::get('/system/sales/ecommerce', 'SalesController@ecommerce')->name('sales.ecommerce');

