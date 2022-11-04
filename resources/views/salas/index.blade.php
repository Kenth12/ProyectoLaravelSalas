@extends('theme.base')
@section('content')
<div class="container py-5 text-center">
<h1>Listado de Salas</h1>
<table class="table">
    <thead>
        <th>Numero</th>
        <th>Bloque</th>
        <th>Piso</th>
        <th>Aula</th>
        <th>Cantidad Equipos</th>
    </thead>
    <tbody>
        @forelse($salas as $detail)
        <tr>
        <td>{{$detail->id_sala}}</td>
        <td>{{$detail->bloque_sala}}</td>
        <td>{{$detail->piso_sala}}</td>
        <td>{{$detail->aula_sala}}</td>
        <td>{{$detail->cantidad_equipos_sala}}</td>
        </tr>
        @empty
        @endforelse
    </tbody>
</table>
{{$salas->links()}}
<a href="{{route('salas.create')}}" class="btn btn-primary">Reservar Equipo</a>
</div>
@endsection