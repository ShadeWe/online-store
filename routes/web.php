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


Route::get('/', 'HomeController@index');
Route::get('/admin-panel', 'AdminPanelController@index');
Route::get('/categories', 'ProductController@index');

Route::get('/logout', function() { // deleting the username field from the session and redirecting to the main page.
	session()->pull('username', 'default');
	return redirect('/');
});

Route::get('/login', 'LoginController@index'); // just returnes the page with a form for logging
Route::post('/login', 'LoginController@userLogin');	// handles the post request containing login data (look up in database, etc.)
