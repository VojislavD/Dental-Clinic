<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/services/{service}', 'PagesController@servicesShow');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/team', 'PagesController@team');
Route::get('/contact', 'PagesController@contact');
Route::post('/contact', 'ContactController@store');
Route::get('/booking', 'PagesController@booking');
Route::get('/booking/create/{date}', 'EventsController@create');
Route::get('/booking/{event}', 'EventsController@day');
Route::post('/booking/{date}', 'EventsController@store');

Route::middleware('auth')->group(function() {
	Route::get('/users', 'PagesController@users');
	Route::get('/appointments', 'PagesController@appointments');
	Route::get('/appointments/edit/{date}', 'EventsController@edit');
	Route::put('/appointments/edit/{date}', 'EventsController@update');
	Route::post('/appointments/delete/{date}', 'EventsController@destroy');
	Route::get('/admin/booking/{event}', 'EventsController@adminDay');
	Route::get('/appointments/create/{date}', 'EventsController@createAdmin');
	Route::post('/appointments/create', 'EventsController@storeAdmin');
	Route::get('/home', 'HomeController@index')->name('home');
});

Route::middleware('auth','admin')->group(function() {
	Route::get('/users/create', 'UsersController@create');
	Route::post('/users/create', 'UsersController@store');
	Route::get('/users/{user}/edit', 'UsersController@edit');
	Route::put('/users/{user}/edit', 'UsersController@update');
	Route::delete('/users/{user}/delete', 'UsersController@destroy');
	
});