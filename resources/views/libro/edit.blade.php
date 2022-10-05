@extends('adminlte::page')

@section('title', 'Crear Libro')

@section('content_header')
    <h1>Editar libro</h1>
@stop

@section('content')
    <a href="{{route('libro.index')}}" class="btn btn-info mb-3">Regresar Lista Libros</a>
    <div class="shadow p-5 mb-5 bg-white rounded">
    <form action="{{route('libro.update',$libro)}}" method="post">
        @csrf
        @method('put')
        <div class="row">
        <div class="form-group col-sm-4">
        <label >Titulo</label>
        <input type="text" class="form-control" placeholder="Titulo" name="titulo" value="{{old('titulo',$libro->li_titulo)}}">
            @error('titulo')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group col-sm-4">
            <label>Autor</label>
            <input type="text" class="form-control" placeholder="Autor" name="autor" value="{{old('autor',$libro->li_autor)}}">
            @error('autor')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group col-sm-4">
            <label>Enlace de drive</label>
            <input type="text" class="form-control" placeholder="drive" name="drive" value="{{old('drive',$libro->li_enlace)}}">
            @error('drive')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group col-sm-4">
            <label>Subir Imagen</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="imagen" value="{{old('imagen',$libro->li_image)}}">
              <label class="custom-file-label" for="inputGroupFile01">Eliga foto</label>
            </div>
            @error('imagen')
            <small class="text-danger">{{$message}}</small>
            @enderror
          </div>
        </div>
        <div class="form-group">
        <label for="exampleFormControlTextarea1">Descripción</label>
        <textarea class="form-control" rows="3" name="descripcion" value="">{{old('descripcion',$libro->li_descripcion)}}</textarea>
            @error('autor')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-success mt-3">Enviar Formulario</button>
        </div>
    </form>
    </div>
@stop