@extends('sub')

@section('title', 'Resep Obat -')

@section('breadcrumbs')
    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Resep Obat</h1>
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
                            <strong class="card-title">Edit Data Resep Obat</strong>
                        </div>
						<div>
						<br>
                        <a href="/resep_obat"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</button></a>
						<br>
						</div>
						<div class="card-body">
						@foreach($resep_obat as $ro)
						<form action="/resep_obat/update" method="post">
						{{ csrf_field() }}
							<input type="hidden" name="id_resep" value="{{ $ro->id_resep }}"> <br/>
							
							<div class="form-group">
							<label>Nama Obat</label>
                            <select name="id_obat" required="required" class="form-control" placeholder=". . .">
							@foreach ($obat as $o)
								@if ($ro->id_obat == $o->id_obat)<option value="{{ $o -> id_obat }}" selected>{{$o -> nama_obat}}</option>
								@else <option value="{{ $o -> id_obat }}">{{$o -> nama_obat}}</option>
								@endif
							@endforeach
							</select></br>
							</div>
							
							<div class="form-group">
							<label>Id Rekam Medis</label>
                            <select name="id_rekam_medis" required="required" class="form-control" placeholder=". . .">
							@foreach ($rekam_medis as $rm)
								@if ($ro->id_rekam_medis == $rm->id_rekam_medis)<option value="{{ $rm -> id_rekam_medis }}" selected>{{$rm -> id_rekam_medis}}</option>
								@else <option value="{{ $rm -> id_rekam_medis }}">{{$rm -> id_rekam_medis}}</option>
								@endif
							@endforeach
							</select></br>
							</div>
							
							<div class="form-group">
							<label>Jumlah</label>
                            <input type="number" name="jumlah" required="required" value="{{ $ro->jumlah }}" class="form-control" placeholder=". . ."> 
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
