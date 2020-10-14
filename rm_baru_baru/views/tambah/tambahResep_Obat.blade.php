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
                            <strong class="card-title">Tambah Data Resep Obat</strong>
                        </div>
						<div>
						<br>
							<a href="/resep_obat">>   Kembali</a>
						<br>
						</div>
                        <div class="card-body">
						<form action="/resep_obat/store" method="post">
						{{ csrf_field() }}
							<input type="hidden" name="id_resep"> <br/>
							Nama Obat <br><select name="id_obat" required="required">@foreach ($obat as $o)<option value="{{ $o -> id_obat }}">{{$o -> nama_obat}}</option>@endforeach</select></br>
							Id Rekam Medis <br><select name="id_rekam_medis" required="required">@foreach ($rekam_medis as $rm)<option value="{{ $rm -> id_rekam_medis }}">{{$rm -> id_rekam_medis}}</option>@endforeach</select></br>
							Jumlah <br><input type="number" name="jumlah" required="required"> <br/>
							<br><input type="submit" value="Simpan Data">
						</form>
 						</div>
        			</div>
    			</div>
@endsection
