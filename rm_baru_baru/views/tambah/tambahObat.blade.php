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
							<a href="/obat">>   Kembali</a>
						<br>
						</div>
                        <div class="card-body">
						<form action="/obat/store" method="post">
						{{ csrf_field() }}
							<input type="hidden" name="id_obat"> <br/>
							Kategori <br><input type="text" name="kategori_obat" required="required"> <br/>
							Nama <br><input type="text" name="nama_obat"> <br/>
							Bentuk <br><input type="text" name="bentuk_obat"> <br/>
							Tgl Kadaluarsa <br><input type="date" name="tgl_kadaluarsa" required="required"> <br/>
							Harga Obat <br><input type="number" name="harga_obat"> <br/>
							<br><input type="submit" value="Simpan Data">
						</form>
						</div>
        			</div>
    			</div>
@endsection
