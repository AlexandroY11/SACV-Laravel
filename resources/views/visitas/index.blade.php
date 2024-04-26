@extends("layouts.app")

@section("title", "Visitas")
@section("content")
    <h1>Listado de Visitas</h1>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('visitas.create')}}" class="btn btn-success mb-3">Añadir Visita</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Mascota</th>
                <th scope="col">Fecha Visita</th>
                <th scope="col">Motivo</th>
                <th scope="col">Tratamiento</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($visitas as $visita )
            
            <tr>
                <th scope="row">{{ $visita->id }}</th>
                <td>{{ $visita->nombre }}</td>
                <td>{{ $visita->fecha_visita }}</td>
                <td>{{ $visita->motivo }}</td>
                <td>{{ $visita->tratamiento }}</td>
                <td> 
                    <a href="{{ route('visitas.edit', ['visita' => $visita->id])}}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('visitas.destroy', ['visita' => $visita->id])}}" method="POST" style="display: inline-block">
                        @method('delete')
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach  
        </tbody>
    </table>
    </div>  

@endsection
    



