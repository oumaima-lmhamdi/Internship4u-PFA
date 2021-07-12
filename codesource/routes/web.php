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

//offers routes
Route::get('/offers/create', 'App\Http\Controllers\OfferController@create')->name('offers.create');
Route::post('/offers', 'App\Http\Controllers\OfferController@store')->name('offers.store');
// Route::get('/offers/home', 'App\Http\Controllers\OfferController@home')->name('offers.home');

//applications routes
// Route::get('/applications/create', 'App\Http\Controllers\ApplicationController@create')->name('applications.create');
Route::post('/applications', 'App\Http\Controllers\ApplicationController@store')->name('applications.store');
Route::get('/applications', 'App\Http\Controllers\ApplicationController@index')->name('applications.index');

//admin routes
Route::get('/admin', 'App\Http\Controllers\UserController@index')->name('admin.index');
Route::delete('/admin/{id}', 'App\Http\Controllers\UserController@destroy')->name('admin.destroy')->middleware('auth');
