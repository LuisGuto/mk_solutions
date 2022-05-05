<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico_do_agendamento extends Model
{
    use HasFactory;

    protected $table = 'Servico_do_agendamento';
    protected $primarykey = "id_servico_do_agendamento";

    protected $fillable = [
        'id_servico_do_agendamento',
        'id_agendamento',
        'id_servicos'
    ];
}
