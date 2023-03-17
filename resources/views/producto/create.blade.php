@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
    <h1>Crear Registro</h1>
@stop

@section('content')
    <form action="/productos" method="POST">
        @csrf
        <div class="mb-3">
            <lavel for="" class="form-label">IdCat</lavel>
            <input id="idCat" name="idCat" type="number" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <lavel for="" class="form-label">Name</lavel>
            <input id="name" name="name" type="text" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <lavel for="" class="form-label">Descripción</lavel>
            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <lavel for="" class="form-label">Stock</lavel>
            <input id="stock" name="stock" type="number" class="form-control" tabindex="4">
        </div>
        <div class="mb-3">
            <lavel for="" class="form-label">Precio</lavel>
            <input id="precio" name="precio" type="number" class="form-control" tabindex="5">
        </div>
        <div class="mb-3">
            <lavel for="" class="form-label">Status</lavel>
            <input id="status" name="status" type="text" class="form-control" tabindex="6">
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