<!DOCTYPE html>
<html>
<head>
	<title>Rekam Medis</title>
</head>
<body>
 
	<h2>Dokter</a></h2>
	<h3>Tambah Data Dokter</h3>
 
	<a href="/dokter"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/dokter/store" method="post">
		{{ csrf_field() }}
		Id <input type="text" name="id_dokter" required="required"> <br/>
		Nama <input type="text" name="nama_dokter" required="required"> <br/>
		Alamat <input type="text" name="alamat" required="required"> <br/>
		Kota <input type="text" name="kota_tinggal" required="required"> <br/>
		NoTelp <input type="text" name="no_tlp" required="required"> <br/>
		Spesialis <input type="text" name="spesialis" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>