<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendapatanBarang extends Model
{
    protected $table = 'pendapatan_barang';

    protected $fillable = [
        'tanggal_pendapatan', 'id_barang', 'laba','keterangan'
    ];
}