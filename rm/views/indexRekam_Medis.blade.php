<!DOCTYPE html>
<html>
<head>
	<title>Rekam Medis</title>
</head>
<body>
 
	<h2>Rekam Medis</h2>
	<h3>Data Rekam Medis</h3>
 
	<a href="/rekam_medis/tambah"> + Tambah Data Rekam Medis</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Id Rekam Medis</th>
			<th>Id Pasien</th>
			<th>Id Petugas</th>
			<th>Id Dokter</th>
			<th>Tgl Periksa</th>
			<th>Diagnosa</th>
			<th>Keterangan</th>
			<th>Biaya Jasa</th>
			<th>Opsi</th>
		</tr>
		@foreach($rekam_medis as $rm)
		<tr>
			<td>{{ $rm->id_rekam_medis }}</td>
			<td>{{ $rm->id_pasien }}</td>
			<td>{{ $rm->id_petugas }}</td>
			<td>{{ $rm->id_dokter }}</td>
			<td>{{ $rm->tgl_periksa }}</td>
			<td>{{ $rm->diagnosa }}</td>
			<td>{{ $rm->keterangan }}</td>
			<td>{{ $rm->biaya_jasa }}</td>
			<td>
				|
				<a href="/rekam_medis/edit/{{ $rm->id_rekam_medis}}">Edit</a>
				<a href="/rekam_medis/hapus/{{ $rm->id_rekam_medis }}">Hapus</a>
				|
			</td>
		</tr>
		@endforeach
	</table>
	<br/>
	<a href="/">Kembali</a>
 
</body>
</html>