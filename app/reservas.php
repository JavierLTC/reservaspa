<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservas extends Model
{
    protected $fillable = ['id_reserva', 'nombre_cliente', 'comentario','dia', 'hora_inicio', 'nombre_servicio', 'nombre_servicio', 'precio_final'];
}
