@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col-5 mx-auto">
        <h1>Detalle del Usuario</h1>
        <h6>Nombre: {{$user->name}}</h6>
        <h6>Email: {{$user->email}}</h6>
        <h6>Rol: {{$user->roles[0]->name}}</h6>
        <a href="{{route('user.index')}}" class="btn btn-primary">Volver</a>
    </div>
</div>
</div>
@endsection