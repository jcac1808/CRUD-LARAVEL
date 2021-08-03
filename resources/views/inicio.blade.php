@extends('layout')
@section('titulo', 'inicio')

@section('content')
    
    <h2>Inicio</h2>
    @forelse($users as $user)
        {{-- <p><a href="{{ url('/usuario/'.$user->id) }}">{{ $user->name }}</a></p> --}}
        {{-- <p><a href="{{ route('user.detail',['id'=>$user->id]) }}">{{ $user->name }}</a></p> --}}
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


    <a href="{{ route('user.new') }}">Nuevo usuario</a>
@endsection