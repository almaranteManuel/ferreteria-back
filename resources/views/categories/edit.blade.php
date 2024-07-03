@extends('layouts.app')

@section('content')

<div class="card mt-3">
    <h5 class="card-header">Editar Categoría</h5>
    <div class="card-body">
        <form action="{{ url('/category/update/' . $category->id) }}" method="POST" class="row needs-validation" novalidate>
            @csrf
            @method('PUT')

            <div class="form-group col-md-4">
                <label for="name">Nombre: *</label>
                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                    name="name" id="name" value="{{ $category->name }}" required>
                @if ($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>


            {{-- <div class="form-group col-md-8">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control {{ $errors->has('descripcion') ? 'is-invalid' : '' }}" name="descripcion" id="descripcion">{{ $categoria->descripcion }}</textarea>
                @if ($errors->has('descripcion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('descripcion') }}
                    </div>
                @endif
            </div> --}}

            <div class="form-group col-md-12 mt-3">
                <input type="submit" class="btn btn-primary" value="Actualizar">
                <a href="/categories" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>
</div>

@endsection
