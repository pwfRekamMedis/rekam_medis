<!DOCTYPE html>
<html>
<head>
	<title>Rekam Medis</title>
</head>
<body>
 
	<h2>Pasien</a></h2>
	<h3>Edit Data Pasien</h3>
 
	<a href="/pasien"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($pasien as $p)
	<form action="/pasien/update" method="post">
		{{ csrf_field() }}
		Id <input type="text" required="required" name="id_pasien" value="{{ $p->id_pasien }}"> <br/>
		Nama <input type="text" required="required" name="nama_pasien" value="{{ $p->nama_pasien }}"> <br/>
		Tgl Lahir <input type="date" required="required" name="tgl_lahir" value="{{ $p->tgl_lahir }}"> <br/>
		Tempat Lahir <input type="text" required="required" name="tempat_lahir" value="{{ $p->tempat_lahir }}"> <br/>
		Alamat <input type="text" required="required" name="alamat" value="{{ $p->alamat }}"> <br/>
		Kota <input type="text" required="required" name="kota_tinggal" value="{{ $p->kota_tinggal }}"> <br/>
		NoTelp <input type="text" required="required" name="no_tlp" value="{{ $p->no_tlp }}"> <br/>
		Pekerjaan <input type="text" required="required" name="pekerjaan" value="{{ $p->pekerjaan }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>