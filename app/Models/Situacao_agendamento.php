<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Situacao_agendamento extends Model
{
    use HasFactory;

    protected $table = 'Situacao_agendamento';
    protected $primarykey = "id_situacao_agendamento";

    protected $fillable = [
        'id_situacao_agendamento',
        'nova',
        'agendado',
        'em_andamento',
        'finalizado'
    ];
}
