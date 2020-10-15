@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Usuarios
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <form action="{{route('user.destroy', $user->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a href="{{route('user.edit', $user->id)}}" class="btn btn-sm btn-outline-primary">Editar</a>
                                                        <button class="btn btn-sm btn-outline-danger">Eliminar</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Roles
                </div>
                <div class="card-body">
                <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($roles as $role)
                                    <tr>
                                        <td>{{$role->name}}</td>
                                        <td>
                                            <form action="{{route('role.destroy', $role->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a href="{{route('role.edit', $role->id)}}" class="btn btn-sm btn-outline-primary">Editar</a>
                                                        <button class="btn btn-sm btn-outline-danger">Eliminar</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection