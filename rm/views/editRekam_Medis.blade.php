<!DOCTYPE html>
<html>
<head>
	<title>Rekam Medis</title>
</head>
<body>
 
	<h2>Rekam Medis</a></h2>
	<h3>Edit Data Rekam Medis</h3>
 
	<a href="/rekam_medis"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($rekam_medis as $rm)
	<form action="/rekam_medis/update" method="post">
		{{ csrf_field() }}
		Id Rekam Medis <input type="text" name="id_rekam_medis" value="{{ $rm->id_petugas }}"> <br/>
        Id Pasien <select name="id_pasien" required="required">@foreach ($pasien as $p)<option value="{{ $p -> id_pasien }}">{{$p -> nama_pasien}}</option>@endforeach</select></br>
        Id Petugas <select name="id_petugas" required="required">@foreach ($petugas_admin as $pa)<option value="{{ $pa -> id_petugas }}">{{$pa -> nama_petugas}}</option>@endforeach</select></br>
        Id Dokter <select name="id_dokter" required="required">@foreach ($dokter as $d)<option value="{{ $d -> id_dokter }}">{{$d -> nama_dokter}}</option>@endforeach</select></br>
		Tgl Periksa <input type="text" name="tgl_periksa" value="{{ $rm->tgl_periksa }}"> <br/>
		Diagnosa <input type="text" name="diagnosa" value="{{ $rm->diagnosa }}"> <br/>
		Keterangan <input type="text" name="keterangan" value="{{ $rm->keterangan }}"> <br/>
		Biaya Jasa <input type="text" name="biaya_jasa" value="{{ $rm->biaya_jasa }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>