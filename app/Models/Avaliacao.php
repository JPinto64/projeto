<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $table = 'avaliacao';
    protected $fillable = ['data', 'tecnica', 'fisica', 'desempenho','observacoes'];
}
