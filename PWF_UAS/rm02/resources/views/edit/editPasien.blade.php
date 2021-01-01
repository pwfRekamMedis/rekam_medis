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
                            <strong class="card-title">Edit Data Pasien</strong>
                        </div>
						<div>
						<br>
                        <a href="/pasien"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</button></a>
						<br>
						</div>
						<div class="card-body">
						
						<form action="/pasien/update" method="post">
						{{ csrf_field() }}
							<input type="hidden" name="id_pasien" value="{{ $pasien->id_pasien }}"> <br/>
							
							<div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_pasien" required="required" value="{{ $pasien->nama_pasien }}" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>Email User</label>
                            <select name="id" required="required" class="form-control" placeholder=". . .">
							@if ($pasien->id == null)
							<option value=" " selected><i>Belum register</i></option>
							@else
							<option value="{{ $pasien -> id }}"selected>{{$pasien -> id}}</option>
							@endif
							@foreach ($users as $u) 
									@if ($u->role == '2')<option value="{{ $u -> id }}">{{$u -> id}} - {{$u -> name}} - {{$u -> email}}</option>
									@endif
							@endforeach
							</select></br>
							</div>
							
							<div class="form-group">
							<label>Tgl Lahir</label>
                            <input type="date" name="tgl_lahir" value="{{ $pasien->tgl_lahir }}" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>Kota Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" value="{{ $pasien->tempat_lahir }}" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>Alamat</label>
                            <input type="text" name="alamat" value="{{ $pasien->alamat }}" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>Kota</label>
                            <input type="text" name="kota_tinggal" value="{{ $pasien->kota_tinggal }}" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>NoTelp</label>
                            <input type="text" name="no_tlp" required="required" value="{{ $pasien->no_tlp }}" class="form-control" placeholder=". . ."> 
							</div>
							
							<div class="form-group">
							<label>Pekerjaan</label>
                            <input type="text" name="pekerjaan" value="{{ $pasien->pekerjaan }}" class="form-control" placeholder=". . ."> 
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
