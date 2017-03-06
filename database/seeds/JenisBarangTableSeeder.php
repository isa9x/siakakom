<?php

use Illuminate\Database\Seeder;

class JenisBarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeder jenis barang
        $jenis_barang=[
        	['jenis_barang'=>'ATK'],
        	['jenis_barang'=>'Accessories'],
        	['jenis_barang'=>'Hardware'],
        	['jenis_barang'=>'Software']
        ];

        DB::table('jenis_barang')->insert($jenis_barang);
    }
}
