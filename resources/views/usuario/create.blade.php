@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
    <h1 class="text-center">Lista de Docentes</h1>
@stop

@section('content')
<a href="" class="btn btn-info mb-3">Regresar</a>
<div class="card">
    <div class="card-body">
        <form action="{{route('usuarios.store')}}" method="POST">
        @method('POST')
        @csrf
        <div class="form-row">
            <div class="col-md-6">
                <label for="">Nombre</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="col-md-6">
                <label for="">Correo</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="col-md-6">
                <label for="">Contraseña</label>
                <input type="text" class="form-control" name="password">
            </div>
            <div class="col-md-6">
                <label for="">Confirmar Contraseña</label>
                <input type="text" class="form-control" name="contrasena-confirmar">
            </div>
            <div class="form-group col-md-6">
                <label for="inputState">Rol</label>
                <select id="" class="form-control" name="rol">
                    @foreach($roles as $rol)
                        <option value="{{$rol->name}}">{{$rol->name}}</option>
                    @endforeach
                </select>
              </div>
        </div>
        <button class="btn btn-info">Enviar</button>
        </form>
    </div>
</div>
@stop
