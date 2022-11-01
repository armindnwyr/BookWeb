@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
<div class="col-md-4">
    <x-adminlte-small-box title="{{$autor}}" text="Estudiantes Registrados" icon="fas fa-users text-white"
    theme="dark" url="#" url-text="Ver Detalles"/>
</div>

<div class="col-md-4">
    <x-adminlte-small-box title="{{$informe}}" text="Informes Registrados" icon="fa fa-file-pdf text-white"
    theme="info" url="#" url-text="Ver Detalles"/>
</div>

<div class="col-md-4">
    <x-adminlte-small-box title="{{$docente}}" text="Docentes Registrados" icon="fa fa-users text-white"
    theme="dark" url="#" url-text="Ver Detalles" id="sbUpdatable"/>
</div>

<div class="col-md-4 offset-md-4">
    <x-adminlte-small-box title="{{$libro}}" text="Libros Registrados" icon="fas fa-book text-white"
    theme="info" url="#" url-text="Ver Detalles" id="sbUpdatable"/>
</div>


</div>
@stop



@section('js')
    <script> console.log('Hi!'); </script>
@stop