@extends('adminlte::page')

@section('title', 'Libro ' . $libro->li_titulo)

@section('content_header')
    
@stop

<link rel="stylesheet" href="/css/style2.css">

@section('content')
    {{-- <div class="container">
    <div class="row mt-2">
    <div class="col-md-12 offset-md-12 mt-4">
        <div class="card">
        <div class="card-body">
            <div class="row  align-items-center">
            <div class="">
                <img src="{{$libro->li_image}}" class="img-fluid" width="400" height="600">
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
</div> --}}
<div class="container py-5">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center font-weight-bold text-uppercase">{{ $libro->li_titulo }}</h1>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 pad">
                    <div class="asd">
                        <img src="{{$libro->li_image}}">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card-description">
                        <p>{{$libro->li_descripcion}}</p>
                    </div>
                    <div class="">
                        <li>Titulo: {{$libro->li_titulo}}</li>
                        <li>Autor: {{$libro->li_autor}}</li>
                        <li>Enlce: <a href="{{$libro->li_enlace}}" >Visulizar</a></li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
