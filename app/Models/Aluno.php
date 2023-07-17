<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    
    protected $table = 'alunos';
    protected $fillable = [
        'numero',
        'nome',
        'nif',
        'sexo',
        'datadenascimento',
        'data_inscricao',
        'escalao',
        'foto',
        'email',
        'telemovel',
        'telemovel2',
        'endereco',
        'observacoes',
        'estado',
        
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
