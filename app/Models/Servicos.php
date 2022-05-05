<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicos extends Model
{
    use HasFactory;

    protected $table = 'Servicos';
    protected $primarykey = "id_servicos";

    protected $fillable = [
        'id_servicos',
        'descricao_servicos',
        'ativo'
    ];

}
