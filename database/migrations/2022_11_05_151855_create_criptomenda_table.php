<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriptomendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criptomenda', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logotiopo');
            $table->string('nombre');
            $table->float('precio');
            $table->string('descripcion');
            $table->date('fecha_cracion');
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
        Schema::dropIfExists('criptomenda');
    }
}
