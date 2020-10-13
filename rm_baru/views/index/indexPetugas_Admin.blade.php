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
                            <strong class="card-title">Data Pasien</strong>
                        </div>
						<div>
							<a href="/obat/tambah"> + Tambah Data Petugas</a>
						</div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
				  <thead>
						<tr>
							<th>Id</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Kota</th>
							<th>NoTelp</th>
							<th>Opsi</th>
						</tr>
				  </thead>
				  <tbody>
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
				  </tbody>
				  </table>
			</div>
        </div>
    </div>
@endsection