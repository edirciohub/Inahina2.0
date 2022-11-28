<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navios', function (Blueprint $table) {
            $table->id();
            $table->string('nome_navio');
            $table->string('marca_navio');
            $table->text('porto_registro');
            $table->date('ano_chegada');
            $table->integer('ind_chamada');
            $table->double('grt_navio');
            $table->string('nome_agente');
            $table->string('endereco_agente');
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
        Schema::dropIfExists('navios');
    }
};
