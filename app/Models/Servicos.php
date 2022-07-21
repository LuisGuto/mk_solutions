<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
class Servicos extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'servicos';
    protected $primarykey = "id_servicos";

    protected $fillable = [
        'id_servicos',
        'descricao_servicos',
        'ativo'
    ];

}
