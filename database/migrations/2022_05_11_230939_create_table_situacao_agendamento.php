<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSituacaoAgendamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('situacao_agendamento', function (Blueprint $table) {
            $table->id();
            $table->string('nova', 255);
            $table->string('agendado', 255);
            $table->string('em_andamento', 255);
            $table->string('finalizado', 255);
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
        Schema::dropIfExists('situacao_agendamento');
    }
}
