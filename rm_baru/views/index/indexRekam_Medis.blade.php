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