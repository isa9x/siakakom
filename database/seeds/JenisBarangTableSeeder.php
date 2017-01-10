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
        	['jenis'=>'ATK'],
        	['jenis'=>'Accessories'],
        	['jenis'=>'Hardware'],
        	['jenis'=>'Software']
        ];

        DB::table('jenis_barang')->insert($jenis_barang);
    }
}
