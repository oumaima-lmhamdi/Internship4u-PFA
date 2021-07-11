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
    return view('home');
});


// Route::get('/offers','OfferController@index')->name('offers.index');
// Route::get('/offers/{city}','OfferController@show')->name('offers.show');
Route::get('/offers', 'App\Http\Controllers\OfferController@index')->name('offers.index');
// Route::get('/offers/{city}/{field}', 'App\Http\Controllers\OfferController@show');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/offers/create', 'App\Http\Controllers\OfferController@create')->name('offers.create');
Route::post('/offers', 'App\Http\Controllers\OfferController@store')->name('offers.store');