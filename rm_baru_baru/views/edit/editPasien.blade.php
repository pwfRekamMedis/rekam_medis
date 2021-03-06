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
							Nama <br><input type="text" required="required" name="nama_pasien" value="{{ $pasien->nama_pasien }}"> <br/>
							Tgl Lahir <br><input type="date" name="tgl_lahir" value="{{ $pasien->tgl_lahir }}"> <br/>
							Tempat Lahir <br><input type="text" name="tempat_lahir" value="{{ $pasien->tempat_lahir }}"> <br/>
							Alamat <br><input type="text" name="alamat" value="{{ $pasien->alamat }}"> <br/>
							Kota <br><input type="text" name="kota_tinggal" value="{{ $pasien->kota_tinggal }}"> <br/>
							NoTelp <br><input type="text" required="required" name="no_tlp" value="{{ $pasien->no_tlp }}"> <br/>
							Pekerjaan <br><input type="text" name="pekerjaan" value="{{ $pasien->pekerjaan }}"> <br/>
							<br><input type="submit" value="Simpan Data">
						</form>
						
						</div>
        			</div>
    			</div>
@endsection
