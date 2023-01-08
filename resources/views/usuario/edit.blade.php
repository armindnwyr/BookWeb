@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Editar Usuario</h1>
@stop

@section('content')
<div class="col-md-6 offset-md-3 mt-5">
<div class="card">
    <div class="card-body">
        <form action="{{route('usuarios.update',$usuario)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-row">
            <div class="col-md-6">
                <label for="">Nombre</label>
                <input type="text" class="form-control" value="{{old('name',$usuario)}}" name="name">
            </div>
            <div class="col-md-6">
                <label for="">Correo</label>
                <input type="text" class="form-control" value="{{old('email',$usuario)}}" name="email">
            </div>
            <div class="col-md-6">
                <label for="">Contraseña</label>
                <input type="text" class="form-control" value="" name="password">
            </div>
            <div class="col-md-6">
                <label for="">Confirmar Contraseña</label>
                <input type="text" class="form-control" value="" name="contrasena-confirmar">
            </div>
            <div class="form-group col-md-6">
                <label for="inputState">Rol</label>
                <select id="" class="form-control" value="{{old('name',$usuario)}}" name="rol">
                    @foreach($roles as $rol)
                        <option value="{{$rol->id}}"  {{ $usuario->roles->first()->id == $rol->id ? 'selected' : '' }}>
                            {{$rol->name}}
                        </option>
                    @endforeach
                </select>

              </div>
        </div>
        <div class="row justify-content-center">
        <a href="{{route('usuarios.index')}}" class="btn btn-info m-3">Regresar</a>
        <button class="btn btn-success m-3">Enviar</button>
        </div>
        </form>
    </div>
    </div>
</div>
@stop
