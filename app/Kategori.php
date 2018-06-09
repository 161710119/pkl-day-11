<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris'; 
    protected $fillable = array('nama');

  	public function Mobil()
    {
    	return $this->hasOne('App\Mobil','kategori_id');
    }
}
