@extends('layouts.app')

@section('content')

<div class="card mt-3">
    <h5 class="card-header">Crear Categoría</h5>
    <div class="card-body">
        <form action="/category/store" method="post" class="row needs-validation" novalidate>
            @csrf

            <div class="form-group col-md-4">
                <label for="name">Nombre: *</label>
                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                    name="name" id="name" required>
                @if ($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>

            <div class="form-group col-md-12 mt-3">
                <input type="submit" class="btn btn-primary" value="Crear">
                <a href="/categories" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>
</div>

@endsection
