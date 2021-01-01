<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resep_obat extends Model
{
    protected $table = "resep_obat";
    protected $primaryKey =  "id_resep_obat";
    protected $fillable = ['id_resep_obat','id_obat','id_rekam_medis','jumlah'];

    public function rekam_medis(){
        return $this->belongsTo(rekam_medis::class,'id_rekam_medis');
    }
    public function obat(){
        return $this->belongsTo(obat::class,'id_obat');
    }
}
