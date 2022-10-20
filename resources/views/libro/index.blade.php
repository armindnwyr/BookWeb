@extends('adminlte::page')

@section('title', 'Libro Digital')

@section('content_header')
    <h1>Lista de libros</h1>
@stop


@section('content')
<a href="{{route('libro.create')}}" class="btn btn-info mb-3">Crear Nuevo Libro</a>
<div class="card">
  <div class="card-body">
      <table id="libro" class="table table-striped text-center">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Imagen</th>
            <th scope="col">Resumen</th>
            <th colspan="3">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($libros as $li)
          <tr>
            <th scope="row">{{$li->id}}</th>
            <td>{{$li->li_titulo}}</td>
            <td>{{$li->li_autor}}</td>
            <td><img src="{{$li->li_image}}" alt="" width="50px"></td>
            <td class="text-justify">{{$li->li_descripcion}}</td>
            <td width="10px"><a href="{{$li->li_enlace}}" class="btn btn-outline-dark btn-sm" target="_blank"><i class="fas fa-lg fa-file"></i></a></td>
            <td width="10px"><a href="{{route('libro.edit', $li)}}" class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a></td>
            <td width="10px"><form action="{{route('libro.destroy', $li)}}" method="post"> @csrf @method('delete') <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-lg fa-trash"></i></button></form></td>
          </tr>
          {{-- <img src="{{$li->li_image}}" alt=""> --}}
          @endforeach
        </tbody>
      </table>
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

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#libro').DataTable();
    });
</script>
@stop