<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function()
{
	Route::group(['middleware' => 'customer'], function()
	{
		Route::resource('booking', 'BookingController');
	});

	Route::group(['middleware' => 'admin'], function()
	{
		Route::resource('cleaner', 'CleanerController');
		Route::resource('customer', 'CustomerController');
	    Route::resource('city', 'CityController');
	});
});

Route::get('/home', 'HomeController@index');

Auth::routes();