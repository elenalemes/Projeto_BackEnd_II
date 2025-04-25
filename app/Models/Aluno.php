<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'nome',
        'telefone',
        'data_nascimento',
        'cpf',
        'rg',
        'naturalidade',
        'nacionalidade',
        'serie',
        'turno',
        'matricula'
    ];
}
