@extends('layouts.app')

@section('title', 'Editar Mascota')

@section('content')

<h1>Editar Mascota {{$mascota->nombre}}</h1>

<form action="{{ route('mascotas.update', ['mascota' => $mascota->id]) }}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Id</label>
        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled value="{{$mascota->id}}">
        <div id="idHelp" class="form-text">Código de la Mascota</div>
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre de Mascota</label>
        <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp" name="nombre" placeholder="Nombre de la Mascota" value="{{$mascota->nombre}}">
    </div>

    <div class="mb-3">
        <label for="especie" class="form-label">Especie</label>
        <input type="text" class="form-control" id="especie" aria-describedby="especieHelp" name="especie" placeholder="Especie de la Mascota" value="{{$mascota->especie}}">
    </div>
    <div class="mb-3">
        <label for="raza" class="form-label">Raza</label>
        <input type="text" class="form-control" id="raza" aria-describedby="razaHelp" name="raza" placeholder="Raza de la Mascota" value="{{$mascota->raza}}">
    </div>
    <div class="mb-3">
        <label for="edad" class="form-label">Edad</label>
        <input type="number" class="form-control" id="edad" aria-describedby="edadHelp" name="edad" placeholder="Edad de la Mascota" value="{{$mascota->edad}}">
    </div>
    <div class="mb-3">
        <label for="dueño" class="form-label">Dueño</label>
        <select class="form-select" name="dueño_id" id="dueño" required>
            <option selected disabled value="">Elegir...</option>
            @foreach ($dueños as $dueño) 
                <option value="{{ $dueño->id }}" {{ $dueño->id == $mascota->id ? 'selected' : '' }}>
                    {{ $dueño->nombre }} {{ $dueño->apellido }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('mascotas.index')}}" class="btn btn-warning">Cancelar</a>
    </div>
</form>
@endsection