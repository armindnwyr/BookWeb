@extends('adminlte::page')

@section('title', 'Crear Docente')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Crear Docente</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <form action="{{route('docente.store')}}" method="post">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-6 mt-2">
          <label>Nombre</label>
          <input type="text" class="form-control" id="inputEmail4" name="nombre" value="{{old('nombre')}}">
            @error('nombre')
            <small class="text-danger">{{$message}}</small>
            @enderror 

        </div>
        <div class="form-group col-md-6 mt-2">
          <label>Apellido Paterno</label>
          <input type="text" class="form-control" id="inputEmail4" name="paterno" value="{{old('paterno')}}">

            @error('paterno')
            <small class="text-danger">{{$message}}</small>
            @enderror 

        </div>
        <div class="form-group col-md-6 mt-2">
          <label>Apellido Materno</label>
          <input type="text" class="form-control" id="inputEmail4" name="materno" value="{{old('materno')}}">

            @error('materno')
            <small class="text-danger">{{$message}}</small>
            @enderror 
        </div>
        <div class="form-group col-md-6">
          <label class=" mb-3">Genero</label>
          <select id="inputState" class="form-control" name="genero">
            <option value="">Seleccionar</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="No Especificado">No Especificado</option>
          </select>
          @error('genero')
          <small class="text-danger">{{$message}}</small>
          @enderror 
        </div>
        <div class="form-group col-md-6 mt-2">
          <label>Numero de Celular</label>
          <input type="text" class="form-control" id="inputEmail4" name="celular" value="{{old('celular')}}">
          @error('celular')
          <small class="text-danger">{{$message}}</small>
          @enderror 
        </div>
        <div class="form-group col-md-6 justify-content-center mt-2">
          <label>Correo Electronico</label>
          <input type="text" class="form-control" id="inputEmail4" name="correo" value="{{old('correo')}}">
          @error('correo')
          <small class="text-danger">{{$message}}</small>
          @enderror 
        </div>
      </div>
      <div class="row justify-content-center">
        <a href="{{route('docente.store')}}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
        <button type="submit" class="btn btn-success m-3 col-md-3">Enviar</button>
      </div>
    </form>
  </div>
</div>
    {{-- <a href="{{route('docente.store')}}" class="btn btn-info mb-3">Regresar Lista Docente</a>
    <div class="shadow p-5 mb-5 bg-white rounded">
       
    </div> --}}
    

@stop