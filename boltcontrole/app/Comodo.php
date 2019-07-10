<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comodo extends Model
{
    protected $fillable = [
        'nome',
    ];

    public function aparelhos() {
      return $this->hasMany('App\Aparelho');
    }
}
