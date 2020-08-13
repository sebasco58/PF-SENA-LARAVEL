@extends('dashboard.master')
@section('content')
    <h1>Form cate</h1>
    <form action="{{route('category.store')}}" method="post">
        @csrf
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion">
        <button type="submit" class="btn btn-dark">Crear</button>
    </form>
@endsection