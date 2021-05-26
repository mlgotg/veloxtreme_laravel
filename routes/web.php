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
    return view('main');
});
Route::get('/accessories', function () {
    return view('accessories');
});
Route::get('/basket', '\App\Http\Controllers\BasketController@view');
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/store', function () {
    return view('store');
});
Route::get('/product/{id}', '\App\Http\Controllers\ProductController@showProduct');
Route::get('/store', '\App\Http\Controllers\ProductController@getProducts');
Route::post('/submit', '\App\Http\Controllers\CheckoutController@write');
Route::post('/', '\App\Http\Controllers\LoginController@login')->name('login');
Route::post('/sign', '\App\Http\Controllers\SignController@create')->name('sign');
Route::get('/logout', '\App\Http\Controllers\SessionsController@destroy');

