<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="Cristian Condori Guzman">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="BookWeb - Biblioteca Especializada de Ingeneria de Sistemas">
    <meta name="keywords" content="Libros, Informe, Sistemas, Biblioteca">
    <link rel="icon" type="image/x-icon" href="/img/logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="{{ asset('vendor/jquery-ui-1.13.2/jquery-ui.min.css') }}">

    <title>Biblioteca Especializada - EPIS</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

    <!-- BARRA DE NAVEGACION -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">Book<span class="dot">Web</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            @if (Route::has('login'))
                <div class="collapse navbar-collapse" id="navbarNav">
                    <a class="navbar-brand" href="#">
                    </a>
                    <ul class="navbar-nav d-flex justify-content-center align-items-center">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('biblioteca*','/') ? 'active' : '' }}" aria-current="page"
                                href="/">Libros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('informe*') ? 'active' : '' }}" href="/informe"
                                :active="request() - > routeIs('binforme.index')">Informe de Practicas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://repositorio.unap.edu.pe/" target="_blink">Repositorio de
                                Tesis</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="home">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="{{ route('login') }}"
                                    target="_blink">Login</a>
                            </li>
                        @endauth

                    </ul>
                </div>
            @endif
        </div>
    </nav>

    <!-- SLIDER -->
    <div class="owl-carousel owl-theme hero-slider">
        <div class="slide slide1">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">
                        <h6 class="text-white text-uppercase">Bienvenido a</h6>
                        <h1 class="display-3 my-4">Biblioteca <br> Especializada</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">
                        <h6 class="text-white text-uppercase">Ven y visita la Biblioteca Especializada</h6>
                        <h1 class="display-3 my-4">Nuevos Ingresos</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="milestone">
        <div class="container">
            <div class="row text-center justify-content-center gy-4">
                {{-- <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">90</h1>
                    <p class="mb-0">Tesis de Pregrado</p>
                </div> --}}
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">45</h1>
                    <p class="mb-0">Informes de Practicas</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">190</h1>
                    <p class="mb-0">Libros español</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">380</h1>
                    <p class="mb-0">Libros Ingles</p>
                </div>
            </div>
        </div>
    </section>