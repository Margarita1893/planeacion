<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
           
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('codigo');
            $table->string('nombre');
            $table->bigInteger('tipoprograma_id')->unsigned();
            $table->bigInteger('modalidadejecucion_id')->unsigned();
            $table->string('version');
            $table->boolean('estado');            
            $table->timestamps();

            $table->foreign('tipoprograma_id')->references('id')->on('tipoprogramas')->onDelete("cascade");
            $table->foreign('modalidadejecucion_id')->references('id')->on('modalidadejecucions')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programas');
    }
}
