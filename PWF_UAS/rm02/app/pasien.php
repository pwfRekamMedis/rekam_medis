<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    protected $table = "pasien";
    protected $primaryKey =  "id_pasien";
    protected $fillable = ['id_pasien','id','nama_pasien','tgl_lahir','tempat_lahir','alamat','kota_tinggal','no_tlp','pekerjaan'];

	public function users(){
        return $this->belongsTo(users::class,'id');
    }
    public function rekam_medis(){
        return $this->hasMany(rekam_medis::class,'id_pasien');
    }
}
