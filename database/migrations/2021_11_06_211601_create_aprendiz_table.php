<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprendizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendiz', function (Blueprint $table) {
            $table->id();
            $table->String('nombre');
            $table->String('apellido');
            $table->String('correo');
            $table->String('genero');
            $table->biginteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
            $table->biginteger('instructor_id')->unsigned();
            $table->foreign('instructor_id')->references('id')->on('instructor');
            $table->biginteger('guia_id')->unsigned();
            $table->foreign('guia_id')->references('id')->on('guia');
            $table->biginteger('ficha_id')->unsigned();
            $table->foreign('ficha_id')->references('id')->on('ficha');
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
        Schema::dropIfExists('aprendiz');
    }
}
