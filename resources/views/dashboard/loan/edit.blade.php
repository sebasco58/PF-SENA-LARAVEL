@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <h1>Editar Prestamo</h1>
    <form action="{{route('loan.store')}}" method="post">
        @method('PUT')
        @csrf
    </form>
</div>
@endsection