@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col-sm m-3"></div> 
    <div class="col-sm m-3">
    <h1>Crear Categorias</h1>
    <form action="{{route('category.store')}}" method="post">
        @csrf
        <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control my-3">
        <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion" class="form-control my-3">
        <button  type="submit" class="btn btn-dark my-3">Crear</button>
    </form>
    </div>
    <div class="col-sm m-3"></div>
</div>
</div>
@endsection