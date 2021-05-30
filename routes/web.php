<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    $products= auth()->user() -> products;
    $counts = [];
    for ($i = 0; $i < sizeof($products); $i++){
        $counts[$i] = preg_replace( '/[^0-9]/', '', DB::table('product_user') -> where('product_id', $products[$i]->id)->get('count'));
    }
    return view('checkout', ['products' => $products, 'counts' => $counts]);
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

Route::post('/store', '\App\Http\Controllers\BasketController@add')->name('cart.store');
Route::post('/update', '\App\Http\Controllers\BasketController@update')->name('cart.update');
Route::post('/remove', '\App\Http\Controllers\BasketController@remove')->name('cart.remove');

Route::get('/store/accessories', '\App\Http\Controllers\ProductController@getAccessoriesTypes');

Route::get('store/accessories/selected', '\App\Http\Controllers\ProductController@getAccessories');

Route::get('/store/parts', '\App\Http\Controllers\ProductController@getPartsTypes');

Route::get('store/parts/selected', '\App\Http\Controllers\ProductController@getParts');

