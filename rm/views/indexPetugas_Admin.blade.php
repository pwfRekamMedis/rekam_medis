<!DOCTYPE html>
<html>
<head>
	<title>Rekam Medis</title>
</head>
<body>
 
	<h2>Petugas</h2>
	<h3>Data Petugas</h3>
 
	<a href="/petugas_admin/tambah"> + Tambah Petugas Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Kota</th>
			<th>NoTelp</th>
			<th>Opsi</th>
		</tr>
		@foreach($petugas_admin as $pa)
		<tr>
			<td>{{ $pa->id_petugas }}</td>
			<td>{{ $pa->nama_petugas }}</td>
			<td>{{ $pa->alamat }}</td>
			<td>{{ $pa->kota_tinggal }}</td>
			<td>{{ $pa->no_tlp }}</td>
			<td>
				|
				<a href="/petugas_admin/edit/{{ $pa->id_petugas}}">Edit</a>
				|
			</td>
		</tr>
		@endforeach
	</table>
	<br/>
	<a href="/">Kembali</a>
 
</body>
</html>