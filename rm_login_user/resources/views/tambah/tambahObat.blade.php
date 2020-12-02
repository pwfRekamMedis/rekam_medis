@extends('sub')

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
		<div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Tambah Data Obat</strong>
                        </div>
						<div>
						<br>
                        <a href="/obat"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</button></a>
						<br>
						</div>
                        <div class="card-body">
						<form action="/obat/store" method="post">
						{{ csrf_field() }}
							<input type="hidden" name="id_obat"> <br/>
							
							<div class="form-group">
                            <label>Kategori</label>
                            <input type="text" name="kategori_obat" required="required" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>Nama</label>
                            <input type="text" name="nama_obat" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>Bentuk</label>
                            <input type="text" name="bentuk_obat" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>Tgl Kadaluarsa</label>
                            <input type="date" name="tgl_kadaluarsa" required="required" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>Harga</label>
                            <input type="number" name="harga_obat" class="form-control" placeholder=". . ."> 
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
