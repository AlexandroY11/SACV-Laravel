@extends('layouts.app')

@section('title', 'Editar Dueño')

@section('content')

<h1>Editar Dueño {{$dueño->nombre}}</h1>

<form action="{{ route('dueños.update', ['dueño' => $dueño->id])}}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">Id</label>
        <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled value="{{$dueño->id}}">
        <div id="idHelp" class="form-text">Código de la Dueño</div>
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Dueño </label>
        <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp" name="nombre" placeholder="Nombre del dueño" value="{{$dueño->nombre}}" pattern="[A-Za-z]+">
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido del Dueño</label>
        <input type="text" class="form-control" id="apellido" aria-describedby="apellidoHelp" name="apellido" placeholder="Apellido del dueño" value="{{$dueño->apellido}}" pattern="[A-Za-z]+">
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="text" class="form-control" id="telefono" aria-describedby="telefonoHelp" name="telefono" placeholder="Telefono del dueño" value="{{$dueño->telefono}}"  pattern="[0-9]{1,10}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" aria-describedby="razaHelp" name="email" placeholder="Email del dueño" value="{{$dueño->email}}">
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="direccion" aria-describedby="direccionHelp" name="direccion" placeholder="Direccion del dueño" value="{{$dueño->direccion}}">
    </div>
    
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('dueños.index')}}" class="btn btn-danger">Cancelar</a>
    </div>
</form>
@endsection