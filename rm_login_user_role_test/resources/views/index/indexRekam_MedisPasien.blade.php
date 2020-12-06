@extends('main')

@section('title', '- Pasien')

@section('breadcrumbs')
    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Rekam Medis Pasien</h1>
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
		<div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Rekam Medis per Pasien</strong>
                        </div>
						<br>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
				  <thead>
						<tr>
							<th>Id Pasien</th>
							<th>Nama Pasien</th>
							<th>Id Rekam Medis</th>
							<th>Nama Petugas</th>
							<th>Nama Dokter</th>
							<th>Tgl Periksa</th>
							<th>Diagnosa</th>
							<th>Keterangan</th>
							<th>Biaya Jasa</th>
						</tr>
				  </thead>
				  <tbody>
						
						@foreach($pasien as $p)
						<tr>
							<td>{{ $p->id_pasien }}</td>
							<td>{{ $p->nama_pasien }}</td>	
							<td>
								@foreach($p->rekam_medis as $rm)
									- {{ $rm->id_rekam_medis }}<br>
								@endforeach
							</td>
							<td>
								@foreach($p->rekam_medis as $rm)
									- {{ $rm->petugas_admin->nama_petugas }}<br>
								@endforeach
							</td>
							<td>
								@foreach($p->rekam_medis as $rm)
									- {{ $rm->dokter->nama_dokter }}<br>
								@endforeach
							</td>
							<td>
								@foreach($p->rekam_medis as $rm)
									- {{ $rm->tgl_periksa }}<br>
								@endforeach
							</td>
							<td>
								@foreach($p->rekam_medis as $rm)
									- {{ $rm->diagnosa }}<br>
								@endforeach
							</td>
							<td>
								@foreach($p->rekam_medis as $rm)
									- {{ $rm->keterangan }}<br>
								@endforeach
							</td>
							<td>
								@foreach($p->rekam_medis as $rm)
									- {{ $rm->biaya_jasa}}<br>
								@endforeach
							</td>
									
						</tr>
						@endforeach
					</tbody>
					</table>
					</div>
       	</div>
    </div>
@endsection