<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HargaStok extends Model
{
    protected $table = 'harga_stok';

    protected $fillable = [
        'id_inventaris', 'modal', 'jual','stok','terjual'
    ];

    public function inventaris(){
		return $this->belongsTo('App\Inventaris','id');
		//return $this->hasOne('App\Inventaris','id');
	}
}
