@extends('plantillamaestra')

@section('seccion')
    <h1>Reservas</h1>

    @if (isset($id_user))
        Llegó el id del usuario
    @else
        No llegó
    @endif
    El usuario que reservó fue {{$usuarios}} con id: {{$id_user}}
@endsection