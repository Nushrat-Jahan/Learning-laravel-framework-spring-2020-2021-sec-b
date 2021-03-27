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

//Registration
Route::get('/registration', 'RegistrationController@index')->name('registration');
Route::post('/registration', 'RegistrationController@verify');

//Login
Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@verify');

//Logout
Route::get('/logout', 'LogoutController@index')->name('logout');


Route::group(["middleware" => "sess"],function () {

    //Admin
    Route::group(["middleware" => "admincheck"],function (){

        //Home
        Route::get('/home', 'HomeController@admin')->name('home.admin');
    });

    //Customer
    Route::group(["middleware" => "customercheck"],function (){

        //Home
        Route::get('/home', 'HomeController@customer')->name('home.customer');
    });

});
