@extends('adminlte::page')

@section('title', 'Autor')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Lista de Estudiantes</h1>
@stop

@section('content')

<a class="btn btn-info mb-3" href="{{route('autor.create')}}">Crear Nuevo Estudiante</a>
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
                    <th scope="col">Codigo</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Celular</th>
                    <th colspan="2">Acciones</th>
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
                    <td width="10px"><a href="{{route('autor.edit', $item)}}" class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></td>
                    <td width="10px"><form action="{{route('autor.destroy', $item)}}" method="post"> @csrf @method('delete') <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-lg fa-trash"></i></button></form></td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@stop

