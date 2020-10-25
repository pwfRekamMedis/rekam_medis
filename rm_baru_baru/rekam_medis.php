<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rekam_medis extends Model
{
    protected $table = "rekam_medis";
    protected $primaryKey =  "id_rekam_medis";
    protected $fillable = ['id_rekam_medis','id_pasien','id_petugas','id_dokter','tgl_periksa','diagnosa','keterangan','biaya_jasa'];

    public function pasien(){
        return $this->belongsTo(pasien::class,'id_pasien');
    }
    public function petugas_admin(){
        return $this->belongsTo(petugas_admin::class,'id_petugas');
    }
    public function dokter(){
        return $this->belongsTo(dokter::class,'id_dokter');
    }
}
