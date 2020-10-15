@extends('layouts.app')
@section('content')
<a class="btn btn-danger mt-3 mb-3" href="{{route('category.create')}}">
        Crear
    </a>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->nombre}}</td>
            <td>{{$category->descripcion}}</td>
            <td>
                <a class="btn btn-outline-info" href="{{ route('category.show', $category->id) }}">Detalle</a>
                <a class="btn btn-outline-info" href="{{ route('category.edit', $category->id) }}">Editar</a>
                <button onclick="return ConfirmarEliminar()" type="submit" form="formDelete" class="btn btn-outline-danger">Eliminar</button>
                <form id="formDelete" method="POST" action="{{ route('category.destroy',$category) }}" data-action="{{ route('category.destroy', $category) }}">
                    @method('DELETE')
                    @csrf
                </form>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {{ $categories->links() }}
  <script type="text/javascript">
    function ConfirmarEliminar()
    {
        var respuesta = confirm ("¿Deseas Eliminar esta categoria?");
  
        if(respuesta == true){
            return true;
        }
        else{
            return false;
        }
    }
  </script>

@endsection