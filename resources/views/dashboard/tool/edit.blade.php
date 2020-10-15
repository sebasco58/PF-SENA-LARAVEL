@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Editar Uso en Campo</h1>
        <form action="{{route('tool.update', $tool->id) }}" method="post">
        <div class="form-row">
            <div class="col">
                @method('PUT')
                @csrf
                <input type="text" name="nombre" id="nombre" value="{{ $tool->nombre }}" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm">
                <input type="text" name="longitud" id="longitud" value="{{ $tool->longitud }}" class="form-control my-2">
                <input type="text" name="marca" id="marca" value="{{ $tool->marca }}" class="form-control my-2">
                <label for="fecha_fbc" class="form-control">Fecha fabricacion</label>
                <input type="date" name="fecha_fbc" id="fecha_fbc" value="{{ $tool->fecha_fbc }}" class="form-control my-2">
                <input type="text" name="acomulado_uso" id="acomulado_uso" value="{{ $tool->acomulado_uso }}" class="form-control my-2">
            </div>
            <div class="col-sm">
                <input type="text" name="serie_lote" id="serie_lote" value="{{ $tool->serie_lote }}" class="form-control my-2">    
                <input type="text" name="norma_cert" id="norma_cert" value="{{ $tool->norma_cert }}" class="form-control my-2">
                <textarea name="descripcion" id="descripcion" cols="60" rows="5" placeholder="  Descripcion"> {{ $tool->descripcion }}
                </textarea>
            </div>
            <div class="col-sm">
                <input type="text" name="prioridad_mant" id="prioridad_mant" value="{{ $tool->prioridad_mant }}" class="form-control my-2">
                <label for="fecha_uso" class="form-control">Fecha Uso</label>
                <input type="date" name="fecha_uso" id="fecha_uso" value="{{ $tool->fecha_uso }}" class="form-control my-2">
                <input type="text" name="limite_vida" id="limite_vida" value="{{ $tool->limite_vida }}"class="form-control my-2">
                <select name="categoria_id" id="categoria_id" class="form-control my-2">
                        @foreach ($categories as $nombre=>$id)
                        <option {{ $tool->categoria_id == $id ? 'selected="selected"' : ''}} value="{{ $id }}">{{ $nombre }}</option>
                        @endforeach
                </select>
                <button  type="submit" class="btn btn-dark my-3">Editar</button>
            </div>
        </div>
    </form>
    </div>
@endsection