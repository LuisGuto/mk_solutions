<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class SituacaoAgendamento extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;


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
