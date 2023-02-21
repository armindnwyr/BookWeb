@include('layouts.admin')
    <!-- MILESTONE -->



    <section id="services" class="text-center">

        <div class="container">
            {{-- Probando buscador  --}}
            <h1 for="">Buscar</h1>
            <form action="">
                <div class=" col-md-6 offset-md-3 container">
                    <input type="search" class="shadow p-3 mb-5 form-control text-center"
                        placeholder="¿Que libro deseas buscar?" id="search">
                </div>
            </form>
            {{-- <input class="typeahead form-control" type="text" name="search" id="search"> --}}
            {{-- Probando buscador  --}}
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Conoce nuestros</h6>
                        <h1>Nuevos Ingresos</h1>
                        <p class="mx-auto">En la biblioteca especializada de la EPIS. Contamos con nuevos libros en
                            cada
                            momento. Te invitamos a conocer nuestros ultimos ingresos.</p>
                    </div>
                </div>
            </div>

            {{-- -------probando --}}
            <div class=" row row-cols-1 row-cols-md-2 row-cols-lg-3 card-content">
                @foreach ($libro as $li)
                    <div class="col">
                        <div class="card mb-4">
                            <a href="{{ route('biblioteca.show', $li) }}">
                                <img src="{{ $li->li_image }}" class="card-img-top" alt="{{ $li->li_titulo }}">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $li->li_titulo }}</h5>
                                <p class="card-text">
                                    {{ Str::limit($li->li_descripcion, 200) }}
                                </p>
                                <div class="mb-1">
                                    <a href="{{ route('biblioteca.show', $li) }}" class="btn btn-sm btn-primary">Leer más..</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="contenedor">
                <div class="pagination">
                </div>
            </div>
          

            {{-- <div class=" row g-4 card-content" aria-live="polite">
                @foreach ($libro as $li)
                    <div class="card col-12 col-lg-4 col-md-6">
                        <div class="service">
                            <a class="text-decoration-none text-dark" href="{{ route('biblioteca.show', $li) }}">
                                <img src="{{ $li->li_image }}" alt="">
                            </a>
                            <h5>{{ $li->li_titulo }}</h5>
                            <p>{{ Str::limit($li->li_descripcion, 200) }}</p>
                        </div>
                    </div>
                @endforeach
            </div> --}}
            {{-- {{ $libro->links() }} --}}
            {{-- <div class="contenedor">
                <div class="pagination"></div>
            </div> --}}
        </div>
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
    <script src="/js/paginate.js"></script>


    {{-- <script src="/vendor/jquery/jquery.js"></script> --}}
    <script src="/vendor/jquery-ui-1.13.2/jquery-ui.js"></script>
    <script>
        $('#search').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: '{{ route('biblioteca.buscar') }}',
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
                $('#search2').val(ui.item.id);
                window.location.href = 'biblioteca/' + ui.item.id;

            }
        });
    </script>
</body>

</html>
