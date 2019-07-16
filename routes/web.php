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

Route::get('/', 'ProductsController@index');

Route::get('cart', 'CartController@cart');

Route::get('addToCart/{id}', 'CartController@addToCart');

Route::get('deleteFromCart/{id}', 'CartController@deleteFromCart');

Route::get('/logout', 'UserController@getLogout');

