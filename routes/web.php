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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// Event Resource


// Profile Resource
Route::prefix('dashboard')->group(function() {
	Route::get('profile', 'ProfileController@showProfile')->name('profile');
	Route::put('profile', 'ProfileController@updateProfile');
	Route::get('password', 'ProfileController@showPassword')->name('password');
	Route::put('password', 'ProfileController@updatePassword');
});