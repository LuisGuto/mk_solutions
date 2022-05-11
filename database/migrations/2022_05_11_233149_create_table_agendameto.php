<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAgendameto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendameto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_cliente')->constrained('cliente');
            $table->foreignId('id_tecnico')->constrained('tecnico');
            $table->foreignId('id_atendentes')->constrained('atendentes');
            $table->foreignId('id_servicos')->constrained('servicos');
            $table->timestamp('data_hora_prevista');
            $table->timestamp('data_hora_realizada');
            $table->integer('status_id');
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
        Schema::dropIfExists('agendameto');
    }
}
