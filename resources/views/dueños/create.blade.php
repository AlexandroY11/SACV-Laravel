@extends('layouts.app')

@section('title', 'Añadir Dueño')

@section('content')

<h1>Añadir Dueño</h1>

<form action="{{ route('dueños.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Id</label>
        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled>
        <div id="idHelp" class="form-text">Código de la Dueño *Se crea automaticamente</div>
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Ingrese Nombre</label>
        <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp" name="nombre" placeholder="Nombre del dueño" pattern="[A-Za-z]+" title="Solo se permiten letras">
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Ingrese Apellido</label>
        <input type="text" class="form-control" id="apellido" aria-describedby="apellidoHelp" name="apellido" placeholder="Apellido del dueño" pattern="[A-Za-z]+" title="Solo se permiten letras">
    </div>
    
    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="text" class="form-control" id="telefono" aria-describedby="telefonoHelp" name="telefono" placeholder="Telefono del dueño">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" aria-describedby="razaHelp" name="email" placeholder="Email del dueño">
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="direccion" aria-describedby="direccionHelp" name="direccion" placeholder="Direccion del dueño">
    </div>
    
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('dueños.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection