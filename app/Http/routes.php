<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('invoice', 'InvoiceController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Possible solució de Stupid case d
//App::bind('SolidLaravel\Repositories\Contracts\InvoiceRepositoryInterface','SolidLaravel\Repositories\InvoiceRepositoryDB');

//App::bind('SolidLaravel\Output\Contracts\InvoiceShowInterface','SolidLaravel\Output\InvoiceShowHtml');
