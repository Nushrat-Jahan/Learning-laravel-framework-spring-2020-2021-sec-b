<?php

Route::get('/', function () {
    //return view('welcome');
    echo "welcome";
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify')->middleware('sees');

Route::get('/logout', 'LogoutController@index');

Route::gett('/registrtion', 'RegistrationController@index');
Route::post('/registrtion', 'RegistrationController@verify');

Route::group(["middleware" => "sess"],function () {


    Route::get('/system/sales/social_media', 'SalesController@media');
    Route::get('/system/sales/ecommerce', 'SalesController@ecommerce');

    Route::group(["middleware" => "admincheck"],function () {
    Route::get('/system/sales', 'SalesController@index')->name('sales');

    Route::get('/system/sales/physical_store', 'SalesController@Storephysical')->name('sales.physical');

    Route::get('/system/sales/physical_store/sales_log', 'SalesController@sales_log')->name('sales.sales_log');
    Route::post('/system/sales/physical_store/sales_log', 'SalesController@verify');

    Route::get('/system/sales/ecommerce', 'SalesController@ecommerce')->name('sales.ecommerce');
    Route::get('/system/sales/social_media', 'SalesController@media')->name('sales.media');
    });
});

