@extends('layout')

@section('content')
<h2>Editar usuario</h2>

<form action="{{ url('usuario/'.$user->id) }}" method="POST" >
    {{ method_field('PUT') }}
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="profession_id">Id profesion</label>
        <input type="number" name="profession_id" id="profession_id" class="form-control" value="{{ old('profession_id', $user->profession_id) }}">    
        @if ($errors->has('profession_id'))
            <small class="form-text text-danger">{{ $errors->first('profession_id') }}</small>
        @endif
    </div>

    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}">
        @if ($errors->has('name'))
            <small class="form-text text-danger">{{ $errors->first('name') }}</small>
        @endif
    </div>

    <div class="form-group">
        <label for="email">Correo electronico</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}">
        @if ($errors->has('email'))
            <small class="form-text text-danger" >{{ $errors->first('email') }}</small>
        @endif
    </div>

    <div class="form-group">
        <label for="pwd">Contraseña</label>
        <input type="password" name="pwd" id="pwd" class="form-control">
    </div>
    
    <button class="btn btn-primary">Actualizar usuario  </button>
    <a href="{{ route('home') }}" class="btn btn-primary" >Volver</a>
</form>
{{-- {{ $user->id }}
{{ $user->profession_id }}
{{ $user->name }}
<br>
{{ $user->email }} --}}
@endsection