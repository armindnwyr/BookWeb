@include('layouts.admin')
@include('layouts.admin.navigation')

@include('layouts.admin.slider')

@include('layouts.admin.mileston')
{{-- Seccion de Informe --}}
<section id="services" class="text-center">
    <div class="container">
        <h1 for="">Buscar</h1>
        <form action="">
            <div class=" col-md-6 offset-md-3 container">
                <input type="search" class="shadow p-3 mb-5 form-control text-center"
                    placeholder="¿Que libro deseas buscar?" id="search">
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
        @foreach ($informe as $informe)
            <div class="row mt-2">
                <div class="col-12 card-content">
                    <div class="card titulo-informe">
                        <div class="card-body">
                            <div class="row  align-items-center">
                                <div
                                    class="col-1 col-sm-2 d-none d-sm-block d-flex aligns-items-center justify-content-center">
                                    <a href="{{ route('informe.show', $informe) }}">
                                        <img src="/img/info_portada.png" class="img-fluid" />
                                    </a>
                                </div>
                                <div class="col-md-10 parrafo-informe">
                                    <h3 class="fs-4">{{ $informe->info_nombre }}</h3>
                                    <div class="row">
                                        <p class="fs-6">{{ $informe->autor->au_nombre }}
                                            {{ $informe->autor->au_paterno }} {{ $informe->autor->au_materno }}
                                            (Universidad Nacional del Altiplano - Puno,
                                            {{ $informe->info_fecha->format('d M Y') }})
                                        </p>
                                        <p class="lh-sm" style="text-align: justify;">
                                            {{ Str::limit($informe->info_descripcion, 900) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="contenedor">
            <div class="pagination"></div>
        </div>
    </div>
</section>

{{-- Miembros de la Biblioteca --}}
@include('layouts.admin.personal')

{{-- Pie de Pagina (footer) --}}
@include('layouts.admin.footer')

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

