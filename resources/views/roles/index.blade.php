@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
    <h1 class="text-center">Roles Asignados</h1>
@stop

@section('content')
<a href="{{route('roles.create')}}" class="btn btn-info mb-3">Crear Nuevo Rol</a>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Permiso</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($roles as $rol)
                    <tr>
                        <td>{{$rol->name}}</td>
                        <td>
                            @foreach($rol->permissions as $permiso)
                            <span class="bg-warning rounded font-weight-bold text-dark">{{$permiso->name}}</span>
                            @endforeach
                        </td>
                        <td>
                            <a href="{{route('roles.edit',$rol->id)}}" class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a>
                            <form action="{{route('roles.destroy',$rol->id)}}" method="post" class="d-inline"> @csrf @method('delete') <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-lg fa-trash"></i></button></form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
