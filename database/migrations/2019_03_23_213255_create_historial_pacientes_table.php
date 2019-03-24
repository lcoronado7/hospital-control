<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha_historial');
            $table->bigInteger('id_paciente')->unsigned();
            $table->foreign('id_paciente')->references('id')->on('pacientes');
            $table->bigInteger('id_diagnostico')->unsigned();
            $table->foreign('id_diagnostico')->references('id')->on('diagnosticos');
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
        Schema::dropIfExists('historial_pacientes');
    }
}
