@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
    <h1>Listado de Categorias</h1>
@stop

@section('content')
  <a href="categorias/create" class="btn btn-primary">Crear</a>

  <table class="table table-dark table-striped mt-4">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categorias as $categoria)
      <tr>
          <td>{{$categoria->id}}</td>
          <td>{{$categoria->name}}</td>
          <td>{{$categoria->descripción}}</td>
          <td>
              <form action="{{route('categorias.destroy',$categoria->id)}}" method="POST">
                  <a href="/categorias/{{$categoria->id}}/edit" class="btn btn-info">Editar</a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Borrar</button>
              </form>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop