@extends('layout')

@section('titulo', 'Servicio | ' .$servicio->titulo)


@section('content')
    <table class="table table-striped">
        <tr>
            <th colspan="4">{{$servicio->titulo}}</th>
        </tr>
        <tr>
            <td colspan="4">{{$servicio->descripcion}}</td>
        </tr>
        <tr>
            <td colspan="4">{{$servicio->created_at->diffForHumans()}}</td>
        </tr>

    </table>
@endsection