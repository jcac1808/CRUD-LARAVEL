@extends('layout')

@section('content')

<h2>Crear Usuario</h2>

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<form action="{{ url('usuario/crear') }}" method="POST">
  {!! csrf_field() !!}
  <div class="form-group">
    <label for="profession_id">Id profesion</label>
    <input type="number" name="profession_id" id="profession_id" class="form-control" value="{{ old('profession_id') }}">
    @if ($errors->has('profession_id'))
      <small class="form-text text-danger" >{{ $errors->first('profession_id') }}</small>
    @endif
  </div>

  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
    @if ($errors->has('name'))
      <small class="form-text text-danger">{{ $errors->first('name') }}</small>
    @endif
  </div>

  <div class="form-group">
    <label for="email">Correo electronico</label>
    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
    @if ($errors->has('email'))
      <small class="form-text text-danger">{{ $errors->first('email') }}</small>
    @endif
  </div>
  <div class="form-group">
    <label for="pwd">Contraseña</label>
    <input type="password" name="pwd" id="pwd" class="form-control">
  </div>
  <button class="btn btn-primary" >Crear usuario </button>
  <a href="{{ route('home') }}" class="btn btn-primary" >Volver</a>
</form>

{{-- <a href="{{ url('/') }}">Volver</a> --}}


@endsection