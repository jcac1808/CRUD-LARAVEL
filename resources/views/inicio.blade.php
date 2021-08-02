@extends('layout')
@section('titulo', 'inicio')

@section('content')
    
    <h2>Inicio</h2>
    @forelse($users as $user)
        {{-- <p><a href="{{ url('/usuario/'.$user->id) }}">{{ $user->name }}</a></p> --}}
        <p><a href="{{ route('user.detail',['id'=>$user->id]) }}">{{ $user->name }}</a></p>
    @empty
        <p>No existe registros de usuarios</p>
    @endforelse

@endsection