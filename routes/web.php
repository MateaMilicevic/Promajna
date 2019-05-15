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
    return view('welcome');
});
Route::resource('apartments', 'ApartmentsController');
Route::resource('reservations', 'ReservationsController');
Route::get('/apartments/{apartment}/reservations', 'ApartmentsReservationsController@show');
Route::get('/apartments/{reservation}/reservations/edit', 'ApartmentsReservationsController@edit');
Route::post('/apartments/{apartment}/reservations', 'ApartmentsReservationsController@store');
Route::get('/apartments/{apartment}/reservations/create/', 'ApartmentsReservationsController@create');
Route::get('calendar/{apartment}', 'ApartmentsReservationsController@calender');
