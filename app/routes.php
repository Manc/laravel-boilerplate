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

/** ------------------------------------------
 *  Frontend Routes
 *  ------------------------------------------
 */

# Home page
Route::get('/', array('as' => 'home', 'uses' => 'FrontendDefaultController@getHome'));


/** ------------------------------------------
 *  Admin Routes
 *  ------------------------------------------
 */

Route::get('admin/login', array('as' => 'login', 'uses' => 'AdminAuthController@getLogin'));
Route::post('admin/login', array('as' => 'login.post', 'uses' => 'AdminAuthController@postLogin'));
Route::get('admin/logout', array('as' => 'logout', 'uses' => 'AdminAuthController@getLogout'));

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function() {

	# Admin Dashboard
	Route::get('/', array('as' => 'admin', 'uses' => 'AdminDefaultController@getDashboard'));

});