@extends('adminlte::page')

@section('title', 'Editar Docente')

@section('content_header')
    <h1>Editar Docente</h1>
@stop

@section('content')
    <a href="{{route('docente.store')}}" class="btn btn-info">Regresar Lista Docente</a>
    
        <form action="{{route('docente.update', $docente)}}" method="post">
            @csrf
            @method('put')
            <div class="form-row">
              <div class="form-group col-md-6 mt-2">
                <label>Nombre</label>
                <input type="text" class="form-control" id="inputEmail4" name="nombre" value="{{old('nombre',$docente->doce_nombre)}}">
                  @error('nombre')
                  <small class="text-danger">{{$message}}</small>
                  @enderror 

              </div>
              <div class="form-group col-md-6 mt-2">
                <label>Apellido Paterno</label>
                <input type="text" class="form-control" id="inputEmail4" name="paterno" value="{{old('paterno', $docente->doce_paterno)}}">

                  @error('paterno')
                  <small class="text-danger">{{$message}}</small>
                  @enderror 

              </div>
              <div class="form-group col-md-6 mt-2">
                <label>Apellido Materno</label>
                <input type="text" class="form-control" id="inputEmail4" name="materno" value="{{old('materno', $docente->doce_materno)}}">

                  @error('materno')
                  <small class="text-danger">{{$message}}</small>
                  @enderror 
              </div>
              <div class="form-group col-md-6 mt-2">
                <label>Numero de Celular</label>
                <input type="text" class="form-control" id="inputEmail4" name="celular" value="{{old('celular', $docente->doce_celular)}}">
                @error('celular')
                <small class="text-danger">{{$message}}</small>
                @enderror 
              </div>
              <div class="form-group col-md-6 justify-content-center mt-2">
                <label>Correo Electronico</label>
                <input type="text" class="form-control" id="inputEmail4" name="correo" value="{{old('correo', $docente->doce_correo)}}">
                @error('correo')
                <small class="text-danger">{{$message}}</small>
                @enderror 
              </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Enviar Formulario</button>
          </form>

@stop