@extends('sub')

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
		<div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Tambah Data Pasien</strong>
                        </div>
						<div>
						<br>
                        <a href="/pasien"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</button></a>
						<br>
						</div>
                        <div class="card-body">
						<form action="/pasien/store" method="post">
						{{ csrf_field() }}
							<input type="hidden" name="id_pasien"> <br/>
							
							<div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_pasien" required="required" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>Tgl Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>Kota Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>Kota</label>
                            <input type="text" name="kota_tinggal" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>NoTelp</label>
                            <input type="text" name="no_tlp" required="required" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>Pekerjaan</label>
                            <input type="text" name="pekerjaan" required="required" class="form-control" placeholder=". . ."> 
							</div>
							<br>
							
							<div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan Data">
							</div>
						</form>
						</div>
        			</div>
    			</div>
@endsection

