@extends('adminlte::page')

@section('title', 'Editar Informe')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Editar Informe</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('informes.update', $informe) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-row">
                            <div class="form-group col-md-6 mt-2">
                                <label>Nombre del Informe</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    value="{{ old('nombre', $informe->info_nombre) }}" onkeyup="string_to_slug()">
                                @error('nombre')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-2">
                              <label>Slug</label>
                              <input type="text" class="form-control" id="slug" name="slug"
                                  value="{{ old('slug', $informe->info_slug) }}" >
                              @error('slug')
                                  <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Codigo del Informe</label>
                                <input type="text" class="form-control" id="inputEmail4" name="codigo"
                                    value="{{ old('codigo', $informe->info_codigo) }}">
                                @error('codigo')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Centro de Practicas</label>
                                <input type="text" class="form-control" id="inputEmail4" name="centro"
                                    value="{{ old('centro', $informe->info_centro) }}">
                                @error('centro')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Subir Informe</label>
                                <span class="badge bg-warning"><a href="{{ $informe->info_pdf }}" class="m-2 text-white"
                                        target="_blank">Ver Informe</a></span>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="pdf" accept="file/*">
                                    <label class="custom-file-label" for="inputGroupFile01">Seleccione un pdf</label>
                                </div>
                                @error('pdf')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 mt-2">
                                <label>Fecha del Informe</label>
                                <input type="timestamp" class="form-control" name="fecha"
                                    value="{{  $informe->info_fecha }}">
                                @error('fecha')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                              <label class="mb-3">Autor</label>
                              <select class="selectpicker form-control" data-style="btn-default" data-size="5"
                                  data-live-search="true" name="autor">
                                  @foreach ($autor as $item)
                                      <option value="{{ $item->id }}"
                                          {{ old('autor', $informe->autor_id) == $item->id ? 'selected' : '' }}>
                                          {{ $item->au_nombre }} {{ $item->au_paterno }} {{ $item->au_materno }}
                                      </option>
                                  @endforeach
                              </select>
                              @error('autor')
                                  <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                            <div class="form-group col-md-12">
                                <label class="mb-3">Docente</label>
                                <select class="selectpicker form-control" data-style="btn-default" data-size="5"
                                    data-live-search="true" name="docente">
                                    @foreach ($docente as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('docente', $informe->docente_id) == $item->id ? 'selected' : ''  }}>
                                            {{ $item->doce_nombre }} {{ $item->doce_paterno }} {{ $item->doce_materno }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('docente')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                              <label class="mb-3">Categoria</label>
                              <select class="selectpicker form-control" data-style="btn-default" data-size="5"
                                  data-live-search="true" name="categoria">
                                  @foreach ($categoria as $item)
                                      <option value="{{ $item->id }}"
                                          {{ old('categoria', $informe->categoria_id) == $item->id ? 'selected' : '' }}>
                                          {{ $item->cate_nombre }}</option>
                                  @endforeach
                              </select>
                              <!--<p value=" ">{{ $informe->categoria_id }}</p>-->
                              @error('categoria')
                                  <small class="text-danger">{{ $message }}</small>
                              @enderror
                          </div>
                        </div>
                        <div class="form-group">
                            <label>Descripción</label>
                            <textarea class="form-control col-md-12" rows="3" name="descripcion">{{ old('descripcion', $informe->info_descripcion) }}</textarea>
                            @error('descripcion')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{ route('informes.index') }}" class="btn btn-info m-3 col-md-3 p-1">Regresar</a>
                            <button type="submit" class="btn btn-success m-3 col-md-3">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- <div class="shadow p-5 mb-5 bg-white rounded">
        
    </div> --}}

        </div>
    </div>
@stop

@section('js')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>

    <script>
        $(function() {
            $('select').selectpicker();
        });

        function string_to_slug() {

            titulo = document.getElementById("nombre").value;
            titulo = titulo.replace(/^\s+|\s+$/g, '');
            titulo = titulo.toLowerCase();
            var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
            var to = "aaaaeeeeiiiioooouuuunc------";
            for (var i = 0, l = from.length; i < l; i++) {
                titulo = titulo.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }
            titulo = titulo.replace(/[^a-z0-9 -]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-');

            document.getElementById('slug').value = titulo;

        }
    </script>
@stop
