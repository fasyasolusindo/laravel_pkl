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

Route::get('/test', 'ContohController@index');

Route::get('/input_barang', 'ContohController@input_barang');

Route::get('/orders', 'ContohController@input_orders');

Route::get('/produk', 'ProdukController@index');
Route::post('/produk_post', 'ProdukController@input_produk')->name('input_produk');
// Route::get('/produk', 'ProdukController@input_produk');

Route::get('/customer', 'CustomerController@index');
Route::post('/customer_post', 'CustomerController@input_customer')->name('input_customer');
// Route::get('/customer', 'CustomerController@input_customer');

Route::get('/order', 'OrderController@index');
Route::post('/order_post', 'OrderController@input_order')->name('input_order');
// Route::get('/order', 'OrderController@input_order');

Route::get('/inventory', 'InventoryController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/barang', 'BarangController@index');
Route::post('/barang_post', 'BarangController@input_barang')->name('input_barang');
