@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Crear Uso en Campo</h1>
        <form action="{{route('tool.store')}}" method="post">
        <div class="form-row">
            <div class="col">
                @csrf
                <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm">
                <input type="text" name="longitud" id="longitud" placeholder="Longitud" class="form-control my-2">
                <input type="text" name="marca" id="marca" placeholder="Marca" class="form-control my-2">
                <label for="fecha_fbc" class="form-control">Fecha fabricacion</label>
                <input type="date" name="fecha_fbc" id="fecha_fbc" placeholder="fecha_fbc" class="form-control my-2">
                <input type="text" name="acomulado_uso" id="acomulado_uso" placeholder="Acomulado_uso" class="form-control my-2">
            </div>
            <div class="col-sm">
                <input type="text" name="serie_lote" id="serie_lote" placeholder="Serie_lote" class="form-control my-2">    
                <input type="text" name="norma_cert" id="norma_cert" placeholder="Norma_cert" class="form-control my-2">
                <textarea name="descripcion" id="descripcion" cols="60" rows="5" placeholder="  Descripcion"></textarea>
            </div>
            <div class="col-sm">
                <input type="text" name="prioridad_mant" id="prioridad_mant" placeholder="Prioridad_mant" class="form-control my-2">
                <label for="fecha_uso" class="form-control">Fecha Uso</label>
                <input type="date" name="fecha_uso" id="fecha_uso" placeholder="fecha_uso" class="form-control my-2">
                <input type="text" name="limite_vida" id="limite_vida" placeholder="Limite_vida" class="form-control my-2">
                <select name="categoria_id" id="categoria_id" class="form-control my-2">
                        @foreach ($categories as $nombre=>$id)
                        <option {{ $tool->categoria_id == $id ? 'selected="selected"' : ''}} value="{{ $id }}">{{ $nombre }}</option>
                        @endforeach
                </select>
                <button  type="submit" class="btn btn-dark my-3">Crear</button>
            </div>
        </div>
    </form>
    </div>
@endsection