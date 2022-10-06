@extends('adminlte::page')

@section('title', 'Practicas')

@section('content_header')
    <h1>Lista de Tipo de Practica</h1>
@stop

@section('content')
<a class="btn btn-info mb-3" href="{{route('categoria.create')}}">Crear Nueva Categoria</a>
<table class="table table-sm text-center">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
      </tr>
    @foreach ($categorias as $item)
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->cate_nombre}}</td>
        <td><a href="{{route('categoria.edit', $item)}}" class="btn btn-success">Editar</a></td>
        <td><form action="{{route('categoria.destroy', $item)}}" method="post"> @csrf @method('delete') <button type="submit" class="btn btn-danger">Eliminar</button></form></td>
      </tr>
    </tbody>
    @endforeach
  </table>
@stop

