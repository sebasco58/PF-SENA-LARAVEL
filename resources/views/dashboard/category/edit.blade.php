@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col-sm m-3"></div> 
    <div class="col-sm m-3">
    <h1>Editar Categorias</h1>
    <form action="{{ route('category.update',$category->id) }}" method="POST">
        @method('PUT')
        @csrf
        <input type="text" name="nombre" id="nombre" value="{{ $category->nombre }}" class="form-control my-3">
        <input type="text" name="descripcion" id="descripcion" value="{{ $category->descripcion }}" class="form-control my-3">
        <button  type="submit" class="btn btn-dark my-3">Editar</button>
    </form>
    </div>
    <div class="col-sm m-3"></div>
</div>
</div>
@endsection