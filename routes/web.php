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
    return view('welcome');
})->name('welcome');

Route::get('/sorry', function () {
    session()->put(['hey'=> 'man']);
    return view('sorry');
})->name('sorry');

Route::get('/thank-you', function () {
    return view('thank-you');
})->name('thank-you');

Route::post('/order/callback','ApiController@callback')->name('paymentCallback');

