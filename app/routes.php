<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home.home');
});

Route::get('Reservation',function()
{
	return View::make('Reservation.reservation');
});

Route::get('Registration',function(){

	return View::make('Registration.registration');
});



Route::post('Register',array('before'=>'csrf','uses'=>'HomeController@NewUser'));
Route::post('login',array('before'=>'csrf','uses'=>'HomeController@login'));