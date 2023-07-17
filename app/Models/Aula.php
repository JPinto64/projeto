<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;
    
    protected $table = 'aulas';
    protected $fillable = [
        'data',
        'hora_inicio',
        'hora_termino',
        'local',
        'escalao',
        'estado',
        'observacoes',
        'tutor_id',
    ];
    
    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }
}
