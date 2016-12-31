<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $table = ['jenis_barang'];

    protected $fillable = [
        'nama', 'id_jenis', 'status'
    ];

    public function jenisBarang()
	{
		return $this->hasOne('App\JenisBarang');
	}

	public function hargaStok(){
		return $this->hasMany('App\HargaStok');
	}
}
