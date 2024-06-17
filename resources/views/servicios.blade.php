@extends('layout')

@section('titulo', 'Servicios')


@section('content')
    <!-- <h2>Servicios</h2> -->

    <table class="table table-striped">
        
        <tr>
            <td><a href="{{ route('servicios.create') }}">Nuevo servicio</a></td>
        </tr>
        <tr>
            <th>Lista de Servicos</th>
        </tr>
        
        @if($servicios)
            @foreach ($servicios as $item)
            <tr>
                <td  collspan="4"><a href="{{ route('servicios.show',$item) }}">{{ $item->titulo }}</a></td>
            </tr>
                
            @endforeach
        @else
            <tr colspan="4">nada</tr>
        @endif
        
    </table>


    
@endsection
