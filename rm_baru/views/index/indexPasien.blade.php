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
        </div>

    </div>
@endsection