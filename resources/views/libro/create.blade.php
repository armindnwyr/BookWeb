@extends('adminlte::page')

@section('title', 'Crear Libro')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Registrar libro</h1>
@stop

@section('content')
    <style>
        .position {
            position: absolute;
            top: 2rem;
            right: 2rem;
        }

        .image {
            margin: 11px;
            overflow: hidden;
            width: 100%;
            height: 700px;
            background-size: cover;
            border-radius: 5px;
        }
    </style>
    <form action="{{ route('libros.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-6 position-relative mr-4 text-center">
            <figure>
                <img src="{{ asset('img/bg_banner3.jpg') }}" alt="" id="output" class="image">
            </figure>
            <div class="position">
                <label class="d-flex items-center px-4 py-2 bg-white rounded-lg">
                    <i class="fas fa-camera mr-2 mt-1"></i>
                    Actualizar imagen
                    <input name="imagen" type="file" class="d-none" accept="image/*" value="{{ old('imagen') }}"
                        onchange="loadFile(event)">
                    @error('imagen')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </label>
            </div>
        </div>
        <div class="mt-2 px-2">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label>Titulo</label>
                            <input type="text" class="form-control" placeholder="Titulo" name="titulo" id="titulo"
                                value="{{ old('titulo') }}" onkeyup="string_to_slug()">
                            @error('titulo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Slug</label>
                            <input type="text" class="form-control" name="slug" id="slug"
                                value="{{ old('slug') }}">
                            @error('slug')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Autor</label>
                            <input type="text" class="form-control" placeholder="Autor" name="autor"
                                value="{{ old('autor') }}">
                            @error('autor')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Enlace de drive</label>
                            <input type="text" class="form-control" placeholder="drive" name="drive"
                                value="{{ old('drive') }}">
                            @error('drive')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descripción</label>
                        <textarea class="form-control" rows="5" name="descripcion" value="">{{ old('descripcion') }}</textarea>
                        @error('descripcion')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="row justify-content-center">
                        <a href="{{ route('libros.index') }}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
                        <button type="submit" class="btn btn-success m-3 col-md-3">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@stop

@section('js')

    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output = document.getElementById("output").width = "300"
        };
    </script>

     <script>
        function string_to_slug() {

            titulo = document.getElementById("titulo").value;
            titulo = titulo.replace(/^\s+|\s+$/g, '');
            titulo = titulo.toLowerCase();
            var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
            var to = "aaaaeeeeiiiioooouuuunc------";
            for (var i = 0, l = from.length; i < l; i++) {
                titulo = titulo.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }
            titulo = titulo.replace(/[^a-z0-9 -]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-');

            document.getElementById('slug').value = titulo;

        }
    </script>

@stop
