@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm"></div>
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">Descripción Prestamo</h2>
              <a href="{{route('loan.index')}}" class="btn btn-primary">Atrás</a>
            </div>
        </div>
    </div>
    <div class="col-sm"></div>
    </div>
@endsection