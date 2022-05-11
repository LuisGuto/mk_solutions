<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableServicoDoAgendamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servico_do_agendamento', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agendamento_id')->constrained('agendamento');
            $table->foreignId('servicos_id')->constrained('servicos');
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
        Schema::dropIfExists('servico_do_agendamento');
    }
}
