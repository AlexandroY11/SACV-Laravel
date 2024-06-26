@extends("layouts.app")

@section("title", "Mascotas")
@section("content")
    <h1>Listado de Mascotas</h1>
    <a href="{{ route('mascotas.create')}}" class="btn btn-success mb-3">Añadir Mascota</a>
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Especie</th>
                <th scope="col">Raza</th>
                <th scope="col">Edad</th>
                <th scope="col">Dueño</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($mascotas as $mascota )
            
            <tr>
                <th scope="row">{{ $mascota->id }}</th>
                <td>{{ $mascota->nombre }}</td>
                <td>{{ $mascota->especie }}</td>
                <td>{{ $mascota->raza }}</td>
                <td>{{ $mascota->edad }}</td>
                <td>{{ $mascota->nombre_dueño }}</td>
                <td> 
                    <a href="{{ route('mascotas.edit', ['mascota' => $mascota->id])}}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('mascotas.destroy', ['mascota' => $mascota->id])}}" method="POST" style="display: inline-block">
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
