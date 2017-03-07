<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisBarang extends Model
{
     protected $table = 'jenis_barang';

     protected $fillable =['jenis_barang'];

     public function inventaris(){
		return $this->belongsTo('App\Inventaris','id_jenis_barang');
	}
}
