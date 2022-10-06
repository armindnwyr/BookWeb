@extends('adminlte::page')

@section('title', 'Editar Categoria')

@section('content_header')
    <h1>Editar Categoria</h1>
@stop

@section('content')
<a href="{{route('categoria.store')}}" class="btn btn-info mb-3">Regresar a Lista de Categoria</a>
<div class="shadow p-5 mb-5 bg-white rounded">
    <form action="{{route('categoria.update', $categoria)}}" method="post">
        @csrf
        @method('put')
          <div class="form-group col-md-6">
            <label>Nombre</label>
            <input type="text" class="form-control" id="inputEmail4" name="nombre" value="{{old('nombre',$categoria->cate_nombre)}}">
              @error('nombre')
              <small class="text-danger">{{$message}}</small>
              @enderror 
          </div>
          <button type="submit" class="btn btn-primary mt-3 m-2">Enviar Formulario</button>
        </form>
      </div>
@stop