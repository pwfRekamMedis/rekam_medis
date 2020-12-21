@extends('main')

@section('title', '-')

@section('breadcrumbs')
    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Rekam Medis</h1>
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
						<br>
						<div>
							<a href="/rekam_medis/tambah" button type="button" class="btn btn-success btn-sm"> 
							<i class="fa fa-plus-square"></i>&nbsp; Tambah Data Rekam Medis</button></a>
							
							<a href="/rekam_medis/pasien" button type="button" class="btn btn-success btn-sm"> 
							<i class="fa fa-square"></i>&nbsp; Lihat per Pasien</button></a>
							<div class="search-container">
                            <form method="GET" action="/rekam_medis">
                                <input type="text" name="cari" placeholder="Search ..." name="Search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
							</div>
						</div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
				  <thead>
						<tr>
							<th>Id Rekam Medis</th>
							<th>Nama Pasien</th>
							<th>Nama Petugas</th>
							<th>Nama Dokter</th>
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
							<td>{{ $rm->pasien->nama_pasien }}</td>
							<td>{{ $rm->petugas_admin->nama_petugas }}</td>
							<td>{{ $rm->dokter->nama_dokter }}</td>
							<td>{{ $rm->tgl_periksa }}</td>
							<td>{{ $rm->diagnosa }}</td>
							<td>{{ $rm->keterangan }}</td>
							<td>{{ $rm->biaya_jasa }}</td>
							<td>
								<a href="/rekam_medis/edit/{{ $rm->id_rekam_medis}}" class="btn btn-primary btn-sm">Edit</a>
							</td>
						</tr>
						@endforeach
					</tbody>
					</table>
					</div>
       	</div>
    </div>
@endsection