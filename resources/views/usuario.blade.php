@extends('layout')

@section('content')
    
<h2>Informaci&oacute;n</h2>
<h3>Datos del usuario</h3>
@if (empty($user))
    <p>No existe registros</p>
@else
    <ul class="list-group">
        <li class="list-group-item active" >C&oacute;digo: {{ $user->id }}</li>
        <li class="list-group-item">Profesi&oacute;n: {{ $user->profession->title  }}</li>
        <li class="list-group-item">Nombre: {{ $user->name  }}</li>
        <li class="list-group-item">Correo Electr&oacute;nico: {{ $user->email  }}</li>
    </ul>
@endif
<br>
<a href="{{ route('home') }}" class="btn btn-primary">Volver</a>
{{-- <a href="{{ url('/') }}">Volver</a> --}}
   
@endsection
