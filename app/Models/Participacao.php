<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participacao extends Model
{
    use HasFactory;
    protected $table = 'participacoes';
    protected $fillable = ['participa'];
}
