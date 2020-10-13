<!DOCTYPE html>
<html>
<head>
	<title>Rekam Medis</title>
</head>
<body>
 
	<h2>Rekam Medis</a></h2>
	<h3>Tambah Data Rekam Medis</h3>
 
	<a href="/rekam_medis"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/rekam_medis/store" method="post">
		{{ csrf_field() }}
		Id Rekam Medis <input type="text" name="id_rekam_medis" required="required"> <br/>
        Nama Pasien <select name="id_pasien" required="required">@foreach ($pasien as $p)<option value="{{ $p -> id_pasien }}">{{$p -> nama_pasien}}</option>@endforeach</select></br>
        Nama Petugas <select name="id_petugas" required="required">@foreach ($petugas_admin as $pa)<option value="{{ $pa -> id_petugas }}">{{$pa -> nama_petugas}}</option>@endforeach</select></br>
        Nama Dokter <select name="id_dokter" required="required">@foreach ($dokter as $d)<option value="{{ $d -> id_dokter }}">{{$d -> nama_dokter}}</option>@endforeach</select></br>
		Tgl Periksa <input type="text" name="tgl_periksa" required="required"> <br/>
		Diagnosa <input type="text" name="diagnosa" required="required"> <br/>
		Keterangan <input type="text" name="keterangan" required="required"> <br/>
		Biaya Jasa <input type="text" name="biaya_jasa" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>