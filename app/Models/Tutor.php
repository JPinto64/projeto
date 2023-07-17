<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    
    protected $table = 'tutores';
    protected $fillable = [
        'numero',
        'nome',
        'nif',
        'sexo',
        'datadenascimento',
        'linguasfaladas',
        'bio',
        'foto',
        'email',
        'telemovel',
        'telemovel2',
        'endereco',
        'classificacao',
        'estado',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
