@extends("layouts.plantilla")

@section("title", "Mascotas")
@section("content")
    <h1>Listado de Mascotas</h1>
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
                
                </td>
            </tr>
        @endforeach  
        </tbody>
    </table>
    </div>  

@endsection
    



