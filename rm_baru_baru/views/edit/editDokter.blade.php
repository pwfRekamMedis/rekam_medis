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
                            <strong class="card-title">Edit Data Dokter</strong>
                        </div>
						<div>
						<br>
							<a href="/dokter">>   Kembali</a>
						<br>
						</div>
						<div class="card-body">
						
						<form action="/dokter/update" method="post">
						{{ csrf_field() }}
							<input type="hidden" name="id_dokter" value="{{ $dokter->id_dokter }}"> <br/>
							Nama <br><input type="text" name="nama_dokter" required="required" value="{{ $dokter->nama_dokter }}"> <br/>
							Alamat <br><input type="text" name="alamat" value="{{ $dokter->alamat }}"> <br/>
							Kota <br><input type="text" name="kota_tinggal" value="{{ $dokter->kota_tinggal }}"> <br/>
							NoTelp <br><input type="text" name="no_tlp" required="required" value="{{ $dokter->no_tlp }}"> <br/>
							Spesialis <br><input type="text" name="spesialis" required="required" value="{{ $dokter->spesialis }}"> <br/>
							<br><input type="submit" value="Simpan Data">
						</form>
						
						</div>
        			</div>
    			</div>
@endsection