@extends('layouts.app')
@section('content')
<div class="card">
    <h5 class="card-header">Detalles Equipos</h5>
    <div class="card-body">
      <h5 class="card-title">{{ $tool->nombre }}</h5>
      <div class="row">
        <div class="col-sm">
            <h6>ID: {{ $tool->id}}</h6> 
            <h6 class="my-4">FECHA FABRICACION: {{ $tool->fecha_fbc}}</h6> 
            <h6>NORMA CERTIFICADORA: {{ $tool->norma_cert}}</h6>
            <h6 class="my-4">FECHA USO: {{ $tool->fecha_uso}}</h6>
        </div>
        <div class="col-sm">
            <h6>LONGITUD: {{ $tool->longitud}}</h6> 
            <h6 class="my-4">ACOMULADO USO: {{ $tool->acomulado_uso}}</h6> 
            <h6>DESCRIPCION: {{ $tool->descripcion}}</h6>
            <h6 class="my-4">LIMITE VIDA: {{ $tool->limite_vida}}</h6>
        </div>
        <div class="col-sm">
            <h6>MARCA: {{ $tool->marca}}</h6> 
            <h6 class="my-4">SERIE LOTE: {{ $tool->serie_lote}}</h6> 
            <h6>PRIORIDAD MANTENIMIENTO: {{ $tool->prioridad_mant}}</h6>
            <h6 class="my-4">CATEGORIA: {{ $tool->categoria_id}}</h6>
        </div>
      </div>
      <a href="{{route('tool.index')}}" class="btn btn-primary">Atrás</a>
    </div>
  </div
@endsection