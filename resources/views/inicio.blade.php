@extends('layout')
@section('titulo', 'inicio')

@section('content')

    <div class="d-flex justify-content-between align-items-end mb-3">
        <h2 class="pb-1">Inicio</h2>
        <a href="{{ route('user.new') }}" class="btn btn-primary" >Nuevo usuario</a>
    </div>
    

    <div class="d-flex justify-content-between align-items-end mb-3">
        <h3 class="pb-1">Lista de usuarios</h3>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Profesion</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->profession->title }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="{{ route('user.eliminar', ['user' => $user]) }}" method="post">
                            {!! method_field('delete') !!}
                            {!! csrf_field() !!}
                            <a href="{{ route('user.detail',['id'=>$user->id]) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                            <a href="{{ route('user.editar',['user'=>$user]) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                            <button class="btn btn-link"><span class="oi oi-trash"></span></</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- @if ($users->isNotEmpty())
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Profesion</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->profession->title }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a href="{{ route('user.detail',['id'=>$user->id]) }}">Ver</a></td>
                        <td><a href="{{ route('user.editar',['user'=>$user]) }}">Editar</a></td>
                        <td>
                            <form action="{{ route('user.eliminar', ['user' => $user]) }}" method="post">
                                {!! method_field('delete') !!}
                                {!! csrf_field() !!}
                                <input class="btn btn-default" type="submit" value="Delete" />
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay usuarios registrados</p>
    @endif --}}

    {{-- @forelse($users as $user)
    <p>
        {{ $user->name }} 
        <a href="{{ route('user.detail',['id'=>$user->id]) }}">Ver</a> 
        <a href="{{ route('user.editar',['user'=>$user]) }}">Editar</a>
        <form action="{{ route('user.eliminar', ['user' => $user]) }}" method="post">
            {!! method_field('delete') !!}
            {!! csrf_field() !!}
            <input class="btn btn-default" type="submit" value="Delete" />
        </form>
    </p>
    @empty
    <p>No existe registros de usuarios</p>
    @endforelse
    <a href="{{ route('user.new') }}">Nuevo usuario</a> --}}
@endsection