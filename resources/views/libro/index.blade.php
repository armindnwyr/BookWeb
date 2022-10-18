@extends('adminlte::page')

@section('title', 'Libro Digital')

@section('content_header')
    <h1>Lista de libros</h1>
@stop

@section('content')
<a href="{{route('libro.create')}}" class="btn btn-info mb-3">Crear Nuevo Libro</a>


@foreach ($libros->chunk(3) as $chunk)
<div class="card-group">
  @foreach ($chunk as $li)
  <div class="card m-2">
    <div class="card-body">
      <h5 class="card-title">{{$li->li_titulo}}</h5>
      <p class="card-text">{{$li->li_descripcion}}</p>
      
    </div>
  </div>
  @endforeach
</div>
@endforeach


@stop

