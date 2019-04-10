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
    return view('admin.index');
});
Route::get('/', 'BarangController@index');
	Route::get('/admin/barang/index', 'BarangController@index');
	Route::get('/admin/barang/add', 'BarangController@add');
	Route::post('/admin/barang/save', 'BarangController@save');
	Route::get('/admin/barang/edit/{id}', 'BarangController@edit');
	Route::post('/admin/barang/update', 'BarangController@update');
	Route::get('/admin/barang/delete/{id}', 'BarangController@delete');

Route::get('/', 'PetugasController@index');
	Route::get('/admin/petugas/index', 'PetugasController@index');
	Route::get('/admin/petugas/add', 'PetugasController@add');
	Route::post('/admin/petugas/save', 'PetugasController@save');
	Route::get('/admin/petugas/edit/{id}', 'PetugasController@edit');
	Route::post('/admin/petugas/update', 'PetugasController@update');
	Route::get('/admin/petugas/delete/{id}', 'PetugasController@delete');

Route::get('/', 'DistributorController@index');
	Route::get('/admin/distributor/index', 'DistributorController@index');
	Route::get('/admin/distributor/add', 'DistributorController@add');
	Route::post('/admin/distributor/save', 'DistributorController@save');
	Route::get('/admin/distributor/edit/{id}', 'DistributorController@edit');
	Route::post('/admin/distributor/update', 'DistributorController@update');
	Route::get('/admin/distributor/delete/{id}', 'DistributorController@delete');


Route::get('/', 'PenjualanController@index');
	Route::get('/admin/penjualan/index', 'PenjualanController@index');
	Route::get('/admin/penjualan/add', 'PenjualanController@add');
	Route::post('/admin/penjualan/save', 'PenjualanController@save');
	Route::get('/admin/penjualan/edit/{id}', 'PenjualanController@edit');
	Route::post('/admin/penjualan/update', 'PenjualanController@update');
	Route::get('/admin/penjualan/delete/{id}', 'PenjualanController@delete');

Route::get('/', 'TblbrgmasukController@index');
	Route::get('/admin/brgmasuk/index', 'TblbrgmasukController@index');
	Route::get('/admin/brgmasuk/add', 'TblbrgmasukController@add');
	Route::post('/admin/brgmasuk/save', 'TblbrgmasukController@save');
	Route::get('/admin/brgmasuk/edit/{id}', 'TblbrgmasukController@edit');
	Route::post('/admin/brgmasuk/update', 'TblbrgmasukController@update');
	Route::get('/admin/brgmasuk/delete/{id}', 'TblbrgmasukController@delete');

Route::get('/admin/index', function () {
    return view('admin.index');
});
Route::get('/admin/barang/index', function () {
    return view('admin.barang.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
