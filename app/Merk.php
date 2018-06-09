<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $table = 'merks'; 
    protected $fillable = array('nama','warna','deskripsi');

  	public function Tipe()
    {
    	return $this->hasMany('App\Tipe','merk_id');
    }
}
