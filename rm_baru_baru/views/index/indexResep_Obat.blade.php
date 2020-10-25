@extends('main')

@section('title', 'Resep -')

@section('breadcrumbs')
    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Resep Obat</h1>
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
                            <strong class="card-title">Data Resep Obat</strong>
                        </div>
                        <br>
						<div>
                            <a href="/resep_obat/tambah" button type="button" class="btn btn-success btn-sm"> 
							<i class="fa fa-plus-square"></i>&nbsp; Tambah Data Resep Obat</button></a>
						</div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
				  <thead>
						<tr>
							<th>Id Resep Obat</th>
							<th>Id Obat</th>
							<th>Id Rekam Medis</th>
							<th>Jumlah</th>
							<th>Opsi</th>
						</tr>
					<thead>
					<tbody>
						@foreach($resep_obat as $ro)
						<tr>
							<td>{{ $ro->id_resep }}</td>
							<td>{{ $ro->id_obat }}</td>
							<td>{{ $ro->id_rekam_medis }}</td>
							<td>{{ $ro->jumlah }}</td>
							<td>
								<a href="/resep_obat/edit/{{ $ro->id_resep}}" class="btn btn-primary btn-sm">Edit</a>
							</td>
						</tr>
						@endforeach
					</tbody>
					</table>
				</div>
        </div>
    </div>
@endsection