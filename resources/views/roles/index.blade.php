@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Gestión de Roles</h1>
@stop

@section('content')
@can('roles.create')
<a href="{{route('roles.create')}}" class="btn btn-info mb-3">Registar</a>
@endcan
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark text-center">
                    <tr>
                        <th>Nombre</th>
                        <th>Permiso</th>
                        @can('roles.edit','roles.destroy')
                        <th>Acciones</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $rol)
                    @if ($rol->id != 1)
                    <tr>
                        <td>{{$rol->name}}</td>
                        <td>
                            @foreach($rol->permissions as $permiso)
                            <span class="badge badge-pill badge-dark">{{$permiso->name}}</span>
                            @endforeach
                        </td>
                        @can('roles.edit','roles.destroy')
                        <td width="140px">
                            <a href="{{route('roles.edit',$rol->id)}}" class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a>
                            <form action="{{route('roles.destroy',$rol->id)}}" method="post" class="d-inline"> @csrf @method('delete') <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-lg fa-trash"></i></button></form>
                        </td>
                        @endcan
                    </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
