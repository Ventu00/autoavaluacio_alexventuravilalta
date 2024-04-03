@extends('layouts.principal')

@section('contenido')
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre de Usuario</th>
      <th scope="col">Correo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Activo</th>
      <th scope="col">Tipo de Usuario</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($usuarios as $usuario)
      <tr>  
          <td>{{ $usuario->id }}</td>
          <td>{{ $usuario->nom_usuari }}</td>
          <td>{{ $usuario->correu }}</td>
          <td>{{ $usuario->nom }}</td>
          <td>{{ $usuario->cognom }}</td>
          <td>{{ $usuario->actiu }}</td>
          <td>{{ $usuario->tipus_usuaris_id }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ $usuarios->links() }}
@endsection