@include('layouts.admin')
@include('layouts.admin.navigation')
    <section id="services" class="text-center">
            <div class="container">
                <h3>{{$libro->li_titulo}}</h3>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="row">
                                
                              <div class="col-sm-3">
                                <div class="row">
                                  <div class="col-md-12">
                                      <img alt="No Thumbnail [100%x160]" class="img-thumbnail" data-src="holder.js/100%x160/text:No Thumbnail" style=" width: 100%; display: block;" src="{{$libro->li_image}}" data-holder-rendered="true">
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-9">
                                <p class="fs-6" style="text-align: justify;">
                                    {{Str::limit($libro->li_descripcion, 1000)}}
                                </p>
                                <div class="col-md-12 mt-4">
                                    <h4>Autor</h4>
                                    <a class="text-decoration-none" href=""><i aria-hidden="true" class="glyphicon  glyphicon-file"></i>{{$libro->li_autor}}</a>
                                </div>
                                {{-- <div class="col-md-12 mt-4">
                                    <h4>Fecha de publicación</h4>
                                    <a href="" class="text-decoration-none"><i aria-hidden="true" class="glyphicon  glyphicon-file"></i>{{$informe->info_fecha}}</a>
                                </div> --}}
                                <div class="col-md-12 mt-4">
                                    <h4>Material Digital</h4>
                                    <a class="text-decoration-none" href="{{$libro->li_enlace}}" target="_blink"><i aria-hidden="true" class="glyphicon  glyphicon-file"></i>{{$libro->li_titulo}} -  UNAP - EPIS</a>
                                </div>
                                {{-- <div class="col-md-12 mt-4">
                                    <h4>Practicas pre-profesionales</h4>
                                    <a class="text-decoration-none" href=""><i aria-hidden="true" class="glyphicon  glyphicon-file"></i>{{$informe->categoria->cate_nombre}}</a>
                                </div> --}}
                              </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
              </div>
    </section>

    {{-- Pie de Pagina (footer) --}}

    @include('layouts.admin.footer')

