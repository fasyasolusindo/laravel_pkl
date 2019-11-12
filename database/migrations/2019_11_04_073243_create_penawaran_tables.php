'<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenawaranTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penawaran', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_customer');
            $table->string('barang');
            $table->integer('harga_barang');
            $table->integer('quantity');
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
        Schema::dropIfExists('penawaran');
    }
}
