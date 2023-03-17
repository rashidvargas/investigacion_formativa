@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
    <h1>Listado de Productos</h1>
@stop

@section('content')
  <a href="productos/create" class="btn btn-primary">Crear</a>

  <table class="table table-dark table-striped mt-4">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">IDCat</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Stock</th>
        <th scope="col">Precio</th>
        <th scope="col">Status</th>
        <th scope="col">Fecha</th>
        <th scope="col">Creacion</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach ($productos as $producto)
      <tr>
          <td>{{$producto->id}}</td>
          <td>{{$producto->idCat}}</td>
          <td>{{$producto->name}}</td>
          <td>{{$producto->descripcion}}</td>
          <td>{{$producto->stock}}</td>
          <td>{{$producto->precio}}</td>
          <td>{{$producto->status}}</td>
          <td>{{$producto->created_at}}</td>
          <td>
              <form action="{{route('productos.destroy',$producto->id)}}" method="POST">
                  <a href="/productos/{{$producto->id}}/edit" class="btn btn-info">Editar</a>
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