@extends('main')

@section('title', 'Dokter -')

@section('breadcrumbs')
    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dokter</h1>
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
		<div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Dokter</strong>
                        </div>
						<br>
						<div>
							<a href="/dokter/tambah" button type="button" class="btn btn-success btn-sm"> 
							<i class="fa fa-plus-square"></i>&nbsp; Tambah Data Dokter</button></a>
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
						<th>Spesialis</th>
						<th>Opsi</th>
					</tr>
				  </thead>
				  <tbody>
						@foreach($dokter as $d)
						<tr>
							<td>{{ $d->id_dokter }}</td>
							<td>{{ $d->nama_dokter }}</td>
							<td>{{ $d->alamat }}</td>
							<td>{{ $d->kota_tinggal }}</td>
							<td>{{ $d->no_tlp }}</td>
							<td>{{ $d->spesialis }}</td>
							<td>
								<a href="/dokter/edit/{{ $d->id_dokter}}" class="btn btn-primary btn-sm">Edit</a>
								
							</td>
						</tr>
						@endforeach
					</tbody>
				  </table>
						</div>
        			</div>
    			</div>
@endsection