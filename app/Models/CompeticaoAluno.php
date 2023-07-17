<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompeticaoAluno extends Model
{
    protected $table = 'competicoesalunos';
    
    protected $fillable = [
        'aluno_id',
        'competicao_id',
        'posicao',
        'pontos_obtidos',
        'presente',
    ];
    
    // Define the relationships with Aluno and Competicao models
    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }
    
    public function competicao()
    {
        return $this->belongsTo(Competicao::class);
    }
}
