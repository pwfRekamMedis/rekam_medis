<!DOCTYPE html>
<html>
<head>
	<title>Rekam Medis</title>
</head>
<body>
 
	<h2>Obat</a></h2>
	<h3>Edit Data Obat</h3>
 
	<a href="/obat"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($obat as $o)
	<form action="/obat/update" method="post">
		{{ csrf_field() }}
		Id <input type="text" required="required" name="id_obat" value="{{ $o->id_obat }}"> <br/>
		Kategori <input type="text" required="required" name="kategori_obat" value="{{ $o->kategori_obat }}"> <br/>
		Nama <input type="text" required="required" name="nama_obat" value="{{ $o->nama_obat }}"> <br/>
		Bentuk <input type="text" required="required" name="bentuk_obat" value="{{ $o->bentuk_obat }}"> <br/>
		Tgl Kadaluarsa <input type="date" required="required" name="tgl_kadaluarsa" value="{{ $o->tgl_kadaluarsa }}"> <br/>
		Harga Obat <input type="number" required="required" name="harga_obat" value="{{ $o->harga_obat }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>