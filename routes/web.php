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

// Profile Controller
Route::get('dashboard/profile', 'ProfileController@index')->name('profile');
Route::put('dashboard/profile', 'ProfileController@update');
Route::get('dashboard/profile/password', 'ProfileController@password')->name('password');
