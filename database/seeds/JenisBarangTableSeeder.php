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
        $jenis_barang=[
        	['nama'=>'ATK'],
        	['nama'=>'Accessories'],
        	['nama'=>'Hardware'],
        	['nama'=>'Software']
        ];

        DB::table('jenis_barang')->insert($jenis_barang);
    }
}
