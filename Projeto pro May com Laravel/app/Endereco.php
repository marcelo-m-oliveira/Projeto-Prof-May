<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Endereco extends Model
{
    protected $fillable = [
        'rua', 'numero', 'bairro', 'cep',
    ];
}
