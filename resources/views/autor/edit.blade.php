@extends('adminlte::page')

@section('title', 'Editar Estudiante')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Editar Estudiante</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <form action="{{route('autor.update', $autor)}}" method="post">
      @csrf
      @method('put')
      <div class="form-row">
        <div class="form-group col-md-6 mt-2">
          <label>Nombre</label>
          <input type="text" class="form-control" id="inputEmail4" name="nombre" value="{{old('nombre',$autor->au_nombre)}}">
            @error('nombre')
            <small class="text-danger">{{$message}}</small>
            @enderror 

        </div>
        <div class="form-group col-md-6 mt-2">
          <label>Apellido Paterno</label>
          <input type="text" class="form-control" id="inputEmail4" name="paterno" value="{{old('paterno', $autor->au_paterno)}}">

            @error('paterno')
            <small class="text-danger">{{$message}}</small>
            @enderror 

        </div>
        <div class="form-group col-md-6 mt-2">
          <label>Apellido Materno</label>
          <input type="text" class="form-control" id="inputEmail4" name="materno" value="{{old('materno', $autor->au_materno)}}">
            @error('materno')
            <small class="text-danger">{{$message}}</small>
            @enderror 
        </div>
        <div class="form-group col-md-6 mt-2">
          <label>Codigo de Matricula</label>
          <input type="text" class="form-control" id="inputEmail4" name="codigo" value="{{old('codigo', $autor->au_codigo)}}">
            @error('codigo')
            <small class="text-danger">{{$message}}</small>
            @enderror 
        </div>
        <div class="form-group col-md-6">
          <label class=" mb-3">Genero</label>
          <select class="form-control" name="sexo">
              <option value="Masculino"  {{ old('genero', $autor->au_sexo) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
              <option value="Femenino" {{ old('genero', $autor->au_sexo) == 'Femenino' ? 'selected' : '' }}>Femenino</option>
              <option value="No especificado" {{ old('genero', $autor->au_sexo) == 'No Especificado' ? 'selected' : '' }}>No Especificado</option>
          </select>
          @error('sexo')
          <small class="text-danger">{{$message}}</small>
          @enderror 
        </div>
        <div class="form-group col-md-6 mt-2">
          <label>Numero de Celular</label>
          <input type="text" class="form-control" id="inputEmail4" name="celular" value="{{old('celular', $autor->au_celular)}}">
          @error('celular')
          <small class="text-danger">{{$message}}</small>
          @enderror 
        </div>
        <div class="form-group col-md-6 justify-content-center mt-2">
          <label>Correo Electronico</label>
          <input type="text" class="form-control" id="inputEmail4" name="correo" value="{{old('correo', $autor->au_correo)}}">
          @error('correo')
          <small class="text-danger">{{$message}}</small>
          @enderror 
        </div>
      </div>
      <div class="row justify-content-center">
        <a href="{{route('autor.store')}}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
        <button type="submit" class="btn btn-success m-3 col-md-3">Enviar</button>
      </div>
    </form>
  </div>
</div>
    {{-- <a href="{{route('autor.store')}}" class="btn btn-info mb-3">Regresar Lista Estudiantes</a>
    <div class="shadow p-5 mb-5 bg-white rounded">
       
    </div> --}}

@stop