<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
	public function indexPasien()
    {
    	// mengambil data dari table dokter
    	$pasien = DB::table('pasien')->get();
 
    	// mengirim data dokter ke view index
    	return view('indexPasien',['pasien' => $pasien]);
 
    }
    //
	public function tambahPasien()
	{
 
		// memanggil view tambah
		return view('tambahPasien');
	}
	
	// method untuk insert data ke table
	public function storePasien(Request $request)
{
	// insert data ke table
	DB::table('pasien')->insert([
		'id_pasien' => $request->id_pasien,
		'nama_pasien' => $request->nama_pasien,
		'tgl_lahir' => $request->tgl_lahir,
		'tempat_lahir' => $request->tempat_lahir,
		'alamat' => $request->alamat,
		'kota_tinggal' => $request->kota_tinggal,
		'no_tlp' => $request->no_tlp,
		'pekerjaan' => $request->pekerjaan
	]);
	// alihkan halaman ke halaman
	return redirect('/pasien');
 
}
	public function editPasien($id_pasien)
{
	$pasien = DB::table('pasien')->where('id_pasien',$id_pasien)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editPasien',['pasien' => $pasien]);
}
	public function updatePasien(Request $request)
{
	// update data
	DB::table('pasien')->where('id_pasien',$request->id_pasien)->update([
		'id_pasien' => $request->id_pasien,
		'nama_pasien' => $request->nama_pasien,
		'tgl_lahir' => $request->tgl_lahir,
		'tempat_lahir' => $request->tempat_lahir,
		'alamat' => $request->alamat,
		'kota_tinggal' => $request->kota_tinggal,
		'no_tlp' => $request->no_tlp,
		'pekerjaan' => $request->pekerjaan
	]);
	return redirect('/pasien');
}
}
