<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'Cliente';

    protected $fillable = [
        'nome',
        'cpf',
        'endereco',
        'contato',
    ];



}
