<?php

/*
 * MAX Apps
 */

Route::get('/', 'PagesController@index');

Route::get('/update_profile', 'PagesController@update_profile');

Route::get('/change_password', 'PagesController@change_password');

Route::get('/login', 'PagesController@login');

Route::get('/dashboard', 'PagesController@dashboard');

Route::get('/leads', 'PagesController@leads');

Route::get('/referrals', 'PagesController@referrals');



/*
 * Authentication
 */

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);