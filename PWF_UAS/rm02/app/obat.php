<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    protected $table = "obat";
    protected $primaryKey =  "id_obat";
    protected $fillable = ['id_obat','kategori_obat','nama_obat','bentuk_obat','tgl_kadaluarsa','harga_obat'];

    public function resep_obat(){
        return $this->hasMany(resep_obat::class,'id_obat');
    }
}
