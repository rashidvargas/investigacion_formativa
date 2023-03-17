@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Registro</h1>
@stop

@section('content')
    <form action="/productos/{{$producto->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <lavel for="" class="form-label">IdCat</lavel>
            <input id="idCat" name="idCat" type="number" class="form-control" value="{{$producto->idCat}}">
        </div>
        <div class="mb-3">
            <lavel for="" class="form-label">Name</lavel>
            <input id="name" name="name" type="text" class="form-control" value="{{$producto->name}}">
        </div>
        <div class="mb-3">
            <lavel for="" class="form-label">Descripción</lavel>
            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$producto->descripcion}}">
        </div>
        <div class="mb-3">
            <lavel for="" class="form-label">Stock</lavel>
            <input id="stock" name="stock" type="number" class="form-control" value="{{$producto->stock}}">
        </div>
        <div class="mb-3">
            <lavel for="" class="form-label">Precio</lavel>
            <input id="precio" name="precio" type="number" class="form-control" value="{{$producto->precio}}">
        </div>
        <div class="mb-3">
            <lavel for="" class="form-label">Status</lavel>
            <input id="status" name="status" type="text" class="form-control" value="{{$producto->status}}">
        </div>
        <a href="/productos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop