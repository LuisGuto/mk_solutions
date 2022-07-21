<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Servico_do_agendamento extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'servico_do_agendamento';
    protected $primarykey = "id_servico_do_agendamento";

    protected $fillable = [
        'id_servico_do_agendamento',
        'id_agendamento',
        'id_servicos'
    ];

    public function agendamento()
    {
        return $this->belongsTo(Agendamento::class, 'id_agendamento');
    }
}
