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
		<h3>Data Resep Obat</h3>
 
		<a href="/resep_obat/tambah"> + Tambah Data Resep Obat</a>
		
		<br/>
		<br/>

		<table border="1">
			<tr>
				<th>Id Resep Obat</th>
				<th>Id Obat</th>
				<th>Id Rekam Medis</th>
				<th>Jumlah</th>
				<th>Opsi</th>
			</tr>
			@foreach($resep_obat as $ro)
			<tr>
				<td>{{ $ro->id_resep }}</td>
				<td>{{ $ro->id_obat }}</td>
				<td>{{ $ro->id_rekam_medis }}</td>
				<td>{{ $ro->jumlah }}</td>
				<td>
					|
					<a href="/resep_obat/edit/{{ $ro->id_resep}}">Edit</a>
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