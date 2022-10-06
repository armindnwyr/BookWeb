@extends('adminlte::page')

@section('title', 'Libro Digital')

@section('content_header')
    <h1>Lista de libros</h1>
@stop

@section('content')
<a href="{{route('libro.create')}}" class="btn btn-info mb-3">Crear Nuevo Libro</a>
@foreach ($libros as $item)
<div class="row">
    <div class="col-sm-12">
      <div class="card">
        <!--<img class="card-img-top" src="{{$item->li_imagen}}" alt="Card image cap">-->
        <div class="card-body">
          <h5 class="card-title font-weight-bold">{{$item->li_titulo}}</h5>
          <p class="card-text text-justify">{{$item->li_descripcion}}</p>
          <a href="{{$item->li_enlace}}" class="btn btn-primary" target="_blank">Enlace del libro</a>
          <a href="{{route('libro.edit', $item)}}" class="btn btn-success">Editar</a>
          <form action="{{route('libro.destroy', $item)}}" method="post"> @csrf @method('delete') <button type="submit" class="btn btn-danger mt-2">Eliminar</button></form>        
        </div>
      </div>
    </div>
</div>

@endforeach


@stop

