@extends('layouts.app')
@section('content')
<div class="container">
    <a class="btn btn-danger mt-3 mb-3" href="{{route('tool.create')}}">
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
                    longitud
                </td>
                <td>
                    marca
                </td>
                <td>
                    Acciones
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach($tools as $tool)
            <tr>
                <td>
                    {{$tool->id}}
                </td>
                <td>
                    {{$tool->nombre}}
                </td>
                <td>
                    {{$tool->longitud}}
                </td>
                <td>
                    {{$tool->marca}}
                </td>
                <td>
                    <a class="btn btn-info" href="{{ route('tool.show', $tool->id) }}">Detalle</a>
                    <a class="btn btn-warning" href="{{ route('tool.edit', $tool->id) }}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $tools->links() }}
</div>

@endsection