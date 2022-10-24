@extends('adminlte::page')

@section('title', 'Crear Libro')

@section('content_header')
    <h1>Registrar nuevo libro</h1>
@stop

@section('content')
    <a href="{{route('libro.index')}}" class="btn btn-info mb-3">Regresar Lista Libros</a>
    <div class="shadow p-5 mb-5 bg-white rounded">
    <form action="{{route('libro.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="form-group col-sm-4">
        <label >Titulo</label>
        <input type="text" class="form-control" placeholder="Titulo" name="titulo" value="{{old('titulo')}}">
            @error('titulo')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group col-sm-4">
            <label>Autor</label>
            <input type="text" class="form-control" placeholder="Autor" name="autor" value="{{old('autor')}}">
            @error('autor')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group col-sm-4">
            <label>Enlace de drive</label>
            <input type="text" class="form-control" placeholder="drive" name="drive" value="{{old('drive')}}">
            @error('drive')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group col-sm-4">
            <label>Subir Imagen</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="imagen" value="{{old('imagen')}}" accept="image/*">
              <label class="custom-file-label" for="inputGroupFile01">Eliga foto</label>
            </div>
            @error('imagen')
            <small class="text-danger">{{$message}}</small>
            @enderror
          </div>
        </div>
        <div class="form-group">
        <label for="exampleFormControlTextarea1">Descripción</label>
        <textarea class="form-control" rows="3" name="descripcion" value="">{{old('descripcion')}}</textarea>
            @error('descripcion')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-success mt-3">Enviar Formulario</button>
        </div>
    </form>
    </div>
@stop
