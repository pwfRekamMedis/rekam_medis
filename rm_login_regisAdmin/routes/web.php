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

Route::get('/', 'AuthController@showFormLogin')->name('login');
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', 'HomeController@index')->name('home');
	Route::get('homep', 'HomepController@index')->name('homep');
    Route::get('logout', 'AuthController@logout')->name('logout');
 
});
/*
Route::get('/', function () {
    return view('home');
});
*/
Route::get('/test', function() {
	return view ('indexRM');
});

Route::get('/dokter','DokterController@indexDokter');
Route::get('/dokter/tambah','DokterController@tambahDokter');
Route::post('/dokter/store','DokterController@storeDokter');
Route::get('/dokter/edit/{id_dokter}','DokterController@editDokter');
Route::post('/dokter/update','DokterController@updateDokter');
Route::get('/dokter/hapus/{id_dokter}','DokterController@hapus');

Route::get('/obat','ObatController@indexObat');
Route::get('/obat/tambah','ObatController@tambahObat');
Route::post('/obat/store','ObatController@storeObat');
Route::get('/obat/edit/{id_obat}','ObatController@editObat');
Route::post('/obat/update','ObatController@updateObat');
Route::get('/obat/hapus/{id_obat}','ObatController@hapus');

Route::get('/pasien','PasienController@indexPasien');
Route::get('/pasien/tambah','PasienController@tambahPasien');
Route::post('/pasien/store','PasienController@storePasien');
Route::get('/pasien/edit/{id_pasien}','PasienController@editPasien');
Route::post('/pasien/update','PasienController@updatePasien');
Route::get('/pasien/hapus/{id_pasien}','PasienController@hapus');

Route::get('/petugas_admin','Petugas_AdminController@indexPetugas_Admin');
Route::get('/petugas_admin/tambah','Petugas_AdminController@tambahPetugas_Admin');
Route::post('/petugas_admin/store','Petugas_AdminController@storePetugas_Admin');
Route::get('/petugas_admin/edit/{id_petugas}','Petugas_AdminController@editPetugas_Admin');
Route::post('/petugas_admin/update','Petugas_AdminController@updatePetugas_Admin');
Route::get('/petugas_admin/hapus/{id_petugas}','Petugas_AdminController@hapus');
Route::get('/petugas_admin/regis','Petugas_AdminController@aksesAdmin');
Route::post('/petugas_admin/storeAdmin','Petugas_AdminController@storeAdmin');

Route::get('/rekam_medis','Rekam_MedisController@indexRekam_Medis');
Route::get('/rekam_medis/tambah','Rekam_MedisController@tambahRekam_Medis');
Route::post('/rekam_medis/store','Rekam_MedisController@storeRekam_Medis');
Route::get('/rekam_medis/edit/{id_rekam_medis}','Rekam_MedisController@editRekam_Medis');
Route::post('/rekam_medis/update','Rekam_MedisController@updateRekam_Medis');
Route::get('/rekam_medis/hapus/{id_rekam_medis}','Rekam_MedisController@hapus');

Route::get('/rekam_medis/histori','Rekam_MedisController@indexRekam_MedisHistori');
Route::get('/rekam_medis/histori/cari','Rekam_MedisController@indexRekam_MedisHistoriCari');
Route::get('/rekam_medis/pasien','Rekam_MedisController@indexRekam_MedisPasien');

Route::get('/resep_obat','Resep_ObatController@indexResep_Obat');
Route::get('/resep_obat/tambah','Resep_ObatController@tambahResep_Obat');
Route::post('/resep_obat/store','Resep_ObatController@storeResep_Obat');
Route::get('/resep_obat/edit/{id_resep}','Resep_ObatController@editResep_Obat');
Route::post('/resep_obat/update','Resep_ObatController@updateResep_Obat');
Route::get('/resep_obat/hapus/{id_resep}','Resep_ObatController@hapus');












