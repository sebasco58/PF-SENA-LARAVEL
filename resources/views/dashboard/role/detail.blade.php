@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col-5 mx-auto">
        <h1>Detalle del Rol</h1>
        <h6>Nombre: {{$rol->name}}</h6>
        <h6>Permisos: </h6>
        <ul>
            @foreach ($rol->permissions as $permission)
                <li>{{$permission->name}}</li>
            @endforeach
        </ul>
        <a href="{{route('user.index')}}" class="btn btn-primary">Volver</a>
    </div>
</div>
</div>
@endsection