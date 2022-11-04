@extends('theme.base')
@section('content')
<div class="container py-5 text-center">
<h1>Bienvenido a SquareProyect</h1>
<a href="{{route('salas.index')}}" class="btn btn-primary">Mostrar Salas Disponibles</a>
</div>
@endsection