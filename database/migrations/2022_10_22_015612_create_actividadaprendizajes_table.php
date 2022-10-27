<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadaprendizajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividadaprendizajes', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('codigo');
            $table->bigInteger('actividadproyecto_id')->unsigned();
            $table->string('descripcion');
            $table->boolean('estado');
            $table->timestamps();
            
            $table->foreign('actividadproyecto_id')->references('id')->on('actividadproyecto')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividadaprendizajes');
    }
}
