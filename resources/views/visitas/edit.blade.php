@extends('layouts.app')

@section('title', 'Editar Visita')

@section('content')

<h1>Editar Visita {{$visita->nombre}}</h1>

<form action="{{ route('visitas.update', ['visita' => $visita->id]) }}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Id</label>
        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled value="{{$visita->id}}">
        <div id="idHelp" class="form-text">Código de la Visita</div>
    </div>

    <div class="mb-3">
        <label for="mascota" class="form-label">Nombre Mascota</label>
        <select class="form-select" name="mascota_id" id="mascota" required>
            <option selected disabled value="">Elegir...</option>
            @foreach ($mascotas as $mascota) 
                <option value="{{ $mascota->id }}">{{ $mascota->id }} - {{ $mascota->nombre }}</option>
            @endforeach
            @foreach ($mascotas as $mascota) 
                <option value="{{ $mascota->id }}" {{ $mascota->id == $visita->mascota_id ? 'selected' : '' }}>
                    {{ $mascota->id }} - {{ $mascota->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha de la visita</label>
        <input type="date" class="form-control" id="fecha" aria-describedby="fechaHelp" name="fecha_visita" placeholder="Fecha de la visita de la Visita" value="{{$visita->fecha_visita}}">
    </div>
    <div class="mb-3">
        <label for="motivo" class="form-label">Motivo</label>
        <input type="text" class="form-control" id="motivo" aria-describedby="motivoHelp" name="motivo" placeholder="Motivo de la Visita" value="{{$visita->motivo}}">
    </div>
    <div class="mb-3">
        <label for="tratamiento" class="form-label">Tratamiento</label>
        <input type="text" class="form-control" id="tratamiento" aria-describedby="tratamientoHelp" name="tratamiento" placeholder="Tratamiento de la Visita" value="{{$visita->tratamiento}}">
    </div>

    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('visitas.index')}}" class="btn btn-warning">Cancelar</a>
    </div>
</form>
@endsection