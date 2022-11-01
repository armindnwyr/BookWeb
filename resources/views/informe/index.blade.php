@extends('adminlte::page')

@section('title', 'Informe')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Lista de Informes</h1>
@stop

@section('content')
<a class="btn btn-info mb-3" href="{{route('informes.create')}}">Crear Nuevo Informe</a>
<div class="card">
  <div class="card-body">
    <div class="table-responsive">    
      <table class="table table table-striped" id="tinforme">
          <thead class="thead-dark">
            <tr>
              <th>Nombre</th>
              <th>Codigo</th>
              <th>Centro</th>
              <th>Docente</th>
              <th>Practicas</th>
              <th>Estudiante</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($informe as $item)
            <tr>
              <td>{{$item->info_nombre}}</td>
              <td>{{$item->info_codigo}}</td>
              <td>{{$item->info_centro}}</td>
              <td>{{$item->docente->doce_nombre}} {{$item->docente->doce_paterno}} {{$item->docente->doce_materno}}</td>
              <td>{{$item->categoria->cate_nombre}}</td>
              <td>{{$item->autor->au_nombre}} {{$item->autor->au_paterno}} {{$item->autor->au_materno}}</td>
              <td width="140px">
                <a href="{{$item->info_pdf}}" class="btn btn-outline-dark btn-sm" target="_blank"><i class="fas fa-lg fa-file"></i></a>
                <a href="{{route('informes.edit', $item)}}" class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a>
                <form action="{{route('informes.destroy', $item)}}" method="post" style="display: inline;"> @csrf @method('delete') <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-lg fa-trash"></i></button></form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  </div>
</div>
@stop

@section('js')
<script>
  $('#tinforme').DataTable({
  responsive: true,
  autoWidth: false,
  "language": {
        "lengthMenu": "Mostrar "+`
        <select class="custom-select custom-select-sm form-control form-control-sm">
          <option value="10">10</option> 
          <option value="25">25</option> 
          <option value="50">50</option> 
          <option value="100">100</option> 
          <option value="-1">All</option> 
        </select>
        `+" registros por paginas",
        "zeroRecords": "Nada encontrado - lo siento",
        "info": "Mostrando la pagina _PAGE_ de _PAGES_",
        "infoEmpty": "No records available",
        "infoFiltered": "(filtrado de _MAX_ registro total)",
        "search":"Buscar: ",
        "paginate":{
          "next": "Siguiente",
          "previous": "Anterior"
        }
    }
});
</script>
@stop