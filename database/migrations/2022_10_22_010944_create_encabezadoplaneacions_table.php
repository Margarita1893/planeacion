<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncabezadoplaneacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encabezadoplaneacions', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('codigo');
            $table->string('nombre');
            $table->bigInteger('programa_id')->unsigned();
            $table->date('fecha');
            $table->boolean('estado');
            $table->timestamps();

            $table->foreign('programa_id')->references('id')->on('programas')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encabezadoplaneacions');
    }
}
