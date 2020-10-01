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

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/', function() {
	return view ('indexRM');
});

Route::get('/dokter','DokterController@indexDokter');
Route::get('/dokter/tambah','DokterController@tambahDokter');
Route::post('/dokter/store','DokterController@storeDokter');
Route::get('/dokter/edit/{id_dokter}','DokterController@editDokter');
Route::post('/dokter/update','DokterController@updateDokter');

