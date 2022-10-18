@extends('adminlte::page')

@section('title', 'Docente')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Lista de Docentes</h1>
@stop

@section('content')

<a class="btn btn-info mb-3" href="{{route('docente.create')}}">Crear nuevo docente</a>
<div class="card">
  <div class="card-body">
      <div class="table-responsive">    
      <table class="table table-striped text-center ">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Paterno</th>
              <th scope="col">Materno</th>
              <th scope="col">Sexo</th>
              <th scope="col">Celular</th>
              <th colspan="2">Acciones</th>
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
              <td width="10px"><a href="{{route('docente.edit', $item)}}" class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a></td>
              <td width="10px"><form action="{{route('docente.destroy', $item)}}" method="post"> @csrf @method('delete')<x-adminlte-button class="btn-sm" type="submit" theme="outline-danger" icon="fas fa-lg fa-trash"/></form></td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
  </div>
</div>



@stop
