@extends('layouts.plantillamaestra')

@section('seccion')
<h1>Listado de servicios</h1>

<div class="table-container">
    <div class="pull-right">
    <div class="btn-group">
        <a href="{{ route('servicios.create') }}" class="btn btn-info" >Añadir Libro</a>
    </div>
    </div>
    <table id="servicios" class="table table-bordred table-striped">
        <thead>
            <th>id</th>
            <th>precio</th>
            <th>id_lang</th>
            <th>nombre</th>
            <th>descripcion</th>
            <!-- <th>Editar ** En un futuro</th>
            <th>Eliminar ** En un futuro</th>-->
        </thead>
        <tbody>
            @if($servicios->count())  
            @foreach($servicios as $servicio)  
            <tr>
            <td>{{$servicio->id}}</td>
            <td>{{$servicio->precio}}</td>
            <td>{{$servicio->id_lang}}</td>
            <td>{{$servicio->nombre}}</td>
            <td>{{$servicio->descripcion}}</td>
            <!-- <td>
                <a class="btn btn-primary btn-xs" href="{{action('ServicioController@edit', $servicio->id)}}" >
                    <span class="glyphicon glyphicon-pencil"></span>
                </a>
            </td>
            <td>
                <form action="{{action('ServicioController@destroy', $servicio->id)}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">

                <button class="btn btn-danger btn-xs" type="submit">
                    <span class="glyphicon glyphicon-trash"></span>
                </button>
            </td> -->
            </tr>
            @endforeach 
            @else
            <tr>
            <td colspan="8">No hay registro !!</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>

@endsection