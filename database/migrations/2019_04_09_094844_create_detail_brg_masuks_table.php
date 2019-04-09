<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailBrgMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_brg_masuks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('NoNota')->unsigned();
            $table->foreign('NoNota')->references('NoNota')->on('brg_masuks');
            $table->bigInteger('KodeBarang')->unsigned();
            $table->string('Jumlah');
            $table->string('Subtotal');
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
        Schema::dropIfExists('detail_brg_masuks');
    }
}
