<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aparelho extends Model
{
    protected $fillable = [
        'comodo_id' , 'nome', 'potencia', 'hora', 'consumo',
    ];
}
