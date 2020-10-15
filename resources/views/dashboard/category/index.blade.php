@extends('layouts.app')
@section('content')
    <a class="btn btn-danger mt-3 mb-3" href="{{route('category.create')}}">
        Crear
    </a>
    
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <td>
                    Id
                </td>
                <td>
                    Nombre
                </td>
                <td>
                    Descripcion
                </td>
                <td>
                    Acciones
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>
                    {{$category->id}}
                </td>
                <td>
                    {{$category->nombre}}
                </td>
                <td>
                    {{$category->descripcion}}
                </td>
                <td>
                    <a class="btn btn-info" href="{{ route('category.show', $category->id) }}">Detalle</a>
                    <a class="btn btn-warning" href="{{ route('category.edit', $category->id) }}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}

@endsection