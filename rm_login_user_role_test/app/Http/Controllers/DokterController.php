<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\dokter;

class DokterController extends Controller
{
	public function indexDokter(Request $request)
    {
		/*
    	// mengambil data dari table dokter
    	$dokter = DB::table('dokter')->get();
 
    	// mengirim data dokter ke view index
		return view('index/indexDokter',['dokter' => $dokter]);
		*/
		
		// mengambil data dokter
		if($request -> has('cari')){
			$dokter = dokter::where('id_dokter','LIKE','%'.$request->cari.'%')
			->orwhere('nama_dokter','LIKE','%'.$request->cari.'%')
			->orwhere('alamat','LIKE','%'.$request->cari.'%')
			->orwhere('kota_tinggal','LIKE','%'.$request->cari.'%')
			->orwhere('no_tlp','LIKE','%'.$request->cari.'%')
			->orwhere('spesialis','LIKE','%'.$request->cari.'%')->get();
		}else{
			$dokter = dokter::all();
		}
		
		$data = array(
			'menu' => 'dokter',
			'submenu' => ''
		);
 
    	// mengirim data dokter ke view dokter
		return view('index/indexDokter',['dokter' => $dokter],$data);
		
 
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
	//DB::table('dokter')->insert([
	dokter::create([
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
	//$dokter = DB::table('dokter')->where('id_dokter',$id_dokter)->get();
	$dokter = dokter::find($id_dokter);
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit/editDokter',['dokter' => $dokter]);
}
	public function updateDokter(Request $request)
{
	// update data
	/*
	DB::table('dokter')->where('id_dokter',$request->id_dokter)->update([
		//'id_dokter' => $request->id_dokter,
		'nama_dokter' => $request->nama_dokter,
		'alamat' => $request->alamat,
		'kota_tinggal' => $request->kota_tinggal,
		'no_tlp' => $request->no_tlp,
		'spesialis' => $request->spesialis
	]);
	*/
	$this->validate($request,[
		//'id_dokter' => 'required',
		'nama_dokter' => 'required',
		//'alamat' => 'required',
		//'kota_tinggal' => 'required',
		'no_tlp' => 'required',
		'spesialis' => 'required'
	 ]);
	$dokter = dokter::find($request->id_dokter);
    $dokter->nama_dokter = $request->nama_dokter;
	$dokter->alamat = $request->alamat;
	$dokter->kota_tinggal = $request->kota_tinggal;
	$dokter->no_tlp = $request->no_tlp;
	$dokter->spesialis = $request->spesialis;
	$dokter->save();
	
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
