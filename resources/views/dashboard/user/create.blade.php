@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col-5 mx-auto">
    <h1>Crear Ususario</h1>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for="name">Número de documento</label>
            <input type="number" name="document" id="document"  class="form-control">
            <small id="emailHelp" class="form-text text-muted">El número de documento será la contraseña por defecto</small>
        </div>
        <h6>Roles del sistema:</h6>
        @foreach($roles as $rol)
        <div class="form-check">
            <input class="form-check-input" type="radio" name="rol" id="rol{{$rol->id}}" value="{{$rol->id}}">
            <label class="form-check-label" for="rol{{$rol->id}}">
              {{$rol->name}}
            </label>
        </div>
        @endforeach
        
        <button type="submit" class="btn btn-primary mt-3">Crear</button>
        <a href="{{route('user.index')}}" class="btn btn-primary mt-3">Volver</a>
    </form>
    </div>
</div>
</div>
@endsection