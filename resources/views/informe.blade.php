@include('layouts.admin')

    {{-- Seccion de Informe --}}
    <section id="services" class="text-center">
        <div class="container">
            <h1 for="">Buscar</h1>
            <form action="">
            <div class=" col-md-6 offset-md-3 container">
                <input type="search" class="shadow p-3 mb-5 form-control text-center" placeholder="¿Que libro deseas buscar?" id="search">
            </div>
            </form>
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Conoce nuestros</h6>
                        <h1>Nuevos Ingresos de Informes</h1>
                        <p class="mx-auto">En la biblioteca especializada de la EPIS. Contamos con Informes de Practicas
                            Pre-Profesionales. Te invitamos a conocer nuestros ultimos ingresos.</p>
                    </div>
                </div>
            </div>

            {{-- Card de Informe --}}
            <div class="container">
                @foreach ($informe as $informe)
                <div class="row mt-4">
                  <div class="col-12">
                    <div class="card titulo-informe">
                    <a href="{{route('informe.show', $informe)}}">
                      <div class="card-body">
                        <div class="row  align-items-center">
                          <div class="col-1 col-sm-2 d-none d-sm-block d-flex aligns-items-center justify-content-center">
                            <img src="/img/info_portada.png"
                                 class="img-fluid" />
                          </div>
                          <div class="col-md-10 parrafo-informe">
                            <h3 class="fs-4">{{$informe->info_nombre}}</h3>
                            <div class="row">
                              <p class="fs-6">{{$informe->autor->au_nombre}} {{$informe->autor->au_paterno}} {{$informe->autor->au_materno}} (Universidad Nacional del Altiplano - Puno, {{$informe->info_fecha}})</p>
                              <p class="lh-sm" style="text-align: justify;">
                                {{Str::limit($informe->info_descripcion, 900)}}
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    </div>
                  </div>
                </div>
                @endforeach
              </div> 
          
            {{-- <div class="row g-4" id="paginated-list" aria-live="polite">
                @foreach ($libro as $li)
                    <div class="col-12 col-lg-4 col-md-6 g-4">
                        <div class="service">
                            <img src="{{ $li->li_image }}" alt="">
                            <h5>{{ $li->li_titulo }}</h5>
                            <p>{{ substr($li->li_descripcion, 0, 320) }} ...</p>
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
            </div> --}}
        </div>
        {{-- <div class="row">
            <div class="col-md-12">
            {{$libro->links('pagination::bootstrap-4') }}
            </div>
        </div>       --}}

    </section>

    {{-- Miembros de la Biblioteca --}}
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
    <script src="/vendor/jquery-ui-1.13.2/jquery-ui.js"></script>
    <script>
        $('#search').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: '{{ route('informe.search') }}',
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
                window.location.href = 'informe/' + ui.item.id;

            }
        });
    </script>
</body>

</html>
