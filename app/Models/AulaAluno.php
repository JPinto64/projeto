<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AulaAluno extends Model
{
    use HasFactory;
    
    protected $table = 'aulasalunos';
    protected $fillable = ['aula_id', 'aluno_id', 'presente'];
    
    public function aula()
    {
        return $this->belongsTo(Aula::class);
    }
    
    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }
}
