<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Resep_ObatController extends Controller
{
	public function indexResep_Obat()
    {
    	// mengambil data dari table resep_obat
    	$resep_obat = DB::table('resep_obat')->get();
 
    	// mengirim data resep_obat ke view index
    	return view('indexResep_Obat',['resep_obat' => $resep_obat]);
 
	}
	
	public function tambahResep_Obat()
	{
		$obat = DB::table('obat')->get();
		$rekam_medis = DB::table('rekam_medis')->get();
		// memanggil view tambah
		return view('tambahResep_Obat',['obat' => $obat,'rekam_medis' => $rekam_medis]);
	}
	
	// method untuk insert data ke table
	public function storeResep_Obat(Request $request)
{
	// insert data ke table
	DB::table('resep_obat')->insert([
		'id_resep' => $request->id_resep,
		'id_obat' => $request->id_obat,
		'id_rekam_medis' => $request->id_rekam_medis,
		'jumlah' => $request->jumlah,
	]);
	// alihkan halaman ke halaman
	return redirect('/resep_obat');
 
}
	public function editResep_Obat($id_resep)
{
	$resep_obat = DB::table('resep_obat')->where('id_resep',$id_resep)->get();
	$obat = DB::table('obat')->get();
	$rekam_medis = DB::table('rekam_medis')->get();
	// passing data resep_obat yang didapat ke view edit.blade.php
	return view('editResep_Obat',['resep_obat' => $resep_obat,'obat' => $obat,'rekam_medis' => $rekam_medis]);
}
	public function updateResep_Obat(Request $request)
{
	// update data
	DB::table('resep_obat')->where('id_resep',$request->id_resep)->update([
		'id_resep' => $request->id_resep,
		'id_obat' => $request->id_obat,
		'id_rekam_medis' => $request->id_rekam_medis,
		'jumlah' => $request->jumlah,
	]);
	return redirect('/resep_obat');
	}
	// method untuk hapus data resep_obat
	public function hapus($id_resep)
	{
		// menghapus data resep obat berdasarkan id yang dipilih
		DB::table('resep_obat')->where('id_resep',$id_resep)->delete();
		
		// alihkan halaman ke halaman rekam medis
		return redirect('/resep_obat');
	}
}

