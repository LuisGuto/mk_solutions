<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SituacaoAgendamento extends Model
{
    use HasFactory;
    


    protected $table = 'situacao_agendamento';
    protected $primarykey = "id-situacaoAgendamento";

    protected $fillable = [
        'id-situacaoAgendamento',
        'nova',
        'agendado',
        'em_andamento',
        'finalizado'
    ];
}
