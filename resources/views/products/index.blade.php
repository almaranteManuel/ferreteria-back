@extends('layouts.app')

@section('content')
    <div class="card mt-3">
        <h5 class="card-header">Administración de productos</h5>
        <div class="card-body">
            <a href="product/create" class="btn btn-success mb-3">
                <span class="text-center">Agregar</span>
            </a>

            <div class="col-md-4 mx-auto text-center mb-3">
                <label class="mb-2" for="filtro-bloqueo">Filtrar por Estado:</label>
                <select id="filtro-bloqueo" class="form-select">
                    <option>Seleccionar...</option>
                    <option value="no-bloqueados">No Bloqueados</option>
                    <option value="bloqueados">Bloqueados</option>
                </select>
            </div>

            <div class="table-responsive">
                <table id="miTabla" class="table text-nowrap mb-0 align-middle table-striped table-bordered">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <b>Nombre</b>
                            </th>
                            <th>
                                Imagen
                            </th>

                            <th class="border-bottom-0">
                                <b>Cantidad</b>
                            </th>
                            <th class="border-bottom-0">
                                <b>Estante</b>
                            </th>
                            <th class="border-bottom-0">
                                <b>Precio</b>
                            </th>

                            {{--
                            <th class="border-bottom-0">
                                <b>Bloqueado por</b>
                            </th> --}}


                            <th>
                                <b>Acciones</b>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td class="border-bottom-0">
                                    {{ $product->name }}
                                </td>

                                <!-- Agrega esta celda para mostrar la imagen -->
                                <td class="border-bottom-0">
                                    Imagen
                                </td>

                                <td class="border-bottom-0">
                                    (descrip por ahora)
                                    {{ $product->description }}
                                </td>

                                <td class="border-bottom-0">
                                    estante
                                </td>
                                <td class="border-bottom-0">
                                    (precio por ahora)
                                    {{ $product->price }}
                                </td>



                                {{-- <td class="border-bottom-0">
                                    bloqueado/disponible
                                </td> --}}


                                <td style="height:auto !important;">

                                    <div class="d-flex gap-2">
                                        <a href="{{ url('/product/detail/' . $product->id) }}"
                                            class="btn btn-warning d-flex align-items-center justify-content-center">
                                            <span class="text-center">Detalles</span>
                                        </a>
                                        <a href="{{ url('/product/edit/' . $product->id) }}"
                                            class="btn btn-primary d-flex align-items-center justify-content-center">
                                            <span class="text-center">Editar</span>
                                        </a>
                                        <form action="{{ url('/product/delete/' . $product->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres borrar este producto?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger d-flex align-items-center justify-content-center">
                                                <span class="text-center">Borrar</span>
                                            </button>
                                        </form>




                                        {{-- <form action="{{ route('product.unblock', $product->product_id) }}"
                                                method="POST" id="unblock-form-{{ $product->product_id }}">
                                                @csrf
                                                @method('PUT')
                                                <button type="button" class="btn btn-warning"
                                                    onclick="confirmUnblock({{ $product->product_id }})">
                                                    <i class="fa-solid fa-unlock"></i>
                                                </button>
                                            </form> --}}

                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
