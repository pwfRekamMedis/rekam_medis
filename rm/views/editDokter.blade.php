<!DOCTYPE html>
<html>
<head>
	<title>Rekam Medis</title>
</head>
<body>
 
	<h2>Dokter</a></h2>
	<h3>Edit Data Dokter</h3>
 
	<a href="/dokter"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($dokter as $d)
	<form action="/dokter/update" method="post">
		{{ csrf_field() }}
		Id <input type="text" required="required" name="id_dokter" value="{{ $d->id_dokter }}"> <br/>
		Nama <input type="text" required="required" name="nama_dokter" value="{{ $d->nama_dokter }}"> <br/>
		Alamat <input type="text" required="required" name="alamat" value="{{ $d->alamat }}"> <br/>
		Kota <input type="text" required="required" name="kota_tinggal" value="{{ $d->kota_tinggal }}"> <br/>
		NoTelp <input type="text" required="required" name="no_tlp" value="{{ $d->no_tlp }}"> <br/>
		Spesialis <input type="text" required="required" name="spesialis" value="{{ $d->spesialis }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>