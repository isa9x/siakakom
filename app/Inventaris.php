<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $table = 'inventaris';

    protected $fillable = [
        'nama', 'id_jenis_barang', 'status'
    ];

    public function jenisBarang()
	{
		return $this->hasOne('App\JenisBarang');
	}

	public function hargaStok(){
		return $this->hasMany('App\HargaStok');
	}
}
