@extends("layouts.plantilla")

@section("title", " Listado de Dueños ")
@section("content")
        <h1>Listado de Dueños</h1>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>


                </tr>
            </thead>
            <tbody>
              @foreach ($dueños as $dueño )
                
                <tr>
                    <th scope="row">{{ $dueño->id }}</th>
                    <td>{{ $dueño->nombre }}</td>
                    <td>{{ $dueño->apellido }}</td>
                    <td>{{ $dueño->direccion }}</td>
                    <td>{{ $dueño->telefono }}</td>
                    <td>{{ $dueño->email }}</td>
                    <td> 
                    
                    </td>
                </tr>
              @endforeach  
            </tbody>
        </table>
      </div>  

      @endsection
    



