@extends('adminlte::page')

@section('title', 'Autor')

@section('content_header')
    <h1 class="text-center font-weight-bold text-uppercase">Gestión de Estudiantes</h1>
@stop

@section('content')
@can('autors.create')
<a class="btn btn-info mb-3" href="{{route('autors.create')}}">Registrar estudiante</a>
@endcan
<div class="card">
    <div class="card-body">
        <div class="table-responsive">    
            <table class="table table-striped text-center" id="tautor">
                <thead class="thead-dark">
                    <tr>
                    <th>Nombre</th>
                    <th>Paterno</th>
                    <th>Materno</th>
                    <th>Codigo</th>
                    <th>Sexo</th>
                    <th>Correo</th>
                    <th>Celular</th>
                    @can('autors.edit','autors.destroy')
                    <th>Acciones</th>
                    @endcan
                    </tr>
                </thead>
                <tbody>
                    @foreach ($autores as $item)
                    <tr>
                    <td>{{$item->au_nombre}}</td>
                    <td>{{$item->au_paterno}}</td>
                    <td>{{$item->au_materno}}</td>
                    <td>{{$item->au_codigo}}</td>
                    <td>{{$item->au_sexo}}</td>
                    <td>{{$item->au_correo}}</td>
                    <td>{{$item->au_celular}}</td>
                    @can('autors.edit','autors.destroy')
                    <td width="140px">
                        <a href="{{route('autors.edit', $item)}}" class="btn btn-outline-success btn-sm"><i class="fas fa-lg fa-edit"></i></a>
                        <form action="{{route('autors.destroy', $item)}}" method="post" style="display: inline" class="eliminar"> @csrf @method('delete') <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-lg fa-trash"></i></button></form>
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
    $('#tautor').DataTable({
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