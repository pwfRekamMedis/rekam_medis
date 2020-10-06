<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Rekam_MedisController extends Controller
{
	public function indexRekam_Medis()
    {
    	// mengambil data dari table rekam_medis
    	$rekam_medis = DB::table('rekam_medis')->get();
 
    	// mengirim data rekam_medis ke view index
    	return view('indexRekam_Medis',['rekam_medis' => $rekam_medis]);
 
	}
	
	public function tambahRekam_Medis()
	{
		$pasien = DB::table('pasien')->get();
		$petugas_admin = DB::table('petugas_admin')->get();
		$dokter = DB::table('dokter')->get();
		// memanggil view tambah
		return view('tambahRekam_Medis',['pasien' => $pasien,'petugas_admin' => $petugas_admin,'dokter' => $dokter]);
	}
	
	// method untuk insert data ke table
	public function storeRekan_Medis(Request $request)
{
	// insert data ke table
	DB::table('rekam_medis')->insert([
		'id_rekam_medis' => $request->id_rekam_medis,
		'id_pasien' => $request->id_pasien,
		'id_petugas' => $request->id_petugas,
		'id_dokter' => $request->id_dokter,
		'tgl_periksa' => $request->tgl_periksa,
		'diagnosa' => $request->diagnosa,
		'keterangan' => $request->keterangan,
		'biaya_jasa' => $request->biaya_jasa
	]);
	// alihkan halaman ke halaman
	return redirect('/rekam_medis');
 
}
	public function editRekam_Medis($id_rekam_medis)
{
	$rekam_medis = DB::table('rekam_medis')->where('id_rekam_medis',$id_rekam_medis)->get();
	// passing data rekam_medis yang didapat ke view edit.blade.php
	return view('editRekam_Medis',['rekam_medis' => $rekam_medis]);
}
	public function updateRekam_Medis(Request $request)
{
	// update data
	DB::table('dokter')->where('id_dokter',$request->id_dokter)->update([
		'id_dokter' => $request->id_dokter,
		'nama_dokter' => $request->nama_dokter,
		'alamat' => $request->alamat,
		'kota_tinggal' => $request->kota_tinggal,
		'no_tlp' => $request->no_tlp,
		'spesialis' => $request->spesialis
	]);
	return redirect('/dokter');
	}
}

