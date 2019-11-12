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
Route::get('/order', 'ContohController@input_order');

//untuk menuju halaman index atau default dan memasukan data ke database
Route::get('/produk', 'ProdukController@index');
Route::post('/produk_post', 'ProdukController@input_produk')->name('input_produk');

//input ke db tanpa form Route::get('/produk', 'ProdukController@input_produk');

//-----------------------------------------------------------------------//

//untuk menuju halaman index atau default dan memasukan data ke database
Route::get('/customer', 'CustomerController@index');
Route::post('/customer_post', 'CustomerController@input_customer')->name('input_customer');

//input ke database tanpa form -> Route::get('/customer', 'CustomerController@input_customer');

//-----------------------------------------------------------------------//

//untuk menuju halaman index atau default dan memasukan data ke database
Route::get('/orders', 'OrdersController@index');
Route::post('/orders_post', 'OrdersController@input_orders')->name('input_orders');

//input ke db tanpa form -> Route::get('/orders', 'OrdersController@input_orders');

//-----------------------------------------------------------------------//

//untuk menuju halaman index atau default dan memasukan data ke database
Route::get('/input_penawaran', 'PenawaranController@index');
Route::post('/penawaran_post', 'PenawaranController@input_penawaran')->name('input_penawaran');
Route::get('/input_penawaran/cetak_pdf', 'PenawaranController@cetak_pdf');
//-----------------------------------------------------------------------//

//untuk menuju halaman index atau default 
Route::get('/baper', 'BaperController@index');
Route::post('/baper_post', 'BaperController@input_baper')->name('input_baper');