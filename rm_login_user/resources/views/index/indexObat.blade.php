@extends('main')

@section('title', 'Obat -')

@section('breadcrumbs')
    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Obat</h1>
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
                            <strong class="card-title">Data Obat</strong>
                        </div>
						<br>
						<div>
							<a href="/obat/tambah" button type="button" class="btn btn-success btn-sm"> 
							<i class="fa fa-plus-square"></i>&nbsp; Tambah Data Obat</button></a>
							<div class="search-container">
                            <form method="GET" action="/obat">
                                <input type="text" name="cari" placeholder="Search ..." name="Search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>

						</div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
				  <thead>
					<tr>
						<th>Id</th>
						<th>Kategori</th>
						<th>Nama</th>
						<th>Bentuk</th>
						<th>Tgl Kadaluarsa</th>
						<th>Harga Obat</th>
						<th>Opsi</th>
					</tr>
				  </thead>
				  <tbody>
						@foreach($obat as $o)
						<tr>
							<td>{{ $o->id_obat }}</td>
							<td>{{ $o->kategori_obat }}</td>
							<td>{{ $o->nama_obat }}</td>
							<td>{{ $o->bentuk_obat }}</td>
							<td>{{ $o->tgl_kadaluarsa }}</td>
							<td>{{ $o->harga_obat }}</td>
							<td>
								<a href="/obat/edit/{{ $o->id_obat}}" class="btn btn-primary btn-sm">Edit</a>
							</td>
						</tr>
						@endforeach
				  </tbody>
				  </table>
			</div>
        </div>

    </div>
@endsection