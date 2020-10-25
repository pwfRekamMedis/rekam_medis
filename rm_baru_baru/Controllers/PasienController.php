<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pasien;

class PasienController extends Controller
{
	public function indexPasien()
    {
		/*
    	// mengambil data dari table dokter
    	$pasien = DB::table('pasien')->get();
 
    	// mengirim data dokter ke view index
		return view('index/indexPasien',['pasien' => $pasien]);
		*/
		// mengambil data Pasien
    	$pasien = pasien::all();
 
    	// mengirim data pasien ke view pasien
		return view('index/indexPasien',['pasien' => $pasien]);
 
    }
    //
	public function tambahPasien()
	{
 
		// memanggil view tambah
		return view('tambah/tambahPasien');
	}
	
	// method untuk insert data ke table
	public function storePasien(Request $request)
{
	// insert data ke table
	//DB::table('pasien')->insert([
		pasien::create([
		//'id_pasien' => $request->id_pasien,
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
	//$pasien = DB::table('pasien')->where('id_pasien',$id_pasien)->get();
	$pasien = pasien::find($id_pasien);
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit/editPasien',['pasien' => $pasien]);
}
	public function updatePasien(Request $request)
{
	// update data
	/*
	DB::table('pasien')->where('id_pasien',$request->id_pasien)->update([
		//'id_pasien' => $request->id_pasien,
		'nama_pasien' => $request->nama_pasien,
		'tgl_lahir' => $request->tgl_lahir,
		'tempat_lahir' => $request->tempat_lahir,
		'alamat' => $request->alamat,
		'kota_tinggal' => $request->kota_tinggal,
		'no_tlp' => $request->no_tlp,
		'pekerjaan' => $request->pekerjaan
	]);
	*/
	$this->validate($request,[
		'nama_pasien' => 'required',
		'tgl_lahir' => 'required',
		'tempat_lahir' => 'required',
		'alamat' => 'required',
		'kota_tinggal' => 'required',
		'no_tlp' => 'required',
		'pekerjaan' => 'required'
	 ]);
	$pasien = pasien::find($request->id_pasien);
    $pasien->nama_pasien = $request->nama_pasien;
	$pasien->tgl_lahir = $request->tgl_lahir;
	$pasien->tempat_lahir = $request->tempat_lahir;
	$pasien->alamat = $request->alamat;
	$pasien->kota_tinggal = $request->kota_tinggal;
	$pasien->no_tlp = $request->no_tlp;
	$pasien->pekerjaan = $request->pekerjaan;
	$pasien->save();
	return redirect('/pasien');
}
	// method untuk hapus data pasien
	public function hapus($id)
	{
		// menghapus data pasien berdasarkan id yang dipilih
		DB::table('pasien')->where('id_pasien',$id)->delete();
		
		// alihkan halaman ke halaman pasien
		return redirect('/pasien');
	}
}
