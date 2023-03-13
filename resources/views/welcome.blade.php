@include('layouts.admin')
<!-- MILESTONE -->
@include('layouts.admin.navigation')

@include('layouts.admin.slider')

@include('layouts.admin.mileston')

<section id="services" class="text-center" style="backdrop-filter: yellow">

    <div class="container">

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

        <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($libro as $item)
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="img-wrapper"><img src="{{ $item->li_image }}" class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->li_titulo }}</h5>
                                <p class="card-text">{{ Str::limit($item->li_descripcion, 300) }}</p>
                                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>


@include('layouts.admin.personal')

{{-- Pie de Pagina (footer) --}}

@include('layouts.admin.footer')

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
