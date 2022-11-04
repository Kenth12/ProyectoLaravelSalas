@extends('theme.base')
@section('content')
<div class="container py-5 text-center">
<h1>Reservar Equipo</h1>
<div>
            <label for="id_sala" class="form-label">Seleccione una Sala</label>
            <select name="id_sala" id="id_sala" class="form-control">
            <option value="value1">Sala 1</option>
            <option value="value2">Sala 2</option>
            <option value="value3">Sala 3</option>
            </select>
            </div><br>

            <div>
            <label for="id_equipo" class="form-label">Seleccione una equipo</label>
            <select name="id_equipo" id="id_equipo" class="form-control">
            <option value="value1">Equipo 1</option>
            <option value="value2">Equipo 2</option>
            <option value="value3">Equipo 2</option>
            </select>
            </div>
</div>
@endsection