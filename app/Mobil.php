<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobils'; 
    protected $fillable = array('nama','warna','transmisi','tahun_keluar','harga','deskripsi','tipe_id','kategori_id','dealer_id');

    public function Tipe()
    {
    	return $this->belongsTo('App\Tipe','tipe_id');
    }

    public function Kategori()
    {
    	return $this->belongsTo('App\kategori','kategori_id');
    }

    public function Promo()
    {
    	return $this->hasMany('App\Promo','mobil_id');
    }

    public function Member()
    {
    	return $this->hasMany('App\Member','mobil_id');
    }
}
