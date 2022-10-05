@extends('adminlte::page')

@section('title', 'Docente')

@section('content_header')
    <h1>Lista de Docentes</h1>
@stop

@section('content')


<a class="btn btn-info mb-3" href="{{route('docente.create')}}">Crear nuevo docente</a>
<div class="table-responsive shadow-lg p-3 mb-5 bg-body rounded">    
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Paterno</th>
        <th scope="col">Materno</th>
        <th scope="col">Sexo</th>
        <th scope="col">Celular</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
      </tr>
    @foreach ($docentes as $item)
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->doce_nombre}}</td>
        <td>{{$item->doce_paterno}}</td>
        <td>{{$item->doce_materno}}</td>
        <td>{{$item->doce_sexo}}</td>
        <td>{{$item->doce_celular}}</td>
        <td><a href="{{route('docente.edit', $item)}}" class="btn btn-success">Editar</a></td>
        <td><form action="{{route('docente.destroy', $item)}}" method="post"> @csrf @method('delete') <button type="submit" class="btn btn-danger">Eliminar</button></form></td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>

@stop
