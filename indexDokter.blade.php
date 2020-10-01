<!DOCTYPE html>
<html>
<head>
	<title>Rekam Medis</title>
</head>
<body>
 
	<h2>Dokter</h2>
	<h3>Data Dokter</h3>
 
	<a href="/dokter/tambah"> + Tambah Dokter Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Kota</th>
			<th>NoTelp</th>
			<th>Spesialis</th>
			<th>Opsi</th>
		</tr>
		@foreach($dokter as $d)
		<tr>
			<td>{{ $d->id_dokter }}</td>
			<td>{{ $d->nama_dokter }}</td>
			<td>{{ $d->alamat }}</td>
			<td>{{ $d->kota_tinggal }}</td>
			<td>{{ $d->no_tlp }}</td>
			<td>{{ $d->spesialis }}</td>
			<td>
				|
				<a href="/dokter/edit/{{ $d->id_dokter}}">Edit</a>
				|
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>