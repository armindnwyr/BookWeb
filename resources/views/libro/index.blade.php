@extends('adminlte::page')

@section('title', 'Libro Digital')

@section('content_header')
    <h1>Lista de libros</h1>
@stop

@section('content')
<a href="{{route('libro.create')}}" class="btn btn-info mb-3">Crear Nuevo Libro</a>

<div class="container">
<div class="row">
@foreach ($libros->chunk(3) as $chunk)
<div class="card-group">
  @foreach ($chunk as $li)
  <div class="card m-2">
  <div class="col">
    <div class="card-body">
      <h5 class="card-title">{{$li->li_titulo}}</h5>
      <p class="card-text">{{$li->li_descripcion}}</p>
      <div class="df aling-items-start">
          <a href="{{$li->li_enlace}}" class="btn btn-outline-dark btn-sm" target="_blank"><i class="fas fa-lg fa-file"></i></a></td>
          <a href="{{route('libro.edit', $li)}}" class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a></td>
          <form action="{{route('libro.destroy', $li)}}" method="post"> @csrf @method('delete') <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-lg fa-trash"></i></button></form>
      </div>    
    </div>
  </div>
</div>
@endforeach
</div>
@endforeach
</div>
</div>

@stop

