@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col-4">
    <h1>Crear Categorias</h1>
    <form action="{{route('category.store')}}" method="post">
        @csrf
        <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control mb-1">
        <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion" class="form-control mb-1">
        <button type="submit" class="btn btn-dark">Crear</button>
    </form>
    </div>
</div>
</div>
@endsection