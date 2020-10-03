<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Petugas_AdminController extends Controller
{
	public function indexPetugas_Admin()
    {
    	// mengambil data dari table dokter
    	$petugas_admin = DB::table('petugas_admin')->get();
 
    	// mengirim data dokter ke view index
    	return view('indexPetugas_Admin',['petugas_admin' => $petugas_admin]);
 
    }
    //
	public function tambahPetugas_Admin()
	{
 
		// memanggil view tambah
		return view('tambahPetugas_Admin');
	}
	
	// method untuk insert data ke table
	public function storePetugas_Admin(Request $request)
{
	// insert data ke table
	DB::table('petugas_admin')->insert([
		'id_petugas' => $request->id_petugas,
		'nama_petugas' => $request->nama_petugas,
		'alamat' => $request->alamat,
		'kota_tinggal' => $request->kota_tinggal,
		'no_tlp' => $request->no_tlp
	]);
	// alihkan halaman ke halaman
	return redirect('/petugas_admin');
 
}
	public function editPetugas_Admin($id_petugas)
{
	$petugas_admin = DB::table('petugas_admin')->where('id_petugas',$id_petugas)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editPetugas_Admin',['petugas_admin' => $petugas_admin]);
}
	public function updatePetugas_Admin(Request $request)
{
	// update data
	DB::table('petugas_admin')->where('id_petugas',$request->id_petugas)->update([
		'id_petugas' => $request->id_petugas,
		'nama_petugas' => $request->nama_petugas,
		'alamat' => $request->alamat,
		'kota_tinggal' => $request->kota_tinggal,
		'no_tlp' => $request->no_tlp
	]);
	return redirect('/petugas_admin');
}
	// method untuk hapus data petugas admin
	public function hapus($id)
	{
		// menghapus data petugas admin berdasarkan id yang dipilih
		DB::table('petugas_admin')->where('id_petugas',$id)->delete();
		
		// alihkan halaman ke halaman petugas
		return redirect('/petugas_admin');
	}
}
