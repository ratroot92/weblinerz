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

Route::group(['prefix' => 'hr'], function () {
	//home page
	// Authentication Routes...
	Route::get('/login', 'Hr\Auth\LoginController@showLoginForm')->name('hr.login');
	Route::post('/login', 'Hr\Auth\LoginController@login');
	Route::post('/logout', 'Hr\Auth\LoginController@logout')->name('hr.logout');
	// Registration Routes...
	Route::get('/register', 'Hr\Auth\RegisterController@showRegistrationForm')->name('hr.register');

	Route::post('/register', 'Hr\Auth\RegisterController@register');

});

Route::get('/hr', 'Hr\Auth\HrController@index')->name('hr');




