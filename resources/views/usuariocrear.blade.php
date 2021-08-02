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

<form action="{{ url('usuario/crear') }}" method="POST" >
    {!! csrf_field() !!}
    <label for="profession_id">Id profesion</label>
    <input type="number" name="profession_id" id="profession_id" value="{{ old('profession_id') }}">    
    @if ($errors->has('profession_id'))
        <p>{{ $errors->first('profession_id') }}</p>
    @endif
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}">
    @if ($errors->has('name'))
        <p>{{ $errors->first('name') }}</p>
    @endif
    <label for="email">Correo electronico</label>
    <input type="email" name="email" id="email" value="{{ old('email') }}">
    @if ($errors->has('email'))
        <p>{{ $errors->first('email') }}</p>
    @endif
    <label for="pwd">Contraseña</label>
    <input type="text" name="pwd" id="pwd">
    <button>Crear usuario  </button>
</form>

{{-- <a href="{{ url('/') }}">Volver</a> --}}
<a href="{{ route('home') }}">Volver</a>