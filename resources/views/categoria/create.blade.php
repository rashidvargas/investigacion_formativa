@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
    <h1>Crear Registro</h1>
@stop

@section('content')
    <form action="/categorias" method="POST">
        @csrf
        <div class="mb-3">
            <lavel for="" class="form-label">Name</lavel>
            <input id="name" name="name" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <lavel for="" class="form-label">Descripción</lavel>
            <input id="descripción" name="descripción" type="text" class="form-control" tabindex="1">
        </div>
        <a href="/categorias" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop