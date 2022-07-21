<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Agendamento extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'agendamento';
    protected $primarykey = "id";

    protected $fillable = [
        "id",
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
