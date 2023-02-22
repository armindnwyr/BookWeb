@include('layouts.admin')
@include('layouts.admin.navigation')

<section id="services" class="text-center">

    <div class="container">
        <h3>{{ $informe->info_nombre }}</h3>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img alt="No Thumbnail [100%x160]" class="img-thumbnail"
                                            data-src="holder.js/100%x160/text:No Thumbnail"
                                            style=" width: 100%; display: block;" src="/img/info_portada.png"
                                            data-holder-rendered="true">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <p class="fs-6" style="text-align: justify;">
                                    {{ Str::limit($informe->info_descripcion, 1000) }}
                                </p>
                                <div class="col-md-12 mt-4">
                                    <h4>Autor</h4>
                                    <p class="text-dark fs-6">{{ $informe->autor->au_nombre }}
                                        {{ $informe->autor->au_paterno }} {{ $informe->autor->au_materno }}</p>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <h4>Fecha de presentación</h4>
                                    <p class="text-dark fs-6">{{ $informe->info_fecha->format('d M Y') }}</p>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <h4>Visualizar documento</h4>
                                    <a class="text-decoration-none text-dark h6" href="{{ $informe->info_pdf }}"
                                        target="_blink">{{ $informe->info_nombre }}.pdf - UNAP</a>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <h4>Practicas pre-profesionales</h4>
                                    <p class="text-dark fs-6">{{ $informe->categoria->cate_nombre }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.admin.footer')

