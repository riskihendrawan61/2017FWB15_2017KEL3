<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');

Route::get('/loginpetugas', function () {
    return view('loginpetugas');
});

Route::get('/halamanwajibpajak', function () {
    return view('halaman/master');
});

Route::get('/wajibpajak/tambah', function () {
     return view('wajibpajak.tambah');
 });
Route::post('/wajibpajak/simpan','wajibpajakcontroller@simpan');
Route::group(['middleware'=>'Autentifikasiuser'],function()
{

Route::get('/wajibpajak', 'wajibpajakcontroller@awal');
Route::get('wajibpajak/{wajibpajak}','wajibpajakcontroller@lihat');
Route::get('wajibpajak/hapus/{wajibpajak}','wajibpajakcontroller@hapus');

Route::get('/wilayah', 'wilayahcontroller@awal');
Route::get('wilayah/hapus/{wilayah}','wilayahcontroller@hapus');

Route::get('/kendaraan', 'kendaraancontroller@awal');
Route::get('kendaraan/hapus/{kendaraan}','kendaraancontroller@hapus');
Route::get('kendaraan/tambah', 'kendaraancontroller@tambah');
Route::post('kendaraan/simpan','kendaraancontroller@simpan');
Route::get('kendaraan/edit/{kendaraan}','kendaraancontroller@edit');
Route::post('kendaraan/edit/{kendaraan}','kendaraancontroller@update');

Route::get('/stnk', 'stnkcontroller@awal');
Route::get('stnk/hapus/{stnk}','stnkcontroller@hapus');
Route::get('stnk/tambah', 'stnkcontroller@tambah');
Route::post('stnk/simpan','stnkcontroller@simpan');
Route::get('stnk/edit/{stnk}','stnkcontroller@edit');
Route::post('stnk/edit/{stnk}','stnkcontroller@update');

Route::get('/petugas', 'petugascontroller@awal');
Route::get('petugas/hapus/{petugas}','petugascontroller@hapus');
Route::get('petugas/tambah', 'petugascontroller@tambah');
Route::post('petugas/simpan','petugascontroller@simpan');
Route::get('petugas/edit/{petugas}','petugascontroller@edit');
Route::post('petugas/edit/{petugas}','petugascontroller@update');

Route::get('/tagihanstnk', 'tagihanstnkcontroller@awal');
Route::get('tagihanstnk/hapus/{tagihanstnk}','tagihanstnkcontroller@hapus');
Route::get('tagihanstnk/tambah', 'tagihanstnkcontroller@tambah');
Route::post('tagihanstnk/simpan','tagihanstnkcontroller@simpan');
Route::get('tagihanstnk/edit/{tagihanstnk}','tagihanstnkcontroller@edit');
Route::post('tagihanstnk/edit/{tagihanstnk}','tagihanstnkcontroller@update');

Route::get('/', function () {
    return view('master');

});


Route::get('/welcome', function () {
    return view('welcome');
});

});