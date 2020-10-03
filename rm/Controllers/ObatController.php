<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObatController extends Controller
{
	public function indexObat()
    {
    	// mengambil data dari table
    	$obat = DB::table('obat')->get();
 
    	// mengirim data ke view index
    	return view('indexObat',['obat' => $obat]);
 
    }
    //
	public function tambahObat()
	{
 
		// memanggil view tambah
		return view('tambahObat');
	}
	
	// method untuk insert data ke table
	public function storeObat(Request $request)
{
	// insert data ke table
	DB::table('obat')->insert([
		'id_obat' => $request->id_obat,
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
	$obat = DB::table('obat')->where('id_obat',$id_obat)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editObat',['obat' => $obat]);
}
	public function updateObat(Request $request)
{
	// update data
	DB::table('obat')->where('id_obat',$request->id_obat)->update([
		'id_obat' => $request->id_obat,
		'kategori_obat' => $request->kategori_obat,
		'nama_obat' => $request->nama_obat,
		'bentuk_obat' => $request->bentuk_obat,
		'tgl_kadaluarsa' => $request->tgl_kadaluarsa,
		'harga_obat' => $request->harga_obat
	]);
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
