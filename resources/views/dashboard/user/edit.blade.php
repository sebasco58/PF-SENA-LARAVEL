@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col-5 mx-auto">
    <h1>Editar Ususario - {{$user->name}}</h1>
    <form action="{{ route('user.update',$user->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}">
        </div>
        <h6>Roles del sistema:</h6>
        @foreach($roles as $rol)
        <div class="form-check">
            <input class="form-check-input" type="radio" name="rol" id="rol{{$rol->id}}" value="{{$rol->id}}" @if($user->roles->pluck('id')->contains($rol->id)) checked @endif>
            <label class="form-check-label" for="rol{{$rol->id}}">
              {{$rol->name}}
            </label>
        </div>
        @endforeach
        
        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
        <a href="{{route('user.index')}}" class="btn btn-primary mt-3">Volver</a>

    </form>
    </div>
</div>
</div>
@endsection