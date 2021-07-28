@extends('layout')
@section('titulo', 'inicio')

@section('content')
    
    <h2>Inicio</h2>
    @forelse($users as $user)
        <p>{{ $user }}</p>
    @empty
        <p>no existe registros de usuarios</p>
    @endforelse

@endsection