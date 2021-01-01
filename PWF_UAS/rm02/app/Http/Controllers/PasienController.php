<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pasien;
use App\User;
use App\users;

class PasienController extends Controller
{
	public function indexPasien(Request $request)
    {
		/*
    	// mengambil data dari table pasien
    	$pasien = DB::table('pasien')->get();
 
    	// mengirim data pasien ke view index
		return view('index/indexPasien',['pasien' => $pasien]);
		*/
		// mengambil data Pasien
    	if($request -> has('cari')){
			$pasien = pasien::where('id_pasien','LIKE','%'.$request->cari.'%')
			->orwhere('nama_pasien','LIKE','%'.$request->cari.'%')
			->orwhere('tempat_lahir','LIKE','%'.$request->cari.'%')
			->orwhere('kota_tinggal','LIKE','%'.$request->cari.'%')
			->orwhere('alamat','LIKE','%'.$request->cari.'%')
			->orwhere('pekerjaan','LIKE','%'.$request->cari.'%')->get();
		}else{
			$users = users::all();
			$pasien = pasien::all();
		}
		/*
		$data = array(
			'menu' => 'pasien',
			'submenu' => ''
		);
		*/
    	// mengirim data pasien ke view pasien
		return view('index/indexPasien',compact('pasien'),compact('users'));
 
    }
    //
	public function tambahPasien()
	{
 
		// memanggil view tambah
		$users = DB::table('users')->get();
		return view('tambah/tambahPasien',['users' => $users]);
	}
	
	// method untuk insert data ke table
	public function storePasien(Request $request)
{
	// insert data ke table
	//DB::table('pasien')->insert([
		pasien::create([
		//'id_pasien' => $request->id_pasien,
		'nama_pasien' => $request->nama_pasien,
		'id' => $request->id,
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
	$users = DB::table('users')->get();
	return view('edit/editPasien',['pasien' => $pasien,'users' => $users]);
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
		//'tgl_lahir' => 'required',
		//'tempat_lahir' => 'required',
		//'alamat' => 'required',
		//'kota_tinggal' => 'required',
		'no_tlp' => 'required',
		//'pekerjaan' => 'required'
	 ]);
	$pasien = pasien::find($request->id_pasien);
    $pasien->nama_pasien = $request->nama_pasien;
	$pasien->id = $request->id;
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
