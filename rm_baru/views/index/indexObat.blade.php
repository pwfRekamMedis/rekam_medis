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
        </div>

    </div>
@endsection