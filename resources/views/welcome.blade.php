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

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    {{-- Titulo de la Pagina --}}
    <title>Biblioteca Especializada - EPIS</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

    <!-- BARRA DE NAVEGACION -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Book<span class="dot">Web</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <a class="navbar-brand" href="#">
                </a>
                <ul class="navbar-nav d-flex justify-content-center align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Libros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/informe">Informe de Practicas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://repositorio.unap.edu.pe/" target="_blink">Repositorio de
                            Tesis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    @can('home')
                        <li class="nav-item">
                            <a class="nav-link" href="home">Dashboard</a>
                        </li>
                    @endcan
                </ul>
            </div>
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
    <!-- MILESTONE -->
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

    <section id="services" class="text-center">
        <div class="container">
            {{-- Probando buscador  --}}
            <input class="typeahead form-control" type="text" name="search" id="search" >
            {{-- Probando buscador  --}}
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Conoce nuestros</h6>
                        <h1>Nuevos Ingresos</h1>
                        <p class="mx-auto">En la biblioteca especializada de la EPIS. Contamos con nuevos libros en cada
                            momento. Te invitamos a conocer nuestros ultimos ingresos.</p>
                    </div>
                </div>
            </div>

            <div class="row g-4" id="paginated-list" aria-live="polite">
                @foreach ($libro as $li)
                    <div class="col-12 col-lg-4 col-md-6 g-4">
                        <div class="service">
                            <a class="text-decoration-none text-dark" href="{{ route('biblioteca.show', $li) }}">
                                <img src="{{ $li->li_image }}" alt="">
                            </a>

                            <h5>{{ $li->li_titulo }}</h5>
                            <p>{{ Str::limit($li->li_descripcion, 305) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="pagination-container"style="position: relative; width: auto;">
                        <button class="pagination-button" id="prev-button" aria-label="Previous page"
                            title="Previous page">&lt;</button>
                        <div id="pagination-numbers" style="margin: 0"></div>
                        <button class="pagination-button" id="next-button" aria-label="Next page"
                            title="Next page">&gt;</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-md-12">
            {{$libro->links('pagination::bootstrap-4') }}
            </div>
        </div>       --}}

    </section>


    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Nuestro Equipo</h6>
                        <h1>Personal de la Biblioteca</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4 col-md-4">
                    <div class="team-member">
                        <div class="image">
                            <img class="rounded-circle personal-img" src="/img/personal1.svg" alt="Foto de Personal">
                        </div>
                        <h5>Marvin McKinney</h5>
                        <p>Marketing Coordinator</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-4">
                    <div class="team-member">
                        <div class="image">
                            <img class="rounded-circle personal-img" src="/img/personal2.svg" alt="Foto de Personal">
                        </div>
                        <h5>Marvin McKinney</h5>
                        <p>Marketing Coordinator</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-4">
                    <div class="team-member">
                        <div class="image">
                            <img class="rounded-circle personal-img" src="/img/personal1.svg" alt="Foto de Personal">
                        </div>
                        <h5>Marvin McKinney</h5>
                        <p>Marketing Coordinator</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Pie de Pagina (footer) --}}
    <footer>
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h4 class="navbar-brand">BookWeb<span class="dot">.</span></h4>
                        <p>Biblioteca Especializada de la Escuela Profesional del Ingenieria de Sistemas </p>
                        <div class="iconos-redes-sociales d-flex flex-wrap align-items-center justify-content-center">
                            <a href="https://www.facebook.com/biblioteca.especializada.epis23" target="_blank"
                                rel="noopener noreferrer">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="https://www.sistemas.edu.pe/" target="_blank" rel="noopener noreferrer">
                                <i class="bx bxl-chrome"></i>
                            </a>
                            <a href="mailto:btzarmin@gmai.com" target="_blank" rel="noopener noreferrer">
                                <i class="bx bxl-gmail"></i>
                            </a>
                        </div>
                        <div class="derechos-de-autor">Creado por BookWeb (2022) &#169;</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/page.js"></script>


    {{-- <script src="/vendor/jquery/jquery.js"></script> --}}
    <script src="/vendor/jquery-ui-1.13.2/jquery-ui.js"></script>
    <script>
        $('#search').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: '{{ route('biblioteca.search') }}',
                    dataType: 'json',
                    data: {
                        term: request.term
                    },

                    success: function(data) {
                        response(data);
                    }

                });
            },
            select: function(event, ui) {
                // $('#search').val(ui.item.id);
                window.location.href = 'biblioteca/' + ui.item.id;
                
            }
        });
    </script>
</body>

</html>
