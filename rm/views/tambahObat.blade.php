<!DOCTYPE html>
<html>
<head>
	<title>Rekam Medis</title>
</head>
<body>
 
	<h2>Obat</a></h2>
	<h3>Tambah Data Obat</h3>
 
	<a href="/obat"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/obat/store" method="post">
	{{ csrf_field() }}
		Id <input type="text" name="id_obat" required="required"> <br/>
		Kategori <input type="text" name="kategori_obat" required="required"> <br/>
		Nama <input type="text" name="nama_obat" required="required"> <br/>
		Bentuk <input type="text" name="bentuk_obat" required="required"> <br/>
		Tgl Kadaluarsa <input type="date" name="tgl_kadaluarsa" required="required"> <br/>
		Harga Obat <input type="number" name="harga_obat" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>