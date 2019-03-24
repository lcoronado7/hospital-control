<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialPersonalSaludsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_personal_saluds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('descripcion');
            $table->bigInteger('id_personal_saluds')->unsigned();
            $table->foreign('id_personal_saluds')->references('id')->on('personal_saluds');
            $table->bigInteger('id_historial_procedimientos')->unsigned();
            $table->foreign('id_historial_procedimientos')->references('id')->on('historial_procedimientos');
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
        Schema::dropIfExists('historial_personal_saluds');
    }
}
