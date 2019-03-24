<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalSaludsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_saluds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula')->unique();
            $table->date('fecha_nacimiento');
            $table->integer('edad');
            $table->string('sexo');
            $table->string('tipo_Sangre',3);
            $table->string('telefono_Personal');
            $table->string('telefono_Emergencia');
            $table->string('correo');
            $table->string('cargo');
            $table->text('direccion');
            $table->date('fecha_ingreso_hospital');
            $table->boolean('estado_contrato')->default(false); 
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
        Schema::dropIfExists('personal_saluds');
    }
}
