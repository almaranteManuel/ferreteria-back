<h2>Registro</h2>

@if ($errors->any())
    <div>
        <div>Hubo un problema</div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/register" method="POST">
    @csrf

    <div>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" autofocus>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">
    </div>

    <div>
        <label for="password">Contrasena</label>
        <input type="password" name="password" id="password" value="{{ old('password') }}">
    </div>

    <div>
        <label for="password_confirmation">Confirmar contrasena</label>
        <input type="password_confirmation" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}">
    </div>
</form>
