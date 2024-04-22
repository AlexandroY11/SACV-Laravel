@extends('layouts.app')

@section('title', 'Añadir Visita')

@section('content')

<h1>Añadir Visita</h1>

<form action="{{ route('visitas.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Id</label>
        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled>
        <div id="idHelp" class="form-text">Código de la Visita *Se crea automáticamente</div>
    </div>

    <div class="mb-3">
        <label for="mascota" class="form-label">Mascota</label>
        <select class="form-select" name="mascota_id" id="mascota" required>
            <option selected disabled value="">Elegir...</option>
            @foreach ($mascotas as $mascota) 
                <option value="{{ $mascota->id }}">{{ $mascota->id }} - {{ $mascota->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha</label>
        <input type="date" class="form-control" id="fecha" aria-describedby="fechaHelp" name="fecha_visita" placeholder="Fecha de la Visita">
    </div>
    <div class="mb-3">
        <label for="motivo" class="form-label">Motivo</label>
        <input type="text" class="form-control" id="motivo" aria-describedby="motivoHelp" name="motivo" placeholder="Motivo de la Visita">
    </div>
    <div class="mb-3">
        <label for="tratamiento" class="form-label">Tratamiento</label>
        <input type="text" class="form-control" id="tratamiento" aria-describedby="tratamientoHelp" name="tratamiento" placeholder="Tratamiento de la Visita">
    </div>
    
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('visitas.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection