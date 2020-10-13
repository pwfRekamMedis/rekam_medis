@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><i class="fa fa-dashboard"></i></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')
    <div class="content mt-3">

        <div class="animated fadeIn">
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
		<br/>
        </div>

    </div>
@endsection