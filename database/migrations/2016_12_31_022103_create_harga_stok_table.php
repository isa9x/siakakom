<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHargaStokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harga_stok', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_inventaris');
            $table->integer('modal');
            $table->integer('jual');
            $table->integer('stok');
            $table->integer('terjual');
            $table->timestamps();

            $table->foreign('id_inventaris')->references('id')->on('inventaris')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('harga_stok');
    }
}
