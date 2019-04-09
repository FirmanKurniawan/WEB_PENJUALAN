<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('KodeBarang');
            $table->string('NamaBarang');
            $table->bigInteger('KodeJenis')->unsigned();
            $table->foreign('KodeJenis')->references('id')->on('jenis');
            $table->string('HargaNet');
            $table->string('HargaJual');
            $table->string('Stok');
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
        Schema::dropIfExists('barangs');
    }
}
