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

// Explore Resource
Route::prefix('explore')->group(function() {
	Route::get('/', 'ExploreController@index')->name('explore.index');
	Route::get('{id}', 'ExploreController@show')->name('explore.show');
});

// Dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// Dashboard Event Resource
Route::prefix('dashboard')->group(function() {
	Route::get('event/', 'EventController@index');
	Route::get('event/create', 'EventController@createEvent');
	Route::post('event', 'EventController@storeEvent');
	Route::get('event/{id}/edit', 'EventController@editEvent');
	Route::put('event/{id}', 'EventController@updateEvent');
});

// Dashboard Profile Resource
Route::prefix('dashboard')->group(function() {
	Route::get('profile', 'ProfileController@showProfile')->name('profile');
	Route::put('profile', 'ProfileController@updateProfile');
	Route::get('password', 'ProfileController@showPassword')->name('password');
	Route::put('password', 'ProfileController@updatePassword');
});

// Join Event
Route::prefix('explore/{id}')->group(function() {
	Route::get('join', 'JoinController@join')->middleware('auth');
});