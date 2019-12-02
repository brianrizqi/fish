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

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Auth::routes();
Route::get('/', 'HomeController@home')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/supplier', 'SupplierController@index')->name('supplier');
Route::get('/tambah_supplier', 'SupplierController@create')->name('tambah_supplier');
Route::post('/supplier', 'SupplierController@store')->name('store_supplier');
Route::get('/supplier/edit/{id}', 'SupplierController@edit')->name('edit_supplier');
Route::put('/supplier/{id}/edit/', 'SupplierController@update')->name('update_supplier');
Route::delete('/supplier/{id}', 'SupplierController@destroy')->name('hapus_supplier');

Route::get('/customer', 'CustomerController@index')->name('customer');
Route::delete('/customer/{id}', 'CustomerController@destroy')->name('hapus_customer');

Route::get('/produk', 'ProdukController@index')->name('produk');
Route::get('/produk/tambah', 'ProdukController@create')->name('tambah_produk');
Route::get('/produk/{id}', 'ProdukController@edit')->name('edit_produk');
Route::post('/produk', 'ProdukController@store')->name('store_produk');

Route::get('/ikan', 'IkanController@index')->name('ikan');
Route::get('/ikan/create', 'IkanController@create')->name('tambah_ikan');
Route::post('/ikan', 'IkanController@store')->name('store_ikan');
Route::get('/ikan/edit/{id}', 'IkanController@edit')->name('edit_ikan');
Route::put('/ikan/{id}/edit', 'IkanController@update')->name('update_ikan');
Route::delete('/ikan/{id}', 'IkanController@destroy')->name('hapus_ikan');

Route::get('/detail_produk/{id}', 'ProdukController@show')->name('detail_produk');

Route::get('/cart', 'CartsController@index')->name('cart');
Route::get('/cart/clear', 'CartsController@clear')->name('clear_cart');
Route::post('/cart/{id}', 'CartsController@store')->name('store_cart');

Route::get('/pembelian', 'PembelianController@index')->name('pembelian');
Route::post('/pembelian', 'PembelianController@store')->name('store_pembelian');
Route::get('/pembelian/tambah', 'PembelianController@create')->name('tambah_pembelian');
Route::post('/pembelian/ikan', 'PembelianController@tambah_ikan')->name('create_ikan');
Route::get('/pembelian/clear', 'PembelianController@clear')->name('clear_pembelian');
Route::get('/pembelian/{id}', 'PembelianController@detail')->name('detail_pembelian');
Route::get('/pengadaan', 'PembelianController@pengadaan')->name('pengadaan');
Route::get('/pembelian/delete/{id}', 'PembelianController@destroy')->name('pembelian.destroy');

Route::get('/beli', 'PenjualanController@store')->name('beli');
Route::get('/penjualan', 'PenjualanController@index')->name('penjualan');
Route::get('/penjualan/{id}', 'PenjualanController@show')->name('detail_penjualan');
Route::get('/penjualan/bukti/{id}', 'PenjualanController@detail_bukti')->name('detail_bukti');
Route::post('/penjualan/bukti/{id}', 'PenjualanController@upload')->name('bukti_penjualan');
Route::get('/penjualan/verif/{id}', 'PenjualanController@verif')->name('verif_penjualan');
Route::delete('/penjualan/{id}', 'PenjualanController@destroy')->name('hapus_penjualan');

Route::get('/telegram', 'UserController@telegram');
Route::post('/telegram', 'UserController@store');

Route::get('/penjadwalan', 'PenjadwalanController@index')->name('penjadwalan');
Route::get('/penjadwalan/hasil', 'PenjadwalanController@result')->name('hasil_penjadwalan');
