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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/contact', function () {
	return view('selengkapnya');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route Booking
Route::get('booking/create', 'BookingController@create')->name('booking.create');
Route::post('booking/store', 'BookingController@store')->name('booking.store');
Route::middleware('auth')->group(function() {
	Route::prefix('booking')->group(function() {
		Route::get('', 'BookingController@index')->name('booking.index');
		Route::get('{id}/edit', 'BookingController@edit')->name('booking.edit');
		Route::put('{id}', 'BookingController@update')->name('booking.update');
		Route::delete('{id}', 'BookingController@destroy')->name('booking.destroy');
	});
});