@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
    <h1 class="text-center">Registrar Usuario</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3 mt-5">
<div class="card">
    <div class="card-body">
        <form action="{{route('usuarios.store')}}" method="POST">
        @method('POST')
        @csrf
        <div class="form-row">
            <div class="col-md-6">
                <label for="">Nombre</label>
                <input type="text" class="form-control" name="name" value="{{old('nombre')}}">
                @error('nombre')
                <small class="text-danger">{{$message}}</small>
                @enderror 
            </div>
            <div class="col-md-6">
                <label for="">Correo</label>
                <input type="text" class="form-control" name="email" value="{{old('correo')}}">
                @error('nombre')
                <small class="text-danger">{{$message}}</small>
                @enderror 
            </div>
            <div class="col-md-6">
                <label for="">Contraseña</label>
                <input type="password" class="form-control" name="password" value="{{old('contraseña')}}">
                @error('contraseña')
                <small class="text-danger">{{$message}}</small>
                @enderror 
            </div>
            <div class="col-md-6">
                <label for="">Confirmar Contraseña</label>
                <input type="password" class="form-control" name="contrasena-confirmar">
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
        <div class="row justify-content-center">
        <a href="{{route('usuarios.index')}}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
        <button class="btn btn-success m-3 col-md-3">Enviar</button>
        </div>
        </form>
    </div>
</div>
    </div>
</div>
@stop
