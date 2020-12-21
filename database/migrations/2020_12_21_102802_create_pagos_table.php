<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('citaId')->unsigned()->comment('relacionado con id tabla citas');
            $table->index(['citaId'], 'fk_pagos_citas_idx');
            $table->foreign('citaId', 'fk_pagos_citas_idx')
                ->references('id')->on('citas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->dateTime('fecha');
            $table->integer('servicio');
            $table->string('estado');
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
        Schema::dropIfExists('pagos');
    }
}
