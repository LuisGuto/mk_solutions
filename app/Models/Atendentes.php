<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendentes extends Model
{
    use HasFactory;

    protected $table = 'Atendentes';

    protected $fillable = [
        'nome',
        'funcao',
        'setor'
    ];
}
