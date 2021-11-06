<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guia', function (Blueprint $table) {
            $table->id();
            $table->String('nombre');
            $table->text('descripcion');
            $table->String('tema');
            $table->String('Duracion');
            $table->biginteger('instructor_id')->unsigned();
            $table->foreign('instructor_id')->references('id')->on('instructor');
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
        Schema::dropIfExists('guia');
    }
}
