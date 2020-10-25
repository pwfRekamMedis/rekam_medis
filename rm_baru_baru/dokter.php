<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    protected $table = "dokter";
    protected $primaryKey =  "id_dokter";
    protected $fillable = ['id_dokter','nama_dokter','alamat','kota_tinggal','no_tlp','spesialis'];

    public function rekam_medis(){
        return $this->hasMany(rekam_medis::class,'id_dokter');
    }
}
