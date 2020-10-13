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
        </div>

    </div>
@endsection