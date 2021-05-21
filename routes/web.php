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
Route::get('/basket', function () {
    return view('basket');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/product', function () {
    return view('product');
});

Route::get('/store', function () {
    return view('store');
});

