<!DOCTYPE html>
<html>
<head>
	<title>Rekam Medis</title>
</head>
<body>
 
	<h2>Petugas</a></h2>
	<h3>Tambah Data Petugas</h3>
 
	<a href="/petugas_admin"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/petugas_admin/store" method="post">
		{{ csrf_field() }}
		Id <input type="text" name="id_petugas" required="required"> <br/>
		Nama <input type="text" name="nama_petugas" required="required"> <br/>
		Alamat <input type="text" name="alamat" required="required"> <br/>
		Kota <input type="text" name="kota_tinggal" required="required"> <br/>
		NoTelp <input type="text" name="no_tlp" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>