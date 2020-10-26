@extends('sub')

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
                            <strong class="card-title">Tambah Data Dokter</strong>
                        </div>
						<div>
						<br>
                        <a href="/dokter"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</button></a>
						<br>
						</div>
                        <div class="card-body">
						<form action="/dokter/store" method="post">
						{{ csrf_field() }}
							<input type="hidden" name="id_dokter"> <br/>
							Nama <br><input type="text" name="nama_dokter" required="required"> <br/>
							Alamat <br><input type="text" name="alamat"> <br/>
							Kota <br><input type="text" name="kota_tinggal"> <br/>
							NoTelp <br><input type="text" name="no_tlp" required="required"> <br/>
							Spesialis <br><input type="text" name="spesialis" required="required"> <br/>
							<br><input type="submit" value="Simpan Data">
						</form>
						</div>
        			</div>
    			</div>
@endsection
