@extends('adminlte::page')

@section('title', 'Editar Informe')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Editar Informe</h1>
@stop

@section('content')
    <a href="{{route('informe.store')}}" class="btn btn-info mb-3">Regresar Lista Informe</a>
    <div class="shadow p-5 mb-5 bg-white rounded">
        <form action="{{route('informe.update', $informe)}}" method="post">
            @csrf
            @method('put')
            <div class="form-row">
              <div class="form-group col-md-6 mt-2">
                <label>Nombre del Informe</label>
                <input type="text" class="form-control" id="inputEmail4" name="nombre" value="{{old('nombre',$informe->info_nombre)}}">
                  @error('nombre')
                  <small class="text-danger">{{$message}}</small>
                  @enderror 
              </div>
              <div class="form-group col-md-6 mt-2">
                <label>Codigo del Informe</label>
                <input type="text" class="form-control" id="inputEmail4" name="codigo" value="{{old('codigo', $informe->info_codigo)}}">
                  @error('codigo')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
              </div>
              <div class="form-group col-md-6 mt-2">
                <label>Centro de Practicas</label>
                <input type="text" class="form-control" id="inputEmail4" name="centro" value="{{old('centro', $informe->info_centro)}}">
                  @error('centro')
                  <small class="text-danger">{{$message}}</small>
                  @enderror 
              </div>
              <div class="form-group col-md-6 mt-2">
                <label>Enlace del Drive</label>
                <input type="text" class="form-control" id="inputEmail4" name="enlace" value="{{old('enlace', $informe->info_enlace)}}">
                @error('enlace')
                <small class="text-danger">{{$message}}</small>
                @enderror 
              </div>
              <div class="form-group col-md-6">
                <label class="mb-3">Docente</label>
                <select id="inputState" class="form-control" name="docente">
                  @foreach ($docente as $item)
                  <option value="{{$item->id}}" {{ old('categoria', $informe->docente_id) == $item->id ? 'selected' : '' }}>{{$item->doce_nombre}}</option>
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
                  <option value="{{$item->id}}" {{ old('categoria', $informe->categoria_id) == $item->id ? 'selected' : '' }}>{{$item->cate_nombre}}</option>
                  @endforeach
                </select>
                <!--<p value=" ">{{$informe->categoria_id}}</p>-->
                @error('categoria')
                <small class="text-danger">{{$message}}</small>
                @enderror 
              </div>
              <div class="form-group col-md-6">
                <label class="mb-3">Autor</label>
                <select id="inputState" class="form-control" name="autor">
                  @foreach ($autor as $item)
                  <option value="{{$item->id}}" {{ old('categoria', $informe->autor_id) == $item->id ? 'selected' : '' }}>{{$item->au_nombre}}</option>
                  @endforeach
                </select>
                @error('categoria')
                <small class="text-danger">{{$message}}</small>
                @enderror 
              </div>
            </div>
              <div class="form-group">
                <label>Descripción</label>
                <textarea class="form-control col-md-12" rows="3" name="descripcion">{{old('descripcion',$informe->info_descripcion)}}</textarea>
                    @error('descripcion')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-3">Enviar Formulario</button>
          </form>
    </div>
@stop