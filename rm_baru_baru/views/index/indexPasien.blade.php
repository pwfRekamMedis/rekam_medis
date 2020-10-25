@extends('main')

@section('title', 'Pasien -')

@section('breadcrumbs')
    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Pasien</h1>
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
						<br>
						<div>
							<a href="/pasien/tambah" button type="button" class="btn btn-success btn-sm"> 
							<i class="fa fa-plus-square"></i>&nbsp; Tambah Data Pasien</button></a>
						</div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
				  <thead>
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
				  <thead>
				  <tbody>
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
								<a href="/pasien/edit/{{ $p->id_pasien}}" class="btn btn-primary btn-sm">Edit</a>
							</td>
						</tr>
						@endforeach
				  </tbody>
			</table>
			</div>
        </div>

    </div>
@endsection