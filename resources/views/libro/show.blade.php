@extends('adminlte::page')

@section('title', 'Libro '. $libro->li_titulo)

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Libro vista - {{$libro->li_titulo}}</h1>
@stop

@section('content')
<div class="container">
    <div class="row mt-2">
    <div class="col-md-12 offset-md-12 mt-4">
        <div class="card">
        <div class="card-body">
            <div class="row  align-items-center">
            <div class="col-1 col-sm-2 d-none d-sm-block d-flex aligns-items-center justify-content-center">
                <img src="{{$libro->li_image}}"
                    class="img-fluid" />
            </div>
            <div class="col-md-10">
                <h5 style="text-align: justify;">{{$libro->li_titulo}}</h5>
                <div class="row">
                <p class="fs-6">{{$libro->li_autor}} (Universidad Nacional del Altiplano - Puno, {{$libro->updated_at}})</p>
                <p class="lh-sm" style="text-align: justify;">
                    {{$libro->li_descripcion}}
                </p>
                </div>
            </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <a href="{{route('libros.index')}}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
        </div>
        </div>
    </div>
    </div>
</div>

@stop