<?php


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

    //Home
    Route::get('/home', 'HomeController@index')->name('home.index');

    //Profile
    Route::get('/home/profile', 'HomeController@profile')->name('home.profile');

    //Edit and update profile
    Route::get('/home/editprofile', 'HomeController@editprofile')->name('home.editprofile');
    Route::post('/home/editprofile', 'HomeController@updateProfile');


    Route::group(["middleware"=>"admincheck"],function(){

        //Customer list
        Route::get('/home/customerlist', 'HomeController@customerlist')->name('home.customerlist');
        Route::get('/home/customer/delete/{id}','HomeController@delete')->name('home.delete');

        //Medicine list
        Route::get('/home/medicinelist', 'HomeController@medicinelist')->name('home.medicinelist');

        //Add medicine
        Route::get('/home/addmedicine', 'HomeController@addmedicine')->name('home.addmedicine');
        Route::post('/home/addmedicine', 'HomeController@medicineAdded');

        //Edit medicine
        Route::get('/home/editmedicine/{id}', 'HomeController@editmedicine')->name('home.editmedicine');
        Route::post('/home/editmedicine/{id}', 'HomeController@medicineUpdate');

        //Delete medicine
        Route::get('/home/medicine/delete/{id}','HomeController@deletemedicine')->name('home.deletemedicine');

        //Confirm pending request
        Route::get('/home/medicine/Request', 'HomeController@confirmRequest')->name('home.confirmRequest');
        Route::get('/home/medicine/Request/{uid}/{mid}', 'HomeController@acceptRequest')->name('home.acceptRequest');

        //Deny pending request
        Route::get('/home/medicine/denyRequest/{uid}/{mid}', 'HomeController@denyRequest')->name('home.denyRequest');
    });

    Route::group(["middleware"=>"customercheck"],function(){

        //Search medicine
        Route::get('/home/searchmedicine', 'HomeController@searchmedicine')->name('home.searchmedicine');
        Route::get('/home/action', 'HomeController@action')->name('home.action');

        //Add medicine to cart
        Route::get('/home/medicine/addtocart/{id}', 'HomeController@addtocart')->name('home.addtocart');
        Route::post('/home/medicine/addtocart/{id}', 'HomeController@confirmMedicine');

        //Remove medicine
        Route::get('/home/medicine/remove/{id}', 'HomeController@removemedicine')->name('home.removemedicine');

        //Show cart
        Route::get('/home/medicine/showcart', 'HomeController@showcart')->name('home.showcart');
        Route::post('/home/medicine/showcart', 'HomeController@purchase');
    });

});
