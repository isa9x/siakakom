<?php

use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//sample Jenis Pembayaran
        $jenis_pembayaran=[
    		['jenis_pembayaran'=>'BPJS'],
    		['jenis_pembayaran'=>'Paket Data'],
    		['jenis_pembayaran'=>'PDAM'],
    		['jenis_pembayaran'=>'Perakitan PC'],
    		['jenis_pembayaran'=>'Perbaikan / Service'],
    		['jenis_pembayaran'=>'PLN Pascabayar'],
    		['jenis_pembayaran'=>'PLN Prabayar (Token)'],
    		['jenis_pembayaran'=>'Pulsa'],
    		['jenis_pembayaran'=>'Software'],
    		['jenis_pembayaran'=>'Steam Wallet'],
    		['jenis_pembayaran'=>'Telkom / Speedy'],
    		['jenis_pembayaran'=>'Telkomsel / HALO'],
    		['jenis_pembayaran'=>'TV Kabel']
    	];
    	DB::table('jenis_pembayaran')->insert($jenis_pembayaran);

    	//sample Metode Pembayaran
    	$metodepembayaran=[
    		['metode_pembayaran'=>'Chipsakti','saldo'=>'100000'],
    		['metode_pembayaran'=>'KUDO','saldo'=>'100000'],
    		['metode_pembayaran'=>'Propana','saldo'=>'100000']
    	];
    	DB::table('metode_pembayaran')->insert($metodepembayaran);
    }
    
}
