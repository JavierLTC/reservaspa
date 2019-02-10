<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicio_lang extends Model
{
    protected $fillable = ['id_servicio', 'id_lang', 'nombre','descripcion'];
}
