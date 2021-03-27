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

    Route::get('/home', 'HomeController@index')->name('home.index');
    Route::get('/home/profile', 'HomeController@profile')->name('home.profile');
    Route::get('/home/editprofile', 'HomeController@editprofile')->name('home.editprofile');
    Route::post('/home/editprofile', 'HomeController@updateProfile');
    Route::get('/home/customerlist', 'HomeController@customerlist')->name('home.customerlist');
    Route::get('/home/medicinelist', 'HomeController@medicinelist')->name('home. medicinelist');
    Route::get('/home/customer/delete/{id}','HomeController@delete')->name('home.delete');

});
