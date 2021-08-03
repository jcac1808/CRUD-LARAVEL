@extends('layout')

@section('content')
    
<h2>Usuario</h2>

@if (empty($user))
    <p>No existe registros</p>
@else
    <p>{{ $user->id }}</p>
    <p>{{ $user->profession->title  }}</p>
    <p>{{ $user->name  }}</p>
    <p>{{ $user->email  }}</p>
@endif

{{-- <a href="{{ url('/') }}">Volver</a> --}}
<a href="{{ route('home') }}">Volver</a>
    
@endsection
