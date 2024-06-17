@extends('layout')

@section('titulo', 'Crear-Servicio')

@section('content')


@if ($errors->any())
            <div class="alert alert-danger alert-fixed-bottom">
                <strong>Datos incorrectos:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <table cellpadding="3" cellspaceing="5">
        <tr>
            <th colspan="4">Crear nuevo servicio</th>
        </tr>
        <form action="{{ route('servicios.store') }}" method="POST">
            {{ csrf_field() }}
            <tr>
                <td>Titulo</td>
                <td><input type="text" name="titulo"  value="{{ old('titulo') }}"></td>
            </tr>
            <tr>
                <td>Descripcion</td>
                <td><input type="text" name="descripcion" value="{{ old('descripcion') }}"></td>
            </tr>
            <tr>
                <td colspan="2"><button>guardar</button></td>
            </tr>
        </form>
    </table>

    

@endsection



