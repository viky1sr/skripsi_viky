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

Route::get('/', function () {
    return view('pages.frontend.index');
})->name('frontend.index');

Route::group(['prefix' => 'bookings'], function(){
    Route::get('/BkF','Frontend\BookingController@index')->name('frontend.booking.index');
    Route::post('/BkF','Frontend\BookingController@store')->name('frontend.booking.store');
});

Route::get('/booking','Frontend\BookingController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
