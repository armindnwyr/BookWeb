@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
    <h1 class="text-center">Editar Roles</h1>
@stop

@section('content')

<div class="row justify-content-center">
    <div class="card" style="width: 50rem;">
        <div class="card-body">
            <form>
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-7">
                    <label for="">Asignar Roles</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input">
                          </div>
                        </div>
                        <input type="text" class="form-control" readonly placeholder="Editar Docente">
                      </div>
    
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <input type="checkbox">
                          </div>
                        </div>
                        <input type="text" class="form-control" readonly placeholder="Crear Docente">
                      </div>
    
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <input type="checkbox">
                          </div>
                        </div>
                        <input type="text" class="form-control" readonly placeholder="Eliminar Docente">
                      </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <a href="" class="btn btn-info m-3">Regresar</a>
                <button class="btn btn-success m-3">Enviar</button>
            </div>
            </form>
        </div>
    </div>
</div>

@stop