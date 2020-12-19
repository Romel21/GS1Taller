<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('userId')->unsigned()->comment('relacionado con id tabla usuarios');
            $table->index(['userId'], 'fk_citas_usuarios_idx');
            $table->foreign('userId', 'fk_citas_usuarios_idx')
                ->references('id')->on('usuarios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->dateTime('fecha');
            $table->string('direccion');
            $table->integer('servicio');
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
        Schema::dropIfExists('citas');
    }
}
