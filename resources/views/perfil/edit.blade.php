@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
    <h1 class="text-center">Configurar Perfil</h1>
@stop

@section('content')
<div class="row">
<div class="col-md-6 offset-md-3 mt-3">
<div class="card">
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-row">
            {{-- <div class="row justify-content-center">
                <div class="col-md-6">
                    <label>Seleccionar Foto</label>
                    <img src="\storage\imagenes\default.jpg" id="output"  class="rounded img-thumbnail img-fluid" width="300" height="300">
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" name="imagen" accept="image/*" onchange="loadFile(event)">
                    <label class="custom-file-label" for="inputGroupFile01">Seleccione una Imagen</label>
                    </div>
                </div>
                </div> --}}
            <div class="col-md-6">
                <label for="">Nombre</label>
                <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
            </div>
            <div class="col-md-6">
                <label for="">Correo</label>
                <input type="text" class="form-control" name="email" value="{{Auth::user()->email}}">
            </div>

            <div class="col-md-6">
                <label for="">Contraseña</label>
                <input type="text" class="form-control" name="password">
            </div>
            <div class="col-md-6">
                <label for="">Confirmar Contraseña</label>
                <input type="text" class="form-control" name="contrasena_confirmar">
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <a href="{{route('home')}}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
            <button type="submit" class="btn btn-success m-3 col-md-3">Enviar</button>
        </div>
        </form>
    </div>
</div>
    </div>
</div>
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
