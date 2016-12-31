<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $table = 'jenis_barang';

    protected $fillable = [
        'nama', 'id_jenis', 'status'
    ];
}
