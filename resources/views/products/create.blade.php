@extends('layouts.app')
@section('content')

    <div class="card mt-3">
        <h5 class="card-header">Ingresar producto</h5>
        <div class="card-body">
            <form action="{{ url('/store') }}" method="post" class="row needs-validation"
                enctype="multipart/form-data" novalidate>
                @csrf

                <!-- NOMBRE DEL PRODUCTO -->
                <div class="form-group col-md-6">
                    <label for="name">Nombre: *</label>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                        name="name" id="name" required />
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>

                <!-- DESCRIPCION DEL PRODUCTO -->
                <div class="form-group col-md-6">
                    <label for="description">Descripcion: *</label>
                    <input type="text" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                        name="description" id="description" required />
                    @if ($errors->has('description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                </div>

                {{-- <!-- IMAGEN DEL PRODUCTO -->
                <div class="form-group col-md-6 mt-2">
                    <label for="imagenProducto">Imagen: </label>

                    <input type="file" class="form-control {{ $errors->has('imagenProducto') ? 'is-invalid' : '' }}"
                        name="imagenProducto" id="imagenProducto" accept="image/*" />

                    @if ($errors->has('imagenProducto'))
                        <div class="invalid-feedback">
                            {{ $errors->first('imagenProducto') }}
                        </div>
                    @endif
                </div> --}}

                {{-- <!-- PROVEEDOR DEL PRODUCTO -->
                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="usuario_id">Proveedor: *</label>
                        {{-- <select name="usuario_id" id="usuario_id" class="form-control" required>
                            @if ($proveedores->isEmpty())
                                <option value="" disabled selected>
                                    No se encontraron proveedores
                                </option>
                            @else
                                @foreach ($proveedores as $usuario_id => $nombres)
                                    <option value="{{ $usuario_id }}">
                                        {{ $nombres }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div> --}}

                <!-- CATEGORIA DEL PRODUCTO -->
                <div class="col-md-6 mt-2">
                    <div class="form-group @error('category_id') is-invalid @enderror">
                        <label for="category_id">Categoria: *</label>
                        <select name="category_id" id="category_id" class="form-control" required>
                            @if ($categories->isEmpty())
                                <option value="" disabled selected>
                                    No se encontraron categorías
                                </option>
                            @else
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                {{-- <!-- ESTANTE DEL PRODUCTO -->
                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="estante_id">Estante: *</label>
                        {{-- <select name="estante_id" id="estante_id" class="form-control" required>
                            @if ($estantes->isEmpty())
                                <option value="" disabled selected>
                                    No se encontraron estantes
                                </option>
                            @else
                                @foreach ($estantes as $estante_id => $nombreEstante)
                                    <option value="{{ $estante_id }}">
                                        {{ $nombreEstante }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div> --}}

                <!-- UNIDAD DE MEDIDA DEL PRODUCTO -->
                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="unidad_medida_id">Precio: *</label>
                        <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" required>
                    </div>
                </div>

                <!-- PERIODO DE REGISTRO DEL PRODUCTO -->
                {{-- <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="periodo_id">Período: *</label>
                        {{-- <select name="periodo_id" id="periodo_id" class="form-control" required>
                            @if ($periodos->isEmpty())
                                <option value="" disabled selected>
                                    No se encontraron períodos
                                </option>
                            @else
                                @foreach ($periodos as $periodo_id => $fecha)
                                    <option value="{{ $periodo_id }}">
                                        {{ \Carbon\Carbon::parse($fecha)->format('Y/m/d') }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div> --}}

                <div class="form-group col-md-12 mt-3">
                    <input type="submit" class="btn btn-primary" value="Ingresar" />
                    <a href="/products" class="btn btn-dark">Regresar</a>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('AfterScript')
    <script>
        // DECLARACION DE VARIABLES
        const d = document;
        const vencimientoFechaCheck = d.getElementById("activarFechaVencimiento");
        const vencimientoFechaInput = d.getElementById("fechaVencimientoProducto");

        // DECLARACION DE FUNCIONES
        const onElementChecked = () => {
            vencimientoFechaInput.disabled = vencimientoFechaInput.disabled ?
                false :
                true;
        };

        d.addEventListener("DOMContentLoaded", () => {
            // Asignar el evento al checkbox
            vencimientoFechaCheck.addEventListener("change", onElementChecked);
        });
    </script>
    <script>
        $(document).ready(function() {
            // Inicializa Selectize
            initSearchSelect('usuario_id');
            initSearchSelect('categoria_id');
            initSearchSelect('categoria_id');
            initSearchSelect('estante_id');
            initSearchSelect('unidad_medida_id');
            initSearchSelect('periodo_id');


        });
    </script>
@endsection
