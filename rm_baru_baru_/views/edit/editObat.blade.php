@extends('sub')

@section('title', 'Obat -')

@section('breadcrumbs')
    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Obat</h1>
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
                            <strong class="card-title">Edit Data Obat</strong>
                        </div>
						<div>
						<br>
							<a href="/obat">>   Kembali</a>
						<br>
						</div>
						<div class="card-body">
						@foreach($obat as $o)
						<form action="/obat/update" method="post">
						{{ csrf_field() }}
							<input type="hidden" name="id_obat" value="{{ $o->id_obat }}"> <br/>
							Kategori <br><input type="text" required="required" name="kategori_obat" value="{{ $o->kategori_obat }}"> <br/>
							Nama <br><input type="text" name="nama_obat" value="{{ $o->nama_obat }}"> <br/>
							Bentuk <br><input type="text" name="bentuk_obat" value="{{ $o->bentuk_obat }}"> <br/>
							Tgl Kadaluarsa <br><input type="date" required="required" name="tgl_kadaluarsa" value="{{ $o->tgl_kadaluarsa }}"> <br/>
							Harga Obat <br><input type="number" name="harga_obat" value="{{ $o->harga_obat }}"> <br/>
							<br><input type="submit" value="Simpan Data">
						</form>
						@endforeach
						</div>
        			</div>
    			</div>
@endsection