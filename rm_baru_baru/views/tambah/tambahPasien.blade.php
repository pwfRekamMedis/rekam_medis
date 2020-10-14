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
                            <strong class="card-title">Tambah Data Pasien</strong>
                        </div>
						<div>
						<br>
							<a href="/pasien">>   Kembali</a>
						<br>
						</div>
                        <div class="card-body">
						<form action="/pasien/store" method="post">
						{{ csrf_field() }}
							<input type="hidden" name="id_pasien"> <br/>
							Nama <br><input type="text" name="nama_pasien" required="required"> <br/>
							Tgl Lahir <br><input type="date" name="tgl_lahir"> <br/>
							Tempat Lahir <br><input type="text" name="tempat_lahir"> <br/>
							Alamat <br><input type="text" name="alamat"> <br/>
							Kota <br><input type="text" name="kota_tinggal"> <br/>
							NoTelp <br><input type="text" name="no_tlp" required="required"> <br/>
							Pekerjaan <br><input type="text" name="pekerjaan"> <br/>
							<br><input type="submit" value="Simpan Data">
						</form>
						</div>
        			</div>
    			</div>
@endsection

