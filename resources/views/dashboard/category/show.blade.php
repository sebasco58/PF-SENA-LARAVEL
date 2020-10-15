@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm"></div>
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://image.freepik.com/free-photo/carpentry-implements-white-background_23-2148180563.jpg" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">Descripción</h2>
              <h5>ID: {{ $category->id }} </h5>
              <h5>Nombre: {{ $category->nombre }} </h5>
              <h5>Descripcion: {{ $category->descripcion }}</h5>
              <a href="{{route('category.index')}}" class="btn btn-primary">Atrás</a>
            </div>
        </div>
    </div>
    <div class="col-sm"></div>
    </div>
@endsection