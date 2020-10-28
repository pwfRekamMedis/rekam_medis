<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\petugas_admin;

class Petugas_AdminController extends Controller
{
	public function indexPetugas_Admin()
    {
		/*
    	// mengambil data dari table petugas admin
    	$petugas_admin = DB::table('petugas_admin')->get();
 
    	// mengirim data petugas admin ke view index
		return view('index/indexPetugas_Admin',['petugas_admin' => $petugas_admin]);
		*/
		// mengambil data petugas admin
    	$petugas_admin = petugas_admin::all();
 
    	// mengirim data ke view petugas
		return view('index/indexPetugas_Admin',['petugas_admin' => $petugas_admin]);
 
    }
    //
	public function tambahPetugas_Admin()
	{
 
		// memanggil view tambah
		return view('tambah/tambahPetugas_Admin');
	}
	
	// method untuk insert data ke table
	public function storePetugas_Admin(Request $request)
{
	// insert data ke table
	//DB::table('petugas_admin')->insert([
		petugas_admin::create([
		//'id_petugas' => $request->id_petugas,
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
	//$petugas_admin = DB::table('petugas_admin')->where('id_petugas',$id_petugas)->get();
	$petugas_admin = petugas_admin::find($id_petugas);
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit/editPetugas_Admin',['petugas_admin' => $petugas_admin]);
}
	public function updatePetugas_Admin(Request $request)
{
	// update data
	/*
	DB::table('petugas_admin')->where('id_petugas',$request->id_petugas)->update([
		//'id_petugas' => $request->id_petugas,
		'nama_petugas' => $request->nama_petugas,
		'alamat' => $request->alamat,
		'kota_tinggal' => $request->kota_tinggal,
		'no_tlp' => $request->no_tlp
	]);
	*/
	$this->validate($request,[
		'nama_petugas' => 'required',
		//'alamat' => 'required',
		//'kota_tinggal' => 'required',
		'no_tlp' => 'required'
	 ]);
	$petugas_admin = petugas_admin::find($request->id_petugas);
    $petugas_admin->nama_petugas = $request->nama_petugas;
	$petugas_admin->alamat = $request->alamat;
	$petugas_admin->kota_tinggal = $request->kota_tinggal;
	$petugas_admin->no_tlp = $request->no_tlp;
	$petugas_admin->save();
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
