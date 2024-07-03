@extends('layouts.app')
@section('content')

    <div class="card mt-3">
        <h5 class="card-header">Editar información del producto</h5>
        <div class="card-body">
            <form action="" method="post" class="row needs-validation"
                enctype="multipart/form-data" novalidate>
                @csrf
                @method('PUT')



                <div class="form-group col-md-6">
                    <label for="nombre_opcion">Nombre: </label>
                    <input type="text" class="form-control {{ $errors->has('nombre_opcion') ? 'is-invalid' : '' }}"
                        name="nombre_opcion" id="nombre_opcion" value="{{ $product->name }}" required>
                    @if ($errors->has('nombre_opcion'))
                        <div class="invalid-feedback">
                            {{ $errors->first('nombre_opcion') }}
                        </div>
                    @endif
                </div>


                <div class="form-group col-md-6">
                    <label for="descripcion_opcion">Descripcion: </label>
                    <input type="text" class="form-control {{ $errors->has('descripcion_opcion') ? 'is-invalid' : '' }}"
                        name="descripcion_opcion" id="descripcion_opcion" value="{{ $product->description }}" required>
                    @if ($errors->has('descripcion_opcion'))
                        <div class="invalid-feedback">
                            {{ $errors->first('descripcion_opcion') }}
                        </div>
                    @endif
                </div>

                <!-- IMAGEN DEL PRODUCTO -->
                <div class="form-group col-md-6 mt-2">
                    <label for="imagenProducto">Imagen: </label>

                    <input type="file" class="form-control {{ $errors->has('imagenProducto') ? 'is-invalid' : '' }}"
                        name="imagenProducto" id="imagenProducto" accept="image/*" />

                    @if ($errors->has('imagenProducto'))
                        <div class="invalid-feedback">
                            {{ $errors->first('imagenProducto') }}
                        </div>
                    @endif
                </div>


                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="usuario_id">Proveedor:</label>
                        {{-- <select name="usuario_id" id="usuario_id" class="form-control" required>
                            @foreach ($proveedores as $usuario_id => $nombres)
                                <option value="{{ $usuario_id }}"
                                    {{ $producto->proveedor_id == $usuario_id ? 'selected' : '' }}>
                                    {{ $nombres }}
                                </option>
                            @endforeach
                        </select> --}}
                    </div>
                </div>


                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="categoria_id">Categoria:</label>
                        <select name="categoria_id" id="categoria_id" class="form-control" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $product->category->id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="estante_id">Estante:</label>
                        {{-- <select name="estante_id" id="estante_id" class="form-control" required>
                            @foreach ($estantes as $estante_id => $estante)
                                <option value="{{ $estante_id }}"
                                    {{ $producto->estante_id == $estante_id ? 'selected' : '' }}>
                                    {{ $estante }}
                                </option>
                            @endforeach
                        </select> --}}
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="unidad_medida_id">Unidad de Medida:</label>
                        {{-- <select name="unidad_medida_id" id="unidad_medida_id" class="form-control" required>
                            @foreach ($unidades as $unidad_medida_id => $nombreUnidad)
                                <option value="{{ $unidad_medida_id }}"
                                    {{ $producto->unidad_medida_id == $unidad_medida_id ? 'selected' : '' }}>
                                    {{ $nombreUnidad }}
                                </option>
                            @endforeach
                        </select> --}}
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="periodo_id">Período:</label>
                        {{-- <select name="periodo_id" id="periodo_id" class="form-control" required>
                            @foreach ($periodos as $periodo_id => $fecha)
                                <option value="{{ $periodo_id }}"
                                    {{ $producto->periodo_id == $periodo_id ? 'selected' : '' }}>
                                    {{ \Carbon\Carbon::parse($fecha)->format('Y/m/d') }}
                                </option>
                            @endforeach
                        </select> --}}
                    </div>
                </div>



                <div class="form-group col-md-12 mt-3">
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                    <a href="/products" class="btn btn-dark">Regresar</a>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('AfterScript')

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
