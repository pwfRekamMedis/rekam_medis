@extends('main')

@section('title', 'Petugas -')

@section('breadcrumbs')
    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Petugas</h1>
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
                            <strong class="card-title">Data Petugas</strong>
                        </div>
						<br>
						<div>
							<a href="/petugas_admin/tambah" button type="button" class="btn btn-success btn-sm"> 
							<i class="fa fa-plus-square"></i>&nbsp; Tambah Data Petugas</button></a>
							<a href="/petugas_admin/regis" class="btn btn-primary btn-sm pull-right">Regis Akun Admin</a>
							

							<div class="search-container">
                            <form method="GET" action="/petugas_admin">
                                <input type="text" name="cari" placeholder="Search ..." name="Search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>

						</div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
				  <thead>
						<tr>
							<th>Id</th>
							<th>Nama</th>
							<th>User</th>
							<th>Alamat</th>
							<th>Kota</th>
							<th>NoTelp</th>
							<th>Opsi</th>
						</tr>
				  </thead>
				  <tbody>
						@foreach($petugas_admin as $pa)
						@if ($pa->id == null)
						<tr>
							<td>{{ $pa->id_petugas }}</td>
							<td>{{ $pa->nama_petugas }}</td>
							<td> </td>
							<td>{{ $pa->alamat }}</td>
							<td>{{ $pa->kota_tinggal }}</td>
							<td>{{ $pa->no_tlp }}</td>
							<td>
								<a href="/petugas_admin/edit/{{ $pa->id_petugas}}" class="btn btn-primary btn-sm">Edit</a>
							</td>
						</tr>
						@else
						<tr>
							<td>{{ $pa->id_petugas }}</td>
							<td>{{ $pa->nama_petugas }}</td>
							<td>{{ $pa->users->email }}</td>
							<td>{{ $pa->alamat }}</td>
							<td>{{ $pa->kota_tinggal }}</td>
							<td>{{ $pa->no_tlp }}</td>
							<td>
								<a href="/petugas_admin/edit/{{ $pa->id_petugas}}" class="btn btn-primary btn-sm">Edit</a>
							</td>
						</tr>
						@endif
						@endforeach
				  </tbody>
				  </table>
			</div>
        </div>
    </div>
@endsection