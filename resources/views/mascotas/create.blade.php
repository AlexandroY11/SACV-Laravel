@extends('layouts.plantilla')

@section('title', 'Añadir Mascota')

@section('content')

<h1>Añadir Mascota</h1>

<form action="{{ route('mascotas.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Id</label>
        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled>
        <div id="idHelp" class="form-text">Código de la Mascota *Se crea automáticamente</div>
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp" name="nombre" placeholder="Nombre de la Mascota">
    </div>
    <div class="mb-3">
        <label for="especie" class="form-label">Especie</label>
        <input type="text" class="form-control" id="especie" aria-describedby="especieHelp" name="especie" placeholder="Especie de la Mascota">
    </div>
    <div class="mb-3">
        <label for="raza" class="form-label">Raza</label>
        <input type="text" class="form-control" id="raza" aria-describedby="razaHelp" name="raza" placeholder="Raza de la Mascota">
    </div>
    <div class="mb-3">
        <label for="edad" class="form-label">Edad</label>
        <input type="number" class="form-control" id="edad" aria-describedby="edadHelp" name="edad" placeholder="Edad de la Mascota">
    </div>
    <div class="mb-3">
        <label for="dueño" class="form-label">Dueño</label>
        <select class="form-select" name="dueño_id" id="dueño" required>
            <option selected disabled value="">Elegir...</option>
            @foreach ($dueños as $dueño) 
                <option value="{{ $dueño->id }}">{{ $dueño->nombre }} {{ $dueño->apellido }}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('mascotas.index')}}" class="btn btn-danger">Cancel</a>
    </div>
</form>
@endsection