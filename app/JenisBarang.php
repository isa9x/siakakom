<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisBarang extends Model
{
     protected $table = 'jenis_barang';

     public function inventaris(){
		return $this->belongsTo('App\Inventaris');
	}
}
