<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\rekam_medis;
use App\pasien;
use App\petugas_admin;
use App\dokter;

class Rekam_MedisController extends Controller
{
	public function indexRekam_Medis(Request $request)
    {
		/*
    	// mengambil data dari table rekam_medis
    	$rekam_medis = DB::table('rekam_medis')->get();
 
    	// mengirim data rekam_medis ke view index
		return view('index/indexRekam_Medis',['rekam_medis' => $rekam_medis]);
		*/

		// mengambil data rekam medis
		if($request -> has('cari')){
			$pasien = pasien::where('nama_pasien','LIKE','%'.$request->cari.'%');
			$petugas_admin = petugas_admin::where('nama_petugas','LIKE','%'.$request->cari.'%');
			$dokter = dokter::where('nama_petugas','LIKE','%'.$request->cari.'%');
			$rekam_medis = rekam_medis::where('id_rekam_medis','LIKE','%'.$request->cari.'%')
			//->orwhere('id_pasien','LIKE','%'.$request->cari.'%')
			//->orwhere('id_petugas','LIKE','%'.$request->cari.'%')
			//->orwhere('id_dokter','LIKE','%'.$request->cari.'%')
			->orwhere('tgl_periksa','LIKE','%'.$request->cari.'%')
			->orwhere('diagnosa','LIKE','%'.$request->cari.'%')
			->orwhere('biaya_jasa','LIKE','%'.$request->cari.'%')
			->get();
		}else{
			$pasien = pasien::all();
			$petugas_admin = petugas_admin::all();
			$dokter = dokter::all();
			$rekam_medis = rekam_medis::all();
		}
		/*
		$data = array(
			'menu' => 'dokter',
			'submenu' => ''
		);
		*/
    	// mengirim data ke view rekam medis
		return view('index/indexRekam_Medis',compact('rekam_medis'),compact('pasien'),compact('petugas_admin'),compact('dokter'));
 
	}
	
	public function indexRekam_MedisHistori(Request $request)
    {
		/*
    	// mengambil data dari table rekam_medis
    	$rekam_medis = DB::table('rekam_medis')->get();
 
    	// mengirim data rekam_medis ke view index
		return view('index/indexRekam_Medis',['rekam_medis' => $rekam_medis]);
		
		*/
		// mengambil data rekam medis
		$pasien = pasien::all();
		$petugas_admin = petugas_admin::all();
		$dokter = dokter::all();
		$rekam_medis = rekam_medis::where('id_rekam_medis','=','0');
		
		if($request -> has('cari')){
			$pasien = pasien::all();
			$petugas_admin = petugas_admin::all();
			$dokter = dokter::all();
			$rekam_medis = rekam_medis::where('id_pasien','LIKE','%'.$request->cari.'%')
			->get();
		}
 
    	// mengirim data ke view rekam medis
		return view('index/indexRekam_MedisHistori',compact('rekam_medis'),compact('pasien'),compact('petugas_admin'),compact('dokter'));
 
	}
	
	
	public function indexRekam_MedisPasien()//per pasien
    {
		/*
    	// mengambil data dari table rekam_medis
    	$rekam_medis = DB::table('rekam_medis')->get();
 
    	// mengirim data rekam_medis ke view index
		return view('index/indexRekam_Medis',['rekam_medis' => $rekam_medis]);
		*/

		// mengambil data rekam medis
		$pasien = pasien::all();
		$petugas_admin = petugas_admin::all();
		$dokter = dokter::all();
		$rekam_medis = rekam_medis::all();
		
 
    	// mengirim data ke view rekam medis
		return view('index/indexRekam_MedisPasien',compact('rekam_medis'),compact('pasien'),compact('petugas_admin'),compact('dokter'));
 
	}
	
	public function tambahRekam_Medis()
	{
		// memanggil view tambah
		$pasien = DB::table('pasien')->get();
		$petugas_admin = DB::table('petugas_admin')->get();
		$dokter = DB::table('dokter')->get();
		return view('tambah/tambahRekam_Medis',['pasien' => $pasien,'petugas_admin' => $petugas_admin,'dokter' => $dokter]);
	}
	
	// method untuk insert data ke table
	public function storeRekam_Medis(Request $request)
{
	// insert data ke table
	DB::table('rekam_medis')->insert([
		//'id_rekam_medis' => $request->id_rekam_medis,
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
	$pasien = DB::table('pasien')->get();
	$petugas_admin = DB::table('petugas_admin')->get();
	$dokter = DB::table('dokter')->get();
	// passing data rekam_medis yang didapat ke view edit.blade.php
	return view('edit/editRekam_Medis',['rekam_medis' => $rekam_medis,'pasien' => $pasien,'petugas_admin' => $petugas_admin,'dokter' => $dokter]);
}
	public function updateRekam_Medis(Request $request)
{
	// update data
	DB::table('rekam_medis')->where('id_rekam_medis',$request->id_rekam_medis)->update([
		//'id_rekam_medis' => $request->id_rekam_medis,
		'id_pasien' => $request->id_pasien,
		'id_petugas' => $request->id_petugas,
		'id_dokter' => $request->id_dokter,
		'tgl_periksa' => $request->tgl_periksa,
		'diagnosa' => $request->diagnosa,
		'keterangan' => $request->keterangan,
		'biaya_jasa' => $request->biaya_jasa
	]);
	return redirect('/rekam_medis');
	}
	// method untuk hapus data rekam medis
	public function hapus($id_rekam_medis)
	{
		// menghapus data rekam medis berdasarkan id yang dipilih
		DB::table('rekam_medis')->where('id_rekam_medis',$id_rekam_medis)->delete();
		
		// alihkan halaman ke halaman rekam medis
		return redirect('/rekam_medis');
	}
}

