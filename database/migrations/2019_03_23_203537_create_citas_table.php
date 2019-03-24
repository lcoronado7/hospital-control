<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->date('fecha_peticion');
            $table->date('fecha_cita');
            $table->string('tipo_solicitud');
            $table->date('fecha_consulta');
            $table->string('hora_consulta');
            $table->text('descripcion');
            $table->bigInteger('id_paciente')->unsigned();
            $table->foreign('id_paciente')->references('id')->on('pacientes');
            $table->bigInteger('id_medico')->unsigned();
            $table->foreign('id_medico')->references('id')->on('medicos');
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
