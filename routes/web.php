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

Route::get('/error', function () {
    return view('admin.errors.admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::group(['prefix' => 'admin'] , function(){
Route::group(['middleware' => 'admin'], function(){
	Route::get('/', function () {
    return view('admin.index');
	});

	Route::get('/tambah_petugas', function () {
    return view('admin.tambah_petugas');
	});

	Route::get('/tambah_barang', function () {
    return view('admin.tambah_barang');
	});

	Route::get('/tambah_jenis', function () {
	    return view('admin.tambah_jenis');
	});

	Route::get('/tambah_distributor', function () {
	    return view('admin.tambah_distributor');
	});

	Route::get('/tambah_admin', function () {
    return view('admin.tambah_admin');
	});

	Route::post('save_barang', 'BarangController@save_barang');
	Route::post('save_jenis', 'BarangController@save_jenis');
	Route::post('save_petugas', 'PenggunaController@save_petugas');
	Route::post('save_distributor', 'PenggunaController@save_distributor');
	Route::post('save_admin', 'PenggunaController@save_admin');

	Route::get('delete_admin/{id}', 'PenggunaController@delete_admin');
	Route::get('delete_distributor/{id}', 'PenggunaController@delete_distributor');
	Route::get('delete_petugas/{id}', 'PenggunaController@delete_petugas');
	Route::get('delete_barang/{id}', 'BarangController@delete_barang');
	Route::get('delete_jenis/{id}', 'BarangController@delete_jenis');
});
});


Route::get('/jual', function () {
    return view('admin.penjualan');
	});

Route::get('/beli', function () {
    return view('admin.pembelian');
	});

Route::get('penjualan', 'BarangController@penjualan');
Route::get('pembelian', 'BarangController@pembelian');
Route::post('barang_masuk', 'BarangController@barang_masuk');