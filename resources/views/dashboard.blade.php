@extends('layouts.app')

@section('title', 'SACV Dashboard')

@section('content')
<h1>Dashboard</h1>
<div class="row" style="padding-bottom:50px;">
    <div class="col-md-3">
        <a href="{{ route('mascotas.index') }}" class="text-decoration-none">
            <div class="card">
                <img src="{{asset('assets/images/mascotas.jpeg')}}" class="card-img-top" alt="Imagen de Mascotas">
                <div class="card-body">
                    <h5 class="card-title">Mascotas</h5>
                    <p class="card-text">Aquí podrás gestionar tus mascotas. Podrás crear, ver, actualizar y eliminar mascotas según sea necesario.</p>
                
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="{{ route('dueños.index') }}" class="text-decoration-none">
            <div class="card">
                <img src="{{asset('assets/images/dueños.jpeg')}}" class="card-img-top" alt="Imagen de Dueños">
                <div class="card-body">
                    <h5 class="card-title">Dueños</h5>
                    <p class="card-text">Aquí podrás gestionar tus dueños. Podrás crear, ver, actualizar y eliminar dueños según sea necesario.</p>
                
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="{{ route('visitas.index') }}" class="text-decoration-none">
            <div class="card">
                <img src="{{asset('assets/images/visitas.jpeg')}}" class="card-img-top" alt="Imagen de Visitas">
                <div class="card-body">
                    <h5 class="card-title">Visitas</h5>
                    <p class="card-text">Aquí podrás gestionar tus visitas. Podrás crear, ver, actualizar y eliminar visitas según sea necesario.</p>
                
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
