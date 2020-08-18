@extends('layouts.app')
@section('content')
    ID: {{ $category->id }} <br>
    Nombre: {{ $category->nombre }} <br>
    Descripcion: {{ $category->descripcion }}
@endsection