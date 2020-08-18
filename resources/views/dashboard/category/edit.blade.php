@extends('layouts.app')
@section('content')
    <h1>Form cate editar</h1>
    <form action="{{ route('category.update',$category->id) }}" method="POST">
        @method('PUT')
        @csrf
        <input type="text" name="nombre" id="nombre" value="{{ $category->nombre }}">
        <input type="text" name="descripcion" id="descripcion" value="{{ $category->descripcion }}">
        <button type="submit" class="btn btn-dark">Editar</button>
    </form>
@endsection