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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sales', 'SalesController@index')->name('sales');

Route::get('/customer', 'CustomerController@index')->name('customer')->middleware('auth');

Route::resource('stock', 'StockController')->middleware('auth');


Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add')->middleware('auth');
Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
