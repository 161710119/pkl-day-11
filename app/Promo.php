<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table =  'promos' ;
    protected $fillable = array('mobil_id','promo','harga_awal','harga_promo','comment');
    
    public function Mobil()
    {
    	return $this->belongsTo('App\Mobil','mobil_id');
    }
}
