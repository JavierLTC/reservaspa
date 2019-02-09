<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservasController extends Controller
{
    //
    public function inicio()
    {
        
    }

    public function getUsers($id_user = false)
    {
        if ($id_user !== false)
            $usuarios = 'koke';
        else
            $usuarios = 'JAVI';
    
            return view('reserva', compact('usuarios', 'id_user'));
    }
}
