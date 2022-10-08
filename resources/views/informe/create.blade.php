@extends('adminlte::page')

@section('title', 'Crear Informe')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Crear Informe</h1>
@stop

@section('content')
    <a href="{{route('informe.store')}}" class="btn btn-info mb-3">Regresar Lista Informe</a>
    <div class="shadow p-5 mb-5 bg-white rounded">
        <form action="{{route('informe.store')}}" method="post">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6 mt-2">
                <label>Nombre del Informe</label>
                <input type="text" class="form-control" id="inputEmail4" name="nombre" value="{{old('nombre')}}">
                  @error('nombre')
                  <small class="text-danger">{{$message}}</small>
                  @enderror 
              </div>
              <div class="form-group col-md-6 mt-2">
                <label>Codigo del Informe</label>
                <input type="text" class="form-control" id="inputEmail4" name="codigo" value="{{old('codigo')}}">
                  @error('codigo')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
              </div>
              <div class="form-group col-md-6 mt-2">
                <label>Centro de Practicas</label>
                <input type="text" class="form-control" id="inputEmail4" name="centro" value="{{old('centro')}}">
                  @error('centro')
                  <small class="text-danger">{{$message}}</small>
                  @enderror 
              </div>
              <div class="form-group col-md-6 mt-2">
                <label>Enlace del Drive</label>
                <input type="text" class="form-control" id="inputEmail4" name="enlace" value="{{old('enlace')}}">
                @error('enlace')
                <small class="text-danger">{{$message}}</small>
                @enderror 
              </div>
              <div class="form-group col-md-6">
                <label class="mb-3">Docente</label>
                <select id="inputState" class="form-control" name="docente">
                  @foreach ($docente as $item)
                  <option value="{{$item->id}}">{{$item->doce_nombre}}</option>
                  @endforeach
                </select>
                @error('docente')
                <small class="text-danger">{{$message}}</small>
                @enderror 
              </div>
              <div class="form-group col-md-6">
                <label class="mb-3">Categoria</label>
                <select id="inputState" class="form-control" name="categoria">
                  @foreach ($categoria as $item)
                  <option value="{{$item->id}}">{{$item->cate_nombre}}</option>
                  @endforeach
                </select>
                @error('categoria')
                <small class="text-danger">{{$message}}</small>
                @enderror 
              </div>
              <div class="form-group col-md-6">
                <label class="mb-3">Autor</label>
                <select id="inputState" class="form-control" name="autor">
                  @foreach ($autor as $item)
                  <option value="{{$item->id}}">{{$item->au_nombre}}</option>
                  @endforeach
                </select>
                @error('categoria')
                <small class="text-danger">{{$message}}</small>
                @enderror 
              </div>
            </div>
              <div class="form-group">
                <label>Descripción</label>
                <textarea class="form-control col-md-12" rows="3" name="descripcion" value="{{old('descripcion')}}"></textarea>
                    @error('descripcion')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-3">Enviar Formulario</button>
          </form>
    </div>
@stop