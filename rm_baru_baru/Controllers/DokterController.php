<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokterController extends Controller
{
	public function indexDokter()
    {
    	// mengambil data dari table dokter
    	$dokter = DB::table('dokter')->get();
 
    	// mengirim data dokter ke view index
    	return view('index/indexDokter',['dokter' => $dokter]);
 
    }
    //
	public function tambahDokter()
	{
 
		// memanggil view tambah
		return view('tambah/tambahDokter');
	}
	
	// method untuk insert data ke table
	public function storeDokter(Request $request)
{
	// insert data ke table
	DB::table('dokter')->insert([
		//'id_dokter' => $request->id_dokter,
		'nama_dokter' => $request->nama_dokter,
		'alamat' => $request->alamat,
		'kota_tinggal' => $request->kota_tinggal,
		'no_tlp' => $request->no_tlp,
		'spesialis' => $request->spesialis
	]);
	// alihkan halaman ke halaman
	return redirect('/dokter');
 
}
	public function editDokter($id_dokter)
{
	$dokter = DB::table('dokter')->where('id_dokter',$id_dokter)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit/editDokter',['dokter' => $dokter]);
}
	public function updateDokter(Request $request)
{
	// update data
	DB::table('dokter')->where('id_dokter',$request->id_dokter)->update([
		//'id_dokter' => $request->id_dokter,
		'nama_dokter' => $request->nama_dokter,
		'alamat' => $request->alamat,
		'kota_tinggal' => $request->kota_tinggal,
		'no_tlp' => $request->no_tlp,
		'spesialis' => $request->spesialis
	]);
	return redirect('/dokter');
}
	// method untuk hapus data dokter
	public function hapus($id)
	{
		// menghapus data dokter berdasarkan id yang dipilih
		DB::table('dokter')->where('id_dokter',$id)->delete();
		
		// alihkan halaman ke halaman dokter
		return redirect('/dokter');
	}
}
