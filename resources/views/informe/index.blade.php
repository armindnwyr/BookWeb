@extends('adminlte::page')

@section('title', 'Informe')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Lista de Informes</h1>
@stop

@section('content')


<a class="btn btn-info mb-3" href="{{route('informe.create')}}">Crear Nuevo Informe</a>
<div class="table-responsive">    
<table class="table table-sm table-bordered text-center ">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Codigo</th>
        <th scope="col">Centro</th>
        <th scope="col">Descripción</th>
        <th scope="col">Drive</th>
        <th scope="col">Docente</th>
        <th scope="col">Tipo</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
      </tr>
    @foreach ($informe as $item)
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->info_nombre}}</td>
        <td>{{$item->info_codigo}}</td>
        <td>{{$item->info_centro}}</td>
        <td>{{$item->info_descripcion}}</td>
        <td>{{$item->docentes->doce_nombre}} {{$item->docentes->doce_paterno}} {{$item->docentes->doce_materno}}</td>
        <td>{{$item->categoria->cate_nombre}}</td>
        <td><a href="{{$item->info_enlace}}" class="btn btn-success" target="_blank">Drive</a></td>
        <td><a href="{{route('informe.edit', $item)}}" class="btn btn-success">Editar</a></td>
        <td><form action="{{route('informe.destroy', $item)}}" method="post"> @csrf @method('delete') <button type="submit" class="btn btn-danger">Eliminar</button></form></td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>

@stop