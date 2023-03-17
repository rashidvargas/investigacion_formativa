@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Registro</h1>
@stop

@section('content')
    <form action="/categorias/{{$categoria->id}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <lavel for="" class="form-label">Name</lavel>
            <input id="name" name="name" type="text" class="form-control" value="{{$categoria->name}}">
        </div>
        <div class="mb-3">
            <lavel for="" class="form-label">Descripción</lavel>
            <input id="descripción" name="descripción" type="text" class="form-control" value="{{$categoria->descripción}}">
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