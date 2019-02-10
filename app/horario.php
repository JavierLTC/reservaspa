<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    protected $fillable = ['id_horario', 'dia', 'hora_inicio','hora_fin'];
}
