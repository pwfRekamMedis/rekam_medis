<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\obat;

class ObatController extends Controller
{
	public function indexObat()
    {
		/*
    	// mengambil data dari table
    	$obat = DB::table('obat')->get();
 
    	// mengirim data ke view index
		return view('index/indexObat',['obat' => $obat]);
		*/
		
		// mengambil data obat
    	$obat = obat::all();
 
    	// mengirim data obat ke view obat
		return view('index/indexObat',['obat' => $obat]);
		
 
    }
    //
	public function tambahObat()
	{
 
		// memanggil view tambah
		return view('tambah/tambahObat');
	}
	
	// method untuk insert data ke table
	public function storeObat(Request $request)
{
	// insert data ke table
	//DB::table('obat')->insert([
		obat::create([
		//'id_obat' => $request->id_obat,
		'kategori_obat' => $request->kategori_obat,
		'nama_obat' => $request->nama_obat,
		'bentuk_obat' => $request->bentuk_obat,
		'tgl_kadaluarsa' => $request->tgl_kadaluarsa,
		'harga_obat' => $request->harga_obat
	]);
	// alihkan halaman ke halaman
	return redirect('/obat');
 
}
	public function editObat($id_obat)
{
	//$obat = DB::table('obat')->where('id_obat',$id_obat)->get();
	$obat = obat::find($id_obat);
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit/editObat',['obat' => $obat]);
}
	public function updateObat(Request $request)
{
	// update data
	/*
	DB::table('obat')->where('id_obat',$request->id_obat)->update([
		//'id_obat' => $request->id_obat,
		'kategori_obat' => $request->kategori_obat,
		'nama_obat' => $request->nama_obat,
		'bentuk_obat' => $request->bentuk_obat,
		'tgl_kadaluarsa' => $request->tgl_kadaluarsa,
		'harga_obat' => $request->harga_obat
	]);
	*/
	
	$this->validate($request,[
		'kategori_obat' => 'required',
		//'nama_obat' => 'required',
		//'bentuk_obat' => 'required',
		'tgl_kadaluarsa' => 'required',
		'harga_obat' => 'required'
	 ]);
	$obat = obat::find($request->id_obat);
    $obat->kategori_obat = $request->kategori_obat;
	$obat->nama_obat = $request->nama_obat;
	$obat->bentuk_obat = $request->bentuk_obat;
	$obat->tgl_kadaluarsa = $request->tgl_kadaluarsa;
	$obat->harga_obat = $request->harga_obat;
	$obat->save();
	
	return redirect('/obat');
}
	// method untuk hapus data obat
	public function hapus($id)
	{
		// menghapus data obat berdasarkan id yang dipilih
		DB::table('obat')->where('id_obat',$id)->delete();
		
		// alihkan halaman ke halaman obat
		return redirect('/obat');
	}
}
