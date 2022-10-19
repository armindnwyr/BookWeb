@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
    <h1 class="text-center">Lista de Docentes</h1>
@stop

@section('content')
<a href="" class="btn btn-info mb-3">Regresar</a>
<div class="card">
    <div class="card-body">
        <form>
        <div class="form-row">
            <div class="col-md-6">
                <label for="">Nombre</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="">Correo</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="">Contraseña</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="">Confirmar Contraseña</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="inputState">Rol</label>
                <select id="inputState" class="form-control">
                  <option>Selecione</option>
                  <option>Administrador</option>
                  <option>Asistente</option>
                </select>
              </div>
        </div>
        <button class="btn btn-info">Enviar</button>
        </form>
    </div>
</div>
@stop