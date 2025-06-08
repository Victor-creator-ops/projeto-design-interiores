<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cliente_id',
        'funcionario_id',
        'status',
        'estapa_atual',
        'etapa_anterior',
        'etapa_posterior',
        'tempo_final_etapa',
        'atualizacao',
    ];

    protected $table = 'projetos';
}
