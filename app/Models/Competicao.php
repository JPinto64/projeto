<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Competicao extends Model
{
    protected $table = 'competicoes';
    
    protected $fillable = [
        'data',
        'hora_inicio',
        'hora_termino',        
        'nome',
        'descricao',
        'local',
        'numero_maximo_participantes',
        'imagem',
        'estado',
        'escaloes',
        'premiacao',
        'observacoes',
    ];
}
