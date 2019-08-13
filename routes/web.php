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

	

Auth::routes(['reset' => false]);

Route::group(['middleware' => ['auth']], function () {


	// Root Home
		Route::get('/', function () {
			    return view('front_end.home');
		});

				Route::get('/home', function () {
			    return view('front_end.home');
		});

	// Route khusus untuk member
	Route::group(['middleware' => ['role:member']], function () {

		include('web_mod/member.php');

	});

	// Route khusus untuk admin
	Route::group(['middleware' => ['role:admin']], function () {

		include('web_mod/admin.php');

	});

});	



