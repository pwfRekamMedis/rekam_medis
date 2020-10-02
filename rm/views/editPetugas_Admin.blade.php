<!DOCTYPE html>
<html>
<head>
	<title>Rekam Medis</title>
</head>
<body>
 
	<h2>Petugas</a></h2>
	<h3>Edit Data Petugas</h3>
 
	<a href="/petugas"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($petugas_admin as $pa)
	<form action="/petugas_admin/update" method="post">
		{{ csrf_field() }}
		Id <input type="text" required="required" name="id_petugas" value="{{ $pa->id_petugas }}"> <br/>
		Nama <input type="text" required="required" name="nama_petugas" value="{{ $pa->nama_petugas }}"> <br/>
		Alamat <input type="text" required="required" name="alamat" value="{{ $pa->alamat }}"> <br/>
		Kota <input type="text" required="required" name="kota_tinggal" value="{{ $pa->kota_tinggal }}"> <br/>
		NoTelp <input type="text" required="required" name="no_tlp" value="{{ $pa->no_tlp }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>