@extends('dashboard.master')
@section('content')
    ID: {{ $category->id }} <br>
    Nombre: {{ $category->nombre }} <br>
    Descripcion: {{ $category->descripcion }}
@endsection