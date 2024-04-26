@extends('layouts.app')

@section('title', 'SACV Dashboard')

@section('content')
<div class="row" style="padding-bottom:50px;">
    <div class="col-md-3">
        <a href="{{ route('mascotas.index') }}" class="text-decoration-none">
            <div class="card">
                <img src="{{asset('assets/images/mascotas.jpeg')}}" class="card-img-top" alt="Imagen de Mascotas">
                <div class="card-body">
                    <h5 class="card-title">Mascotas</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas iste enim explicabo at illo vel? Sit, voluptas consectetur tenetur vero, ducimus consequuntur porro culpa debitis assumenda sunt voluptatibus nemo vel.</p>
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
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti neque quia ab fugiat voluptates nisi voluptatem fugit dolore sunt? Commodi amet aut iure blanditiis quibusdam delectus ipsum voluptas obcaecati nulla.</p>
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
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. In modi voluptatem dolore cum optio? Magni esse optio hic eaque quae repellendus accusantium incidunt, dicta eum ullam quisquam similique. Delectus, repellat?</p>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
