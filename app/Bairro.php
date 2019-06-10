<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{
    protected $fillable = [
        'razao_social', 
        'nome_fantasia', 
        'lat', 
        'long'
    ];
}
