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
                            <strong class="card-title">Edit Data Obat</strong>
                        </div>
						<div>
						<br>
                        <a href="/obat"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</button></a>
						<br>
						</div>
						<div class="card-body">
						
						<form action="/obat/update" method="post">
						{{ csrf_field() }}
							<input type="hidden" name="id_obat" value="{{ $obat->id_obat }}"> <br/>
							Kategori <br><input type="text" required="required" name="kategori_obat" value="{{ $obat->kategori_obat }}"> <br/>
							Nama <br><input type="text" name="nama_obat" value="{{ $obat->nama_obat }}"> <br/>
							Bentuk <br><input type="text" name="bentuk_obat" value="{{ $obat->bentuk_obat }}"> <br/>
							Tgl Kadaluarsa <br><input type="date" required="required" name="tgl_kadaluarsa" value="{{ $obat->tgl_kadaluarsa }}"> <br/>
							Harga Obat <br><input type="number" name="harga_obat" value="{{ $obat->harga_obat }}"> <br/>
							<br><input type="submit" value="Simpan Data">
						</form>
						
						</div>
        			</div>
    			</div>
@endsection