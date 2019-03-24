<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialProcedimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_procedimientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_tratamiento')->unsigned();
            $table->foreign('id_tratamiento')->references('id')->on('tratamientos');
            $table->bigInteger('id_procedimiento')->unsigned();
            $table->foreign('id_procedimiento')->references('id')->on('procedimientos');
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
        Schema::dropIfExists('historial_procedimientos');
    }
}
