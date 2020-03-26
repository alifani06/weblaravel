<?php

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
    return view('welcome');
});


Route::get('/pelanggan/index', 'PelangganController@index');
Route::get('/pelanggan/create', 'PelangganController@create');
Route::get('/pelanggan/{pelanggan}', 'PelangganController@show');
Route::post('/pelanggan', 'PelangganController@store');
Route::delete('/pelanggan/{pelanggan}', 'PelangganController@destroy');
Route::get('/pelanggan/{pelanggan}/edit', 'PelangganController@edit');
Route::patch('/pelanggan/{pelanggan}', 'PelangganController@update');







//Material
Route::get('/materials/index', 'MaterialController@index');
Route::get('/materials/create', 'MaterialController@create');
Route::get('/materials/{material}', 'MaterialController@show');
Route::post('/materials', 'MaterialController@store');
Route::delete('/materials/{material}', 'MaterialController@destroy');
Route::get('/materials/{material}/edit', 'MaterialController@edit');
Route::patch('/materials/{material}', 'MaterialController@update');

//pelanggan


//supplier
Route::get('/supplier/index', 'SupplierController@index');
Route::get('/supplier/create', 'SupplierController@create');
Route::get('/supplier/{supplier}', 'SupplierController@show');
Route::post('/supplier', 'SupplierController@store');
Route::delete('/supplier/{supplier}', 'SupplierController@destroy');
Route::get('/supplier/{supplier}/edit', 'SupplierController@edit');
Route::patch('/supplier/{supplier}', 'SupplierController@update');

//pegawai
Route::get('/pegawai/index', 'PegawaiController@index');
Route::get('/pegawai/create', 'PegawaiController@create');
Route::get('/pegawai/{pegawai}', 'PegawaiController@show');
Route::post('/pegawai', 'PegawaiController@store');
Route::delete('/pegawai/{pegawai}', 'PegawaiController@destroy');
Route::get('/pegawai/{pegawai}/edit', 'PegawaiController@edit');
Route::patch('/pegawai/{pegawai}', 'PegawaiController@update');