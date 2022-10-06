@extends('adminlte::page')

@section('title', 'Autor')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Lista de Estudiantes</h1>
@stop

@section('content')
<a class="btn btn-info mb-3" href="{{route('autor.create')}}">Crear Nuevo Estudiante</a>

<div class="table-responsive">    
    <table class="table table-sm text-center">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Paterno</th>
            <th scope="col">Materno</th>
            <th scope="col">Codigo</th>
            <th scope="col">Sexo</th>
            <th scope="col">Correo</th>
            <th scope="col">Celular</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
            </tr>
        @foreach ($autores as $item)
        </thead>
        <tbody>
            <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->au_nombre}}</td>
            <td>{{$item->au_paterno}}</td>
            <td>{{$item->au_materno}}</td>
            <td>{{$item->au_codigo}}</td>
            <td>{{$item->au_sexo}}</td>
            <td>{{$item->au_correo}}</td>
            <td>{{$item->au_celular}}</td>
            <td><a href="{{route('autor.edit', $item)}}" class="btn btn-success">Editar</a></td>
            <td><form action="{{route('autor.destroy', $item)}}" method="post"> @csrf @method('delete') <button type="submit" class="btn btn-danger">Eliminar</button></form></td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@stop

