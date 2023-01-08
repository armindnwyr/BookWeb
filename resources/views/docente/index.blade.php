@extends('adminlte::page')

@section('title', 'Docente')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Gestión de Docentes</h1>
@stop

@section('content')
@can('docentes.create')
<a class="btn btn-info mb-3" href="{{route('docentes.create')}}">Registrar docente</a>
@endcan
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
              @can('docentes.edit','docentes.destroy')
              <th>Acciones</th>
              @endcan
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
              @can('docentes.edit','docentes.destroy')
              <td width="140px">
                <a href="{{route('docentes.edit', $item)}}" class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a>
                <form action="{{route('docentes.destroy', $item)}}" method="post" style="display: inline" class="eliminar"> @csrf @method('delete')<x-adminlte-button class="btn-sm" type="submit" theme="outline-danger" icon="fas fa-lg fa-trash"/></form>
              </td>
              @endcan
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  </div>
</div>
@stop

@section('js')

@section('js')
@if(session('eliminar') == 'delete')
<script>
 Swal.fire(
          '¡Eliminado!',
          'El registro ha sido eliminado.',
          'success'
        )
</script>
@endif
<script>
  $('.eliminar').submit(function(e){
    e.preventDefault();

    Swal.fire({
      title: '¿Estas seguro?',
      text: "No podrás revertir esto!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: '¡Si, eliminarlo!',
      cancelButtonText: 'Cancelar'
    }).then((result) => {
      if (result.isConfirmed) {

        this.submit();
      }
    })

  });
</script>


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