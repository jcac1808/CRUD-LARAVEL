<p>Editar usuario</p>
{{ $user->id }}
{{ $user->profession_id }}
{{ $user->name }}
<br>
{{ $user->email }}


<form action="{{ url('usuario/'.$user->id) }}" method="POST" >
    {{ method_field('PUT') }}
    {!! csrf_field() !!}
    <label for="profession_id">Id profesion</label>
    <input type="number" name="profession_id" id="profession_id" value="{{ old('profession_id', $user->profession_id) }}">    
    @if ($errors->has('profession_id'))
        <p>{{ $errors->first('profession_id') }}</p>
    @endif
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
    @if ($errors->has('name'))
        <p>{{ $errors->first('name') }}</p>
    @endif
    <label for="email">Correo electronico</label>
    <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}">
    @if ($errors->has('email'))
        <p>{{ $errors->first('email') }}</p>
    @endif
    <label for="pwd">Contraseña</label>
    <input type="text" name="pwd" id="pwd">
    <button>Actualizar usuario  </button>
</form>

<br>
<a href="{{ route('home') }}">Volver</a>
