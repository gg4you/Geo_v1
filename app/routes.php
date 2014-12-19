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
	return View::make('home');
});

Route::get('contact', 'PagesController@contact');
Route::resource('doctors', 'DoctorController');
Route::resource('users', 'UserController');
Route::resource('registrations', 'RegistrationController');
Route::resource('patients', 'PatientController');
Route::resource('appointment', 'AppointmentController');

//Event::listen('illuminate.query', function($query)
//{
//    var_dump($query);
//});