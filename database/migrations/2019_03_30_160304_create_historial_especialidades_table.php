<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialEspecialidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_especialidades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_medico')->unsigned();
            $table->foreign('id_medico')->references('id')->on('medicos');
            $table->bigInteger('id_especialidades')->unsigned();
            $table->foreign('id_especialidades')->references('id')->on('especialidads');
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
        Schema::dropIfExists('historial_especialidades');
    }
}
