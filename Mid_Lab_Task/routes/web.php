<?php

Route::get('/', function () {
    //return view('welcome');
    echo "welcome";
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');

Route::get('/logout', 'LogoutController@index');

Route::group(["middleware" => "sess"],function () {


    Route::post('/registrtion', 'RegistrationController@index');
    Route::get('/system/sales/physical_store', 'SalesController@store');
    Route::get('/system/sales/social_media', 'SalesController@media');
    Route::get('/system/sales/ecommerce', 'SalesController@ecommerce');
});

