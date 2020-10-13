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
		<div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Rekam Medis</strong>
                        </div>
						<div>
							<a href="/obat/tambah"> + Tambah Data Rekam Medis</a>
						</div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
				  <thead>
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
				  </thead>
				  <tbody>
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
								<a href="/rekam_medis/edit/{{ $rm->id_rekam_medis}}">Edit</a>
							</td>
						</tr>
						@endforeach
					</tbody>
					</table>
					</div>
       	</div>
    </div>
@endsection