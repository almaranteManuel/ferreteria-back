@extends('layouts.app')

@section('content')

    <div class="card mt-3">
        <h5 class="card-header">Administración de categorías</h5>
        <div class="card-body">
            <a href="{{ url('/category/create') }}" class="btn btn-success mb-3">
                <i class="fas fa-plus"></i>
                Agregar
            </a>
            <a href="/" class="btn btn-dark mb-3">Regresar</a>
            <div class="col-md-4 mx-auto text-center">
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
                            <th class="border-bottom-0 text-center">
                                <b>Categoría</b>
                            </th>
                            <th class="text-center">
                                <b>Acciones</b>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td class="border-bottom-0 text-center">
                                    {{ $category->name }}
                                </td>
                                <td class="d-flex gap-1 justify-content-center">


                                        <a href="{{ url('/category/edit/' . $category->id) }}" class="btn btn-primary d-flex align-items-center justify-content-center">
                                            <span class="text-center">Editar</span>
                                        </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
