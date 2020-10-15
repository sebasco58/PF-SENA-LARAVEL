@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <h1>Crear Prestamo</h1>
    <form action="{{route('loan.store')}}" method="post">
        @csrf
    </form>
</div>
@endsection