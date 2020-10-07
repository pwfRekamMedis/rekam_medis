<!DOCTYPE html>
<html>
<head>
	<title>Rekam Medis</title>
</head>
<body>
 
	<h2>Resep Obat</h2>
	<h3>Data Resep Obat</h3>
 
	<a href="/resep_obat/tambah"> + Tambah Data Resep Obat</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Id Resep Obat</th>
			<th>Id Obat</th>
			<th>Id Rekam Medis</th>
			<th>Jumlah</th>
			<th>Opsi</th>
		</tr>
		@foreach($resep_obat as $ro)
		<tr>
			<td>{{ $ro->id_resep }}</td>
			<td>{{ $ro->id_obat }}</td>
			<td>{{ $ro->id_rekam_medis }}</td>
			<td>{{ $ro->jumlah }}</td>
			<td>
				|
				<a href="/resep_obat/edit/{{ $ro->id_resep}}">Edit</a>
				<a href="/resep_obat/hapus/{{ $ro->id_resep }}">Hapus</a>
				|
			</td>
		</tr>
		@endforeach
	</table>
	<br/>
	<a href="/">Kembali</a>
 
</body>
</html>