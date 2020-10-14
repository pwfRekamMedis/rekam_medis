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
							<a href="/pasien">>   Kembali</a>
						<br>
						</div>
						<div class="card-body">
						@foreach($pasien as $p)
						<form action="/pasien/update" method="post">
						{{ csrf_field() }}
							<input type="hidden" name="id_pasien" value="{{ $p->id_pasien }}"> <br/>
							Nama <br><input type="text" required="required" name="nama_pasien" value="{{ $p->nama_pasien }}"> <br/>
							Tgl Lahir <br><input type="date" name="tgl_lahir" value="{{ $p->tgl_lahir }}"> <br/>
							Tempat Lahir <br><input type="text" name="tempat_lahir" value="{{ $p->tempat_lahir }}"> <br/>
							Alamat <br><input type="text" name="alamat" value="{{ $p->alamat }}"> <br/>
							Kota <br><input type="text" name="kota_tinggal" value="{{ $p->kota_tinggal }}"> <br/>
							NoTelp <br><input type="text" required="required" name="no_tlp" value="{{ $p->no_tlp }}"> <br/>
							Pekerjaan <br><input type="text" name="pekerjaan" value="{{ $p->pekerjaan }}"> <br/>
							<br><input type="submit" value="Simpan Data">
						</form>
						@endforeach
						</div>
        			</div>
    			</div>
@endsection
