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
                            <strong class="card-title">Edit Data Rekam Medis</strong>
                        </div>
						<div>
						<br>
                        <a href="/rekam_medis"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</button></a>
						<br>
						</div>
						<div class="card-body">
						@foreach($rekam_medis as $rm)
						<form action="/rekam_medis/update" method="post">
						{{ csrf_field() }}
							<input type="hidden" name="id_rekam_medis" value="{{ $rm->id_rekam_medis }}"> <br/>
							
							<div class="form-group">
							<label>Nama Pasien</label>
                            <select name="id_pasien" required="required" class="form-control" placeholder=". . .">
							@foreach ($pasien as $p)
								@if ($rm->id_pasien == $p->id_pasien)<option value="{{ $p -> id_pasien }}" selected>{{$p -> nama_pasien}}</option>
								@else <option value="{{ $p -> id_pasien }}">{{$p -> nama_pasien}}</option>
								@endif
							@endforeach
							</select></br>
							</div>
							
							@foreach ($petugas_admin as $pa)
							@if (Auth::user()->id == $pa -> id)
							<input type="hidden" name="id_petugas" value="{{ $pa -> id_petugas }}">
							@endif
							@endforeach
							
							<div class="form-group">
							<label>Nama Dokter</label>
                            <select name="id_dokter" required="required" class="form-control" placeholder=". . ."> 
							@foreach ($dokter as $d)
								@if ($rm->id_dokter == $d->id_dokter)<option value="{{ $d -> id_dokter }}" selected>{{$d -> nama_dokter}}</option>
								@else <option value="{{ $d -> id_dokter }}">{{$d -> nama_dokter}}</option>
								@endif
							@endforeach
							</select></br>
							</div>
							
							<div class="form-group">
							<label>Tgl Periksa</label>
                            <input type="date" name="tgl_periksa" required="required" value="{{ $rm->tgl_periksa }}" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>Diagnosa</label>
                            <input type="text" name="diagnosa" value="{{ $rm->diagnosa }}" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>Keterangan</label>
                            <input type="text" name="keterangan" value="{{ $rm->keterangan }}" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>Biaya Jasa</label>
                            <input type="number" name="biaya_jasa" required="required" value="{{ $rm->biaya_jasa }}" class="form-control" placeholder=". . ."> 
							</div>
							<br>
							
							<div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan Data">
							</div>
							
							
						</form>
						@endforeach
						</div>
        			</div>
    			</div>
@endsection
