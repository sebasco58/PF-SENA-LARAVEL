@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col-5 mx-auto">
    <h1>Editar Rol - {{$rol->name}}</h1>
    <form action="{{ route('role.update',$rol->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$rol->name}}">
        </div>
        <h6>Permisos del sistema:</h6>
        @foreach($permissions as $permission)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="{{$permission->id}}" name="permissions[]" id="permission{{$permission->id}}" @if($rol->permissions->pluck('id')->contains($permission->id)) checked @endif>
            <label class="form-check-label" for="permission{{$permission->id}}">
                {{$permission->name}}
            </label>
        </div>
        @endforeach
        
        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
        <a href="{{route('user.index')}}" class="btn btn-primary">Volver</a>

    </form>
    </div>
</div>
</div>
@endsection