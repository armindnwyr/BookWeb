@extends('adminlte::page')

@section('title', 'Informe')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Lista de Informes</h1>
@stop

@section('content')
<a class="btn btn-info mb-3" href="{{route('informe.create')}}">Crear Nuevo Informe</a>
<div class="card">
  <div class="card-body">
    <div class="table-responsive">    
      <table class="table table table-striped text-center">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Codigo</th>
              <th scope="col">Centro</th>
              <th scope="col">Docente</th>
              <th scope="col">Practicas</th>
              <th scope="col">Estudiante</th>
              <th colspan="3">Acciones</th>
            </tr>
          @foreach ($informe as $item)
          </thead>
          <tbody>
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->info_nombre}}</td>
              <td>{{$item->info_codigo}}</td>
              <td>{{$item->info_centro}}</td>
              <td>{{$item->docente->doce_nombre}} {{$item->docente->doce_paterno}} {{$item->docente->doce_materno}}</td>
              <td>{{$item->categoria->cate_nombre}}</td>
              <td>{{$item->autor->au_nombre}} {{$item->autor->au_paterno}} {{$item->autor->au_materno}}</td>
              <td width="10px"><a href="{{$item->info_enlace}}" class="btn btn-outline-dark btn-sm" target="_blank"><i class="fas fa-lg fa-file"></i></a></td>
              <td width="10px"><a href="{{route('informe.edit', $item)}}" class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a></td>
              <td width="10px"><form action="{{route('informe.destroy', $item)}}" method="post"> @csrf @method('delete') <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-lg fa-trash"></i></button></form></td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
  </div>
</div>

@stop