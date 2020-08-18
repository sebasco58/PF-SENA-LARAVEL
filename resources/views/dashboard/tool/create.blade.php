@extends('layouts.app')
@section('content')
    <h1>Form tool</h1>
    <form action="{{route('tool.store')}}" method="post">
        @csrf
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <input type="text" name="longitud" id="longitud" placeholder="Longitud">
        <input type="text" name="marca" id="marca" placeholder="marca">
        <input type="text" name="fecha_fbc" id="fecha_fbc" placeholder="fecha_fbc">
        <input type="text" name="serie_lote" id="serie_lote" placeholder="serie_lote">
        <input type="text" name="norma_cert" id="norma_cert" placeholder="norma_cert">
        <input type="text" name="descripcion" id="descripcion" placeholder="descripcion">
        <input type="text" name="prioridad_mant" id="prioridad_mant" placeholder="prioridad_mant">
        <input type="text" name="fecha_uso" id="fecha_uso" placeholder="fecha_uso">
        <input type="text" name="limite_vida" id="limite_vida" placeholder="limite_vida">
        <input type="text" name="acomulado_uso" id="acomulado_uso" placeholder="acomulado_uso">
        <label for="categoria_id">Categorias</label>
            <select name="categoria_id" id="categoria_id">
                    @foreach ($categories as $nombre=>$id)
                    <option {{ $tool->categoria_id == $id ? 'selected="selected"' : ''}} value="{{ $id }}">{{ $nombre }}</option>
                    @endforeach
            </select>
        <button type="submit" class="btn btn-dark">Crear</button>
    </form>
@endsection