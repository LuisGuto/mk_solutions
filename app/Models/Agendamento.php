<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $table = 'Agendamento';

    protected $fillable = [
        'id_cliente',
        'id_tecnico',
        'id_atendentes',
        'id_servicos',
        'data_hora_prevista',
        'data_hora_realizada',
        'staus_id',
    ];

    public function agendamento()
    {
        return $this->belongsTo(MuitosPraUmModel::class, 'Agendamento');
    }
}
