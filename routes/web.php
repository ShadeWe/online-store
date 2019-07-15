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

Route::get('/', 'HomeController@index');	// returnes the home page of the website

Route::get('/admin-panel', 'AdminPanelController@index');  // returnes the home page of the admin panel, or redirect to the login page if not logged in

Route::get('/admin-panel/products', 'AdminPanelController@seeProducts');		// returnes a page with products shown
Route::delete('/admin-panel/products', 'AdminPanelController@deleteProducts');	// handles delete request (deletes a product from database)

Route::get('/admin-panel/new-product', 'AdminPanelController@newProduct');		// returnes a page with a form for adding new products
Route::put('/admin-panel/new-product', 'AdminPanelController@addProduct');		// handles put request (add a product into database)

Route::get('/categories', 'ProductController@index');	// returnes a page with products

Route::get('/logout', function() { // deleting the username field from the session and redirecting to the main page.
	session()->pull('username', 'default');
	return redirect('/');
});

Route::get('/login', 'LoginController@index'); 			// returnes a page with a form for logging
Route::post('/login', 'LoginController@userLogin');		// handles a post request containing login data and verifies its correctness
