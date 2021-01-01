@extends('sub')

@section('title', '-')

@section('breadcrumbs')
    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Rekam Medis</h1>
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
                            <strong class="card-title">Tambah Data Rekam Medis</strong>
                        </div>
						<div>
						<br>
                        <a href="/rekam_medis"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</button></a>
						<br>
						</div>
                        <div class="card-body">
						<form action="/rekam_medis/store" method="post">
						{{ csrf_field() }}
							<input type="hidden" name="id_rekam_medis"> <br/>
							
							<div class="form-group">
							<label>Nama Pasien</label>
                            <select name="id_pasien" required="required" class="form-control" placeholder=". . .">
							<option selected></option>
							@foreach ($pasien as $p)<option value="{{ $p -> id_pasien }}">{{$p -> id_pasien}} - {{$p -> nama_pasien}}</option>@endforeach</select></br>
							</div>
							
							@foreach ($petugas_admin as $pa)
							@if (Auth::user()->id == $pa -> id)
							<input type="hidden" name="id_petugas" value="{{ $pa -> id_petugas }}">
							@endif
							@endforeach
							
							<div class="form-group">
							<label>Nama Dokter</label>
                            <select name="id_dokter" required="required" class="form-control" placeholder=". . ."> 
							<option selected></option>
							@foreach ($dokter as $d)<option value="{{ $d -> id_dokter }}">{{ $d -> id_dokter }} - {{$d -> nama_dokter}}</option>@endforeach</select></br>
							</div>
							
							<div class="form-group">
							<label>Tgl Periksa</label>
                            <input type="date" name="tgl_periksa" required="required" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>Diagnosa</label>
                            <input type="text" name="diagnosa" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>Biaya Jasa</label>
                            <input type="number" name="biaya_jasa" required="required" class="form-control" placeholder=". . ."> 
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
