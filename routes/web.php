<?php

use App\Models\Product;
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
    return view('main', ['products' => Product::where('product_type', 'Велосипеди')->paginate(6),
        'name' => 'Аксесуари', 'lnk'=>'accessories','accessories_types' =>
            Product::where('product_type', 'Аксесуари')->whereIn('id', function($query) {$query->selectRaw('min(id)')
            ->from('products')->where('product_type', 'Аксесуари')->groupBy('type');})->orderBy('product_type')->get()]);
});
Route::get('/accessories', function () {
    return view('accessories');
});
Route::get('/basket', '\App\Http\Controllers\BasketController@view');
Route::get('/checkout', '\App\Http\Controllers\CheckoutController@view');
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
Route::post('/review', '\App\Http\Controllers\ReviewController@add')->name('feedback');

Route::get('/store/accessories', '\App\Http\Controllers\ProductController@getAccessoriesTypes');
Route::get('store/accessories/selected', '\App\Http\Controllers\ProductController@getAccessories');
Route::get('/store/parts', '\App\Http\Controllers\ProductController@getPartsTypes');
Route::get('store/parts/selected', '\App\Http\Controllers\ProductController@getParts');

