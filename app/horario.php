<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    protected $fillable = ['dia', 'hora_inicio','hora_fin'];
}
