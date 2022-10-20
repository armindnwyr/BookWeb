@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
    <h1 class="text-center">Lista de Docentes</h1>
@stop

@section('content')

<a class="btn btn-info mb-3" href="{{route('usuarios.create')}}">Crear Nuevo Usuario</a>
<div class="card">
    <div class="card-body">
        <table class="table table-striped text-center">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <th scope="row">{{$usuario->id}}</th>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>
                            @foreach($usuario->roles as $urol)
                                <h5><span class="badge bg-warning"> {{$urol->name}} </span></h5>
                            @endforeach

                        </td>
                        <td width="10px"><a href="" class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a></td>
                        <td width="10px"><form action="" method="post"> @csrf @method('delete') <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-lg fa-trash"></i></button></form></td>
                    </tr>
                @endforeach

              </tbody>
        </table>
    </div>
</div>
@stop
