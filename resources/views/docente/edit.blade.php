@extends('adminlte::page')

@section('title', 'Editar Docente')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Editar Docente</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
      <form action="{{route('docentes.update', $docente)}}" method="post">
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
            <div class="form-group col-md-6">
              <label class=" mb-3">Genero</label>
              <select class="form-control" name="genero">
                  <option value="Masculino"  {{ old('genero', $docente->doce_sexo) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                  <option value="Femenino" {{ old('genero', $docente->doce_sexo) == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                  <option value="No especificado" {{ old('genero', $docente->doce_sexo) == 'No Especificado' ? 'selected' : '' }}>No Especificado</option>
              </select>
              @error('genero')
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
          <div class="row justify-content-center">
            <a href="{{route('docentes.index')}}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
            <button type="submit" class="btn btn-success m-3 col-md-3">Enviar</button>
          </div>
        </form>
  </div>
</div>
    {{-- <a href="{{route('docente.store')}}" class="btn btn-info mb-3">Regresar Lista Docente</a> --}}
  
@stop