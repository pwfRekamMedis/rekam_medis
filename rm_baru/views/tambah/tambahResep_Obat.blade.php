<!DOCTYPE html>
<html>
<head>
	<title>Resep Obat</title>
</head>
<body>
 
	<h2>Resep Obat</a></h2>
	<h3>Tambah Data Resep Obat</h3>
 
	<a href="/resep_obat"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/resep_obat/store" method="post">
		{{ csrf_field() }}
		Id Resep <input type="text" name="id_resep" required="required"> <br/>
        Nama Obat <select name="id_obat" required="required">@foreach ($obat as $o)<option value="{{ $o -> id_obat }}">{{$o -> nama_obat}}</option>@endforeach</select></br>
        Id Rekam Medis <select name="id_rekam_medis" required="required">@foreach ($rekam_medis as $rm)<option value="{{ $rm -> id_rekam_medis }}">{{$rm -> id_rekam_medis}}</option>@endforeach</select></br>
		Jumlah <input type="text" name="jumlah" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>