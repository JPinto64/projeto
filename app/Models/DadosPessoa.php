<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DadosPessoa extends Model
{
    use HasFactory;
    protected $table = 'dadospessoa';
    protected $fillable = ['nome', 'data_nascimento', 'email', 'morada', 'cod_postal'];
}
