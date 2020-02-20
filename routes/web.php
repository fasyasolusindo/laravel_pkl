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
    return redirect('login');
});

Route::get('/test', 'ContohController@index');

Route::get('/input_barang', 'ContohController@input_barang');

Route::get('/orders', 'ContohController@input_orders');

Route::get('/produk', 'ProdukController@index');
Route::post('/produk_post', 'ProdukController@input_produk')->name('input_produk');

Route::get('/customer', 'CustomerController@index');
Route::post('/customer_post', 'CustomerController@input_customer')->name('input_customer');

Route::get('/order', 'OrderController@index');
Route::post('/order_post', 'OrderController@input_order')->name('input_order');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/barang', 'BarangController@index');
Route::post('/barang_post', 'BarangController@input_barang')->name('input_barang');

Route::get('/kategori', 'KategoriController@index');
Route::post('/kategori_post', 'KategoriController@input_kategori')->name('input_kategori');

Route::get('/checkin', 'PinjamController@checkin');
Route::post('/checkin_post', 'PinjamController@check_in')->name('check_in');

Route::get('/checkout', 'PinjamController@checkout');
Route::get('/checkout/{id}/delete', 'PinjamController@delete');

Route::get('/status', 'PinjamController@status');