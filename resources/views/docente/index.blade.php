@extends('adminlte::page')

@section('title', 'Docente')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Lista de Docentes</h1>
@stop

@section('content')

<a class="btn btn-info mb-3" href="{{route('docente.create')}}">Crear nuevo docente</a>
<div class="card">
  <div class="card-body">
      <div class="table-responsive">    
      <table class="table table-striped text-center" id="tdocente">
          <thead class="thead-dark">
            <tr>
              <th>Nombre</th>
              <th>Paterno</th>
              <th>Materno</th>
              <th>Sexo</th>
              <th>Celular</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($docentes as $item)
            <tr>
              <td>{{$item->doce_nombre}}</td>
              <td>{{$item->doce_paterno}}</td>
              <td>{{$item->doce_materno}}</td>
              <td>{{$item->doce_sexo}}</td>
              <td>{{$item->doce_celular}}</td>
              <td width="140px">
                <a href="{{route('docente.edit', $item)}}" class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a>
                <form action="{{route('docente.destroy', $item)}}" method="post" style="display: inline"> @csrf @method('delete')<x-adminlte-button class="btn-sm" type="submit" theme="outline-danger" icon="fas fa-lg fa-trash"/></form>
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
  $('#tdocente').DataTable({
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