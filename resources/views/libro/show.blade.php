@extends('adminlte::page')

@section('title', 'Libro ' . $libro->li_titulo)

@section('content_header')
<a href="{{route('libros.index')}}" class="btn btn-info mb-3">Regresar</a>

@stop


@section('content')
<div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 ">
          <h4 class="text-uppercase">
            {{ $libro->li_titulo }}
          </h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            
          <div class="col-sm-5">
            <div class="row">
              <div class="col-md-12">
                  <img alt="No Thumbnail [100%x160]" class="img-thumbnail" data-src="holder.js/100%x160/text:No Thumbnail" style=" width: 100%; display: block;" src="{{$libro->li_image}}" data-holder-rendered="true">
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-12">
                <p class="text-justify">
                  {{$libro->li_descripcion}}
                </p>
              </div>
              <div class="col-md-12 mt-4 align-self-center">
                  <ul class="list-none">
                    <li class="mt-2"><span class="font-weight-bold mt-2">Título original</span> {{$libro->li_titulo}}</li>
                    {{-- <li class="mt-2"><span class="font-weight-bold">Rating</span> 8.03</li> --}}
                    <li class="mt-2"><span class="font-weight-bold">Autor</span> {{$libro->li_autor}}</li>
                    <li class="mt-2"><span class="font-weight-bold">Enlace</span> <a href="{{$libro->li_enlace}}" >Visulizar</a></li>
                    {{-- <li class="mt-2"><span class="font-weight-bold">Géneros</span> 2023-01-05</li>
                    <li class="mt-2"><span class="font-weight-bold">Mas detalles en</span> 2023-01-05</li> --}}
                  </ul>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>

    </div>
</div>

{{-- <div class="container py-5">
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
</div> --}}

@stop
