@extends('sub')

@section('title', 'Petugas -')

@section('breadcrumbs')
    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Petugas</h1>
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
                            <strong class="card-title">Edit Data Petugas</strong>
                        </div>
						<div>
						<br>
							<a href="/petugas_admin">>   Kembali</a>
						<br>
						</div>
						<div class="card-body">
						@foreach($petugas_admin as $pa)
						<form action="/petugas_admin/update" method="post">
						{{ csrf_field() }}
							<input type="hidden" name="id_petugas" value="{{ $pa->id_petugas }}"> <br/>
							Nama <br><input type="text" required="required" name="nama_petugas" value="{{ $pa->nama_petugas }}"> <br/>
							Alamat <br><input type="text" name="alamat" value="{{ $pa->alamat }}"> <br/>
							Kota <br><input type="text" name="kota_tinggal" value="{{ $pa->kota_tinggal }}"> <br/>
							NoTelp <br><input type="text" required="required" name="no_tlp" value="{{ $pa->no_tlp }}"> <br/>
							<br><input type="submit" value="Simpan Data">
						</form>
						@endforeach
						</div>
        			</div>
    			</div>
@endsection
