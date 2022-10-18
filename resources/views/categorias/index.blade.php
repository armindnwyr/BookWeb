@extends('adminlte::page')

@section('title', 'Practicas')

@section('content_header')
    <h1>Lista de Tipo de Practica</h1>
@stop

@section('content')
<a class="btn btn-info mb-3" href="{{route('categorias.create')}}">Crear Nueva Categoria</a>
<div class="card">
  <div class="card-body">
    <table class="table table-striped text-center">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th colspan="2">Acciones</th>
        </tr>
      @foreach ($categorias as $item)
      </thead>
      <tbody>
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->cate_nombre}}</td>
          <td width="10px"><a href="{{route('categorias.edit', $item)}}" class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a></td>
          <td width="10px"><form action="{{route('categorias.destroy', $item)}}" method="post"> @csrf @method('delete') <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-lg fa-trash"></i></button></form></td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
</div>
@stop

