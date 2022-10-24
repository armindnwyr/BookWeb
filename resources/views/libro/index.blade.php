@extends('adminlte::page')

@section('title', 'Libro Digital')

@section('content_header')
    <h1>Lista de libros</h1>
@stop

{{-- @section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@stop --}}

@section('content')

<a href="{{route('libro.create')}}" class="btn btn-info mb-3">Crear Nuevo Libro</a>
<div class="card">
  <div class="card-body">
<div class="table-responsive">
    <table id="tlibro" class="table table table-striped">
        <thead class="thead-dark">
          <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Imagen</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($libros as $li)
          <tr>
            <td>{{$li->li_titulo}}</td>
            <td>{{$li->li_autor}}</td>
            <td><img src="{{$li->li_image}}" alt="" width="50px"></td>
            <td>
              <a href="{{$li->li_enlace}}" class="btn btn-outline-dark btn-sm" target="_blank"><i class="fas fa-lg fa-file"></i></a>
              <a href="{{route('libro.edit', $li)}}" class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a>
              <form action="{{route('libro.destroy', $li)}}" method="post"  style="display: inline"> @csrf @method('delete')<button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-lg fa-trash"></i></button></form>
            </td>
          </tr>
          {{-- <img src="{{$li->li_image}}" alt=""> --}}
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop

{{-- <div class="container">
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
</div> --}}

@section('js')
{{-- 
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> --}}
<script>
$(document).ready(function () {
    $('#tlibro').DataTable();
});
</script>
    
@stop