<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cobranca extends Model
{
    use HasFactory;
    
    protected $table = 'cobrancas';
    protected $fillable = [
        'aluno_id',
        'data_cobranca',
        'data_limite',
        'data_pagamento',
        'montante',
        'multa',
        'iva',
        'descricao',
        'referencia',
        'modo_pagamento',
        'estado',
    ];
    
    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }
    
}
