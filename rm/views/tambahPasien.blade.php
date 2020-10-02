<!DOCTYPE html>
<html>
<head>
	<title>Rekam Medis</title>
</head>
<body>
 
	<h2>Pasien</a></h2>
	<h3>Tambah Data Pasien</h3>
 
	<a href="/pasien"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/pasien/store" method="post">
		{{ csrf_field() }}
		Id <input type="text" name="id_pasien" required="required"> <br/>
		Nama <input type="text" name="nama_pasien" required="required"> <br/>
		Tgl Lahir <input type="date" name="tgl_lahir" required="required"> <br/>
		Tempat Lahir <input type="text" name="tempat_lahir" required="required"> <br/>
		Alamat <input type="text" name="alamat" required="required"> <br/>
		Kota <input type="text" name="kota_tinggal" required="required"> <br/>
		NoTelp <input type="text" name="no_tlp" required="required"> <br/>
		Pekerjaan <input type="text" name="pekerjaan" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>