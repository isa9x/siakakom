<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendapatanJasa extends Model
{
    protected $table = 'pendapatan_jasa';

    protected $fillable = [
        'tanggal_pendapatan', 'id_jenis_pembayaran', 'id_metode_pembayaran','harga_modal','harga_jual','laba',
        'keterangan'
    ];
}
