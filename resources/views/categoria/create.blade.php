@extends('adminlte::page')

@section('title', 'Crear Categoria')

@section('content_header')
    <h1>Crear una Nueva Categoria</h1>
@stop

@section('content')
<a href="{{route('categoria.store')}}" class="btn btn-info mb-3">Regresar Lista Docente</a>
<div class="shadow p-5 mb-5 bg-white rounded">
    <form action="{{route('categoria.store')}}" method="post">
        @csrf
          <div class="form-group col-md-6">
            <label>Nombre</label>
            <input type="text" class="form-control" id="inputEmail4" name="nombre" value="{{old('nombre')}}">
              @error('nombre')
              <small class="text-danger">{{$message}}</small>
              @enderror 
          </div>
          <button type="submit" class="btn btn-primary mt-3 m-2">Enviar Formulario</button>
        </form>
      </div>
@stop

