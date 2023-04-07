@extends('adminlte::page')

@section('title', 'Crear Escritor')

@section('content_header')
    <h1 class="text-center">Editar Escritor</h1>
@stop

@section('content')
      <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
        <div class="card">
            <div class="card-body">
              <form action="{{route('escritor.update', $escritor)}}" method="post">
                @csrf
                @method('put')
                <div class="form-row">
                    <div class="form-group col-md-6 mt-2">
                      <label>Nombres</label>
                      <input type="text" class="form-control" name="nombres" value="{{old('nombres', $escritor->nombres)}}">
                        @error('nombres')
                        <small class="text-danger">{{$message}}</small>
                        @enderror 
            
                    </div>
                    <div class="form-group col-md-6 mt-2">
                      <label>Apellidos</label>
                      <input type="text" class="form-control" name="apellidos" value="{{old('apellidos', $escritor->apellidos)}}">
            
                        @error('apellidos')
                        <small class="text-danger">{{$message}}</small>
                        @enderror 
                    </div>
                    <div class="form-group col-md-12">
                        <label for="exampleFormControlTextarea1">Bibliografía</label>
                        <textarea class="form-control" rows="5" name="bibliografia">{{ old('bibliografia' ,$escritor->bibliografia) }}</textarea>
                        @error('bibliografia')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                  </div>
                <div class="row justify-content-center">
                  <a href="{{route('escritor.index')}}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
                  <button type="submit" class="btn btn-success m-3 col-md-3">Enviar</button>
                </div>
                </form>
            </div>
        </div>
      </div>
    </div>
@stop

