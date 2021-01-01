<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
	protected $fillable = ['name', 'email', 'password', 'role',];
	protected $hidden = ['password', 'remember_token',];

    public function petugas_admin(){
        return $this->hasOne(petugas_admin::class,'id','id');
    }
	
	public function pasien(){
        return $this->hasOne(pasien::class,'id','id');
    }
}
