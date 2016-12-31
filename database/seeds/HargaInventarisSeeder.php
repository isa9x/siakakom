<?php

use Illuminate\Database\Seeder;
// use App\Inventaris;
// use App\HargaStok;

class HargaInventarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//sample Inventaris
    	$inventaris=[
    		['nama'=>'Flashdisk Toshiba 8GB','id_jenis_barang'=>'2','status'=>'continued'],
    		['nama'=>'Speaker Fleco F-017','id_jenis_barang'=>'2','status'=>'continued'],
    		['nama'=>'Pouch Hardisk Eksternal','id_jenis_barang'=>'2','status'=>'continued'],
    		['nama'=>'Amplop 104','id_jenis_barang'=>'1','status'=>'continued']
    	];
    	DB::table('inventaris')->insert($inventaris);

    	//sample HargaStok
    	$hargastok=[
    		['id_inventaris'=>'1','modal'=>'45000','jual'=>'57000','stok'=>'4','terjual'=>'2'],
    		['id_inventaris'=>'2','modal'=>'100000','jual'=>'130000','stok'=>'2','terjual'=>'1'],
    		['id_inventaris'=>'2','modal'=>'71000','jual'=>'130000','stok'=>'2','terjual'=>'0'],
    		['id_inventaris'=>'3','modal'=>'27000','jual'=>'43000','stok'=>'26','terjual'=>'7'],
    		['id_inventaris'=>'4','modal'=>'120','jual'=>'500','stok'=>'75','terjual'=>'25'],
    	];
    	DB::table('harga_stok')->insert($hargastok);
    }
}
