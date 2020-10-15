@extends('layouts.app')
@section('content')
<div class="container">

    <a class="btn btn-danger mt-3 mb-3" href="{{route('tool.create')}}">
        Crear
    </a>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Longitud</th>
        <th scope="col">Marca</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach($tools as $tool)
        <tr>
            <th scope="row">{{$tool->id}}</th>
            <td>{{$tool->nombre}}</td>
            <td>{{$tool->longitud}}</td>
            <td>{{$tool->marca}}</td>
            <td>
                <a class="btn btn-outline-info" href="{{ route('tool.show', $tool->id) }}">Detalle</a>
                <a class="btn btn-outline-info" href="{{ route('tool.edit', $tool->id) }}">Editar</a>
                <button onclick="return ConfirmarEliminar()" type="submit" form="formDelete" class="btn btn-outline-danger">Eliminar</button>
                <form id="formDelete" method="POST" action="{{ route('tool.destroy',$tool) }}" data-action="{{ route('tool.destroy', $tool) }}">
                    @method('DELETE')
                    @csrf
                </form>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {{ $tools->links() }}
</div>
<script type="text/javascript">
  function ConfirmarEliminar()
  {
      var respuesta = confirm ("¿Deseas Eliminar este Equipo?");

      if(respuesta == true){
          return true;
      }
      else{
          return false;
      }
  }
</script>

@endsection