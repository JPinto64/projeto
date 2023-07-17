<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $table = 'pagamento';
    protected $fillable = ['data_limite', 'valor', 'data_pagamento', 'estado_pagamento', 'ano_propina'];
}
