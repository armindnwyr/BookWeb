@include('layouts.admin')
<!-- MILESTONE -->
@include('layouts.admin.navigation')

@include('layouts.admin.slider')

@include('layouts.admin.mileston')

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
                                <a href="{{ route('biblioteca.show', $li) }}" class="btn btn-sm btn-primary">Leer
                                    más..</a>
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

