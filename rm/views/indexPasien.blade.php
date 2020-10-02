<!DOCTYPE html>
<html>
<head>
	<title>Rekam Medis</title>
</head>
<body>
 
	<h2>Pasien</h2>
	<h3>DataPasien</h3>
 
	<a href="/pasien/tambah"> + Tambah Pasien Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Tgl Lahir</th>
			<th>Tempat Lahir</th>
			<th>Alamat</th>
			<th>Kota</th>
			<th>NoTelp</th>
			<th>Pekerjaan</th>
			<th>Opsi</th>
		</tr>
		@foreach($pasien as $p)
		<tr>
			<td>{{ $p->id_pasien }}</td>
			<td>{{ $p->nama_pasien }}</td>
			<td>{{ $p->tgl_lahir }}</td>
			<td>{{ $p->tempat_lahir }}</td>
			<td>{{ $p->alamat }}</td>
			<td>{{ $p->kota_tinggal }}</td>
			<td>{{ $p->no_tlp }}</td>
			<td>{{ $p->pekerjaan }}</td>
			<td>
				|
				<a href="/pasien/edit/{{ $p->id_pasien}}">Edit</a>
				|
			</td>
		</tr>
		@endforeach
	</table>
	<br/>
	<a href="/">Kembali</a>
 
</body>
</html>