@extends('adminlte::page')

@section('title', 'Crear Categoria')

@section('content_header')
    <h1 class="text-center">Crear una Nueva Categoria</h1>
@stop

@section('content')
      <div class="row justify-content-center">
        <div class="card shadow p-5 mb-5 bg-white rounded" style="width: 50rem;">
            <div class="card-body">
              <form action="{{route('categorias.store')}}" method="post">
                @csrf
                <div class="row justify-content-center">
                  <div class="form-group col-md-9">
                    <label>Nombre de la Categoria</label>
                    <input type="text" class="form-control" id="inputEmail4" name="nombre" value="{{old('nombre')}}">
                      @error('nombre')
                      <small class="text-danger">{{$message}}</small>
                      @enderror 
                  </div>
                </div>
                <div class="row justify-content-center">
                  <a href="{{route('categorias.store')}}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
                  <button type="submit" class="btn btn-success m-3 col-md-3">Enviar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@stop

