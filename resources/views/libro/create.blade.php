@extends('adminlte::page')

@section('title', 'Crear Libro')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Registrar libro</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{route('libros.store')}}" method="post" enctype="multipart/form-data">
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
                <input type="file" class="custom-file-input" name="imagen" value="{{old('imagen')}}" accept="image/*" onchange="loadFile(event)">
                <label class="custom-file-label" for="inputGroupFile01">Seleccione una Imagen</label>
                </div>
                <div class="form-group">
                </div>
                @error('imagen')
                <small class="text-danger">{{$message}}</small>
                @enderror
                </div>
            </div>
            <div class="text-center">
                <img src="\storage\imagenes\default.jpg" id="output"  class="rounded img-thumbnail img-fluid" width="300" height="300">
            </div>
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Descripción</label>
            <textarea class="form-control" rows="3" name="descripcion" value="">{{old('descripcion')}}</textarea>
                @error('descripcion')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="row justify-content-center">
                <a href="{{route('libros.index')}}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
                <button type="submit" class="btn btn-success m-3 col-md-3">Enviar</button>
            </div>
        </form>
    </div>
</div>
    {{-- 
    <div class="shadow p-5 mb-5 bg-white rounded">

    </div> --}}
@stop

@section('js')

<script>
    var loadFile = function(event){
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output = document.getElementById("output").width = "300"
    };
</script>

@stop
