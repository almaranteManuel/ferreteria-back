@extends('layouts.app')

@section('content')

    <div class="card">
        <h5 class="card-header">Información personal</h5>
        <div class="card-body">
            <form action="" method="post" class="row needs-validation"
                novalidate>
                @csrf
                @method('PUT')

                <div class="form-group col-md-6">
                    <label for="name">Nombre: </label>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                        name="name" id="name" value="{{$user->name}}" required>
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="phone">Teléfono: </label>
                    <input type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                        name="phone" id="phone" value="" required>
                    @if ($errors->has('phone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('phone') }}
                        </div>
                    @endif
                </div>


                <div class="form-group col-md-6 mt-2">
                    <label for="email">Email: </label>
                    <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                        name="email" id="email" value="" required>
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>

                <h5 class="text-primary mt-5">Seguridad</h5>
                <hr>



                <div class="form-group col-md-4">
                    <label for="old_password">Contraseña actual: </label>
                    <input type="password"
                        class="form-control {{ $errors->has('old_password') ? 'is-invalid' : '' }}"
                        name="old_password" id="old_password" required>
                    @if ($errors->has('old_password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('old_password') }}
                        </div>
                    @endif
                </div>

                <div class="form-group col-md-4">
                    <label for="new_password">Contraseña nueva: </label>
                    <input type="password" class="form-control {{ $errors->has('new_password') ? 'is-invalid' : '' }}"
                        name="new_password" id="new_password">
                    @if ($errors->has('new_password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('new_password') }}
                        </div>
                    @endif
                </div>

                <div class="form-group col-md-4">
                    <label for="confirm_password">Confirmar contraseña: </label>
                    <input type="password"
                        class="form-control {{ $errors->has('confirm_password') ? 'is-invalid' : '' }}"
                        name="confirm_password" id="confirm_password">
                    @if ($errors->has('confirm_password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('confirm_password') }}
                        </div>
                    @endif
                </div>



                <div class="form-group col-md-12 mt-3">
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                    <a href="/" class="btn btn-dark">Regresar</a>
                </div>
            </form>
        </div>

    </div>


@endsection



@section('AfterScript')
    <script>
        //validar numero de telefono
        $(document).ready(function() {
            $('#phone').on('input', function() {
                let telefono = $(this).val();
                telefono = telefono.replace(/\D/g, '');
                if (telefono.length >= 4) {
                    telefono = telefono.substr(0, 4) + '-' + telefono.substr(4, 4);
                }
                $(this).val(telefono);
            });
        });
    </script>
@endsection
