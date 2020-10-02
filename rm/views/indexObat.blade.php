<!DOCTYPE html>
<html>
<head>
	<title>Rekam Medis</title>
</head>
<body>
 
	<h2>Obat</h2>
	<h3>Data Obat</h3>
 
	<a href="/obat/tambah"> + Tambah Obat Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Kategori</th>
			<th>Nama</th>
			<th>Bentuk</th>
			<th>Tgl Kadaluarsa</th>
			<th>Harga Obat</th>
			<th>Opsi</th>
		</tr>
		@foreach($obat as $o)
		<tr>
			<td>{{ $o->id_obat }}</td>
			<td>{{ $o->kategori_obat }}</td>
			<td>{{ $o->nama_obat }}</td>
			<td>{{ $o->bentuk_obat }}</td>
			<td>{{ $o->tgl_kadaluarsa }}</td>
			<td>{{ $o->harga_obat }}</td>
			<td>
				|
				<a href="/obat/edit/{{ $o->id_obat}}">Edit</a>
				|
			</td>
		</tr>
		@endforeach
	</table>
	<br/>
	<a href="/">Kembali</a>
 
</body>
</html>