@extends('layouts.app')
@section('content')
<a class="btn btn-danger mt-3 mb-3" href="{{route('loan.create')}}">
        Crear
    </a>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Usuario</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
@endsection