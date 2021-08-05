@extends('layout')

@section('content')
<div class="card">
    <div class="card-header"><h2>Editar usuario</h2></div>
    <div class="card-body">
        <form action="{{ url('usuario/'.$user->id) }}" method="POST" >
            {{ method_field('PUT') }}
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="profession_id">Id profesion</label>
                <select name="profession_id" id="profession_id" class="form-control form-control-lg">
                    @foreach ($profesiones as $profesion)
                        @if ($profesion->id === $user->profession_id)
                            <option value="{{ $profesion->id }}" selected>{{ $profesion->title }}</option>    
                        @else
                            <option value="{{ $profesion->id }}">{{ $profesion->title }}</option>
                        @endif
                    @endforeach
                </select>
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
    </div>
</div>
@endsection