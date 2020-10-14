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
						@foreach($dokter as $d)
						<form action="/dokter/update" method="post">
						{{ csrf_field() }}
							<input type="hidden" name="id_dokter" value="{{ $d->id_dokter }}"> <br/>
							Nama <br><input type="text" required="required" name="nama_dokter" value="{{ $d->nama_dokter }}"> <br/>
							Alamat <br><input type="text" name="alamat" value="{{ $d->alamat }}"> <br/>
							Kota <br><input type="text" name="kota_tinggal" value="{{ $d->kota_tinggal }}"> <br/>
							NoTelp <br><input type="text" required="required" name="no_tlp" value="{{ $d->no_tlp }}"> <br/>
							Spesialis <br><input type="text" required="required" name="spesialis" value="{{ $d->spesialis }}"> <br/>
							<br><input type="submit" value="Simpan Data">
						</form>
						@endforeach
						</div>
        			</div>
    			</div>
@endsection