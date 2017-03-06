<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendapatanJasaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendapatan_jasa', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal_pendapatan');
            $table->unsignedinteger('id_jenis_pembayaran');
            $table->unsignedinteger('id_metode_pembayaran');
            $table->integer('harga_modal');
            $table->integer('harga_jual');
            $table->unsignedinteger('laba');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendapatan_jasa');
    }
}
