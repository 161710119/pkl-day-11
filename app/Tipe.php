<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    protected $table =  'tipes' ;
    protected $fillable = array('nama','merk_id');
    
    public function Merk()
    {
    	return $this->belongsTo('App\Merk','merk_id');
    }

  	public function Mobil()
    {
    	return $this->hasMany('App\Mobil','tipe_id');
    }
}
