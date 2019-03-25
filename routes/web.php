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
});
Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();
Route::get('/', 'HomeController@home');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/supplier', 'SupplierController@index');
Route::get('/tambah_supplier', 'SupplierController@create');
Route::post('/supplier', 'SupplierController@store');
Route::get('/supplier/edit/{id}', 'SupplierController@edit');
Route::put('/supplier/{id}/edit/', 'SupplierController@update');
Route::delete('/supplier/{id}', 'SupplierController@destroy');

Route::get('/customer', 'CustomerController@index');
Route::delete('/customer/{id}', 'CustomerController@destroy');

Route::get('/produk', 'ProdukController@index');

Route::get('/detail_produk/{id}', 'ProdukController@show');

Route::get('/cart', 'CartsController@index');
Route::get('/cart/clear', 'CartsController@clear');
Route::post('/cart/{id}', 'CartsController@store');

Route::get('/pembelian', 'PembelianController@index');
Route::post('/pembelian', 'PembelianController@store');
Route::get('/pembelian/tambah', 'PembelianController@create');
Route::post('/pembelian/ikan', 'PembelianController@tambah_ikan');
Route::get('/pembelian/clear', 'PembelianController@clear');
