<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petugas_admin extends Model
{
    protected $table = "petugas_admin";
    protected $primaryKey =  "id_petugas";
    protected $fillable = ['id_petugas','id','nama_petugas','alamat','kota_tinggal','no_tlp'];

	public function users(){
        return $this->belongsTo(users::class,'id');
    }

    public function rekam_medis(){
        return $this->hasMany(rekam_medis::class,'id_petugas');
    }
}
