<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPenawaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('detailpenawaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('id_order')->references('id_penawaran');
            $table->string('barang');
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
        Schema::dropIfExists('detailpenawaran');
    }
}