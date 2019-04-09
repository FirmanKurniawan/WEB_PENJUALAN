<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrgMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brg_masuks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('NoNota')->unsigned();
            $table->foreign('NoNota')->references('id')->on('brg_masuks');
            $table->string('TglMasuk');
            $table->biginteger('IDDistributor')->unsigned();
            $table->foreign('IDDistributor')->references('id')->on('distributors');
            $table->bigInteger('IDPetugas')->unsigned();
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
        Schema::dropIfExists('brg_masuks');
    }
}
