@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Usuarios
                    @can('crear usuario')
                        <a href="{{route('user.create')}}" class="ml-3">Crear</a>
                    @endcan
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
                                                        @can('editar usuario')
                                                            <a href="{{route('user.edit', $user->id)}}" class="btn btn-sm btn-outline-primary">Editar</a>
                                                        @endcan
                                                        @can('ver usuario')
                                                        <a href="{{route('user.show', $user->id)}}" class="btn btn-sm btn-outline-primary">Detalle</a>
                                                        @endcan
                                                        @can('eliminar usuario')
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Eliminar
                                                            </button>
                                                            <div class="dropdown-menu " aria-labelledby="btnGroupDrop1">
                                                                <button type="submit" class="dropdown-item">Si, eliminar</button>
                                                            </div>
                                                        </div>
                                                        @endcan
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
                                            @can('ver rol')
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{route('role.show', $role->id)}}" class="btn btn-sm btn-outline-primary">Detalle</a>
                                            </div>
                                            @endcan 
                                            @can('editar rol')
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{route('role.edit', $role->id)}}" class="btn btn-sm btn-outline-primary">Editar</a>
                                            </div>
                                            @endcan
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