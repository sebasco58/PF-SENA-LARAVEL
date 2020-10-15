@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Crear Uso en Campo</h1>
        <div class="row">
            <form action="{{route('tool.store')}}" method="post">
            <div class="col">
                @csrf
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control my-2">
                        <input type="text" name="longitud" id="longitud" placeholder="Longitud" class="form-control my-2">
                        <input type="text" name="marca" id="marca" placeholder="Marca" class="form-control my-2">
                        <input type="text" name="fecha_fbc" id="fecha_fbc" placeholder="fecha_fbc" class="form-control my-2">
                        <input type="text" name="serie_lote" id="serie_lote" placeholder="Serie_lote" class="form-control my-2">    
                        <input type="text" name="norma_cert" id="norma_cert" placeholder="Norma_cert" class="form-control my-2">
                        <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion" class="form-control my-2">
                        <input type="text" name="prioridad_mant" id="prioridad_mant" placeholder="Prioridad_mant" class="form-control my-2">
                        <input type="text" name="fecha_uso" id="fecha_uso" placeholder="fecha_uso" class="form-control my-2">
                        <input type="text" name="limite_vida" id="limite_vida" placeholder="Limite_vida" class="form-control my-2">
                        <input type="text" name="acomulado_uso" id="acomulado_uso" placeholder="Acomulado_uso" class="form-control my-2">
                        <select name="categoria_id" id="categoria_id" class="form-control my-2">
                                @foreach ($categories as $nombre=>$id)
                                <option {{ $tool->categoria_id == $id ? 'selected="selected"' : ''}} value="{{ $id }}">{{ $nombre }}</option>
                                @endforeach
                        </select>
                        <button  type="submit" class="btn btn-dark my-3">Crear</button>
                </form>
            </div>
        </div>
    </div>
@endsection