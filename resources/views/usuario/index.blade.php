@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
    <h1 class="text-center">Lista de Docentes</h1>
@stop

@section('content')
<a href="" class="btn btn-info mb-3">Crear Nuevo Usuario</a>
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
                <tr>
                  <th scope="row">1</th>
                  <td>Administrador</td>
                  <td>btzarmin@gmail.com</td>
                  <td class="font-weight-bold text-white bg-warning h-25 d-inline-block rounded">administrador</td>
                  <td width="10px"><a href="" class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a></td>
                  <td width="10px"><form action="" method="post"> @csrf @method('delete') <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-lg fa-trash"></i></button></form></td>
                </tr>
              </tbody>
        </table>
    </div>
</div>
@stop