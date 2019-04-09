<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('NoFaktur')->unsigned();
            $table->foreign('NoFaktur')->references('id')->on('penjualans');
            $table->string('TglPenjualan');
            $table->bigInteger('IDPetugas')->unsigned();
            $table->string('Bayar');
            $table->string('Sisa');
            $table->string('Total');
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
        Schema::dropIfExists('penjualans');
    }
}
