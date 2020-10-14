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
							<a href="/rekam_medis">>   Kembali</a>
						<br>
						</div>
                        <div class="card-body">
						<form action="/rekam_medis/store" method="post">
						{{ csrf_field() }}
							<input type="hidden" name="id_rekam_medis"> <br/>
							Nama Pasien <br><select name="id_pasien" required="required">@foreach ($pasien as $p)<option value="{{ $p -> id_pasien }}">{{$p -> nama_pasien}}</option>@endforeach</select></br>
							Nama Petugas <br><select name="id_petugas" required="required">@foreach ($petugas_admin as $pa)<option value="{{ $pa -> id_petugas }}">{{$pa -> nama_petugas}}</option>@endforeach</select></br>
							Nama Dokter <br><select name="id_dokter" required="required">@foreach ($dokter as $d)<option value="{{ $d -> id_dokter }}">{{$d -> nama_dokter}}</option>@endforeach</select></br>
							Tgl Periksa <br><input type="date" name="tgl_periksa" required="required"> <br/>
							Diagnosa <br><input type="text" name="diagnosa"> <br/>
							Keterangan <br><input type="text" name="keterangan"> <br/>
							Biaya Jasa <br><input type="number" name="biaya_jasa" required="required"> <br/>
							<br><input type="submit" value="Simpan Data">
						</form>
 						</div>
        			</div>
    			</div>
@endsection
